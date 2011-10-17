// initialize form validation
// -------------------------------------------------------------------
jQuery(document).ready(function($) {
	$("#CommentForm").validate({
		submitHandler: function(form) {
			// form is valid, submit it
			ajaxContact(form);
			return false;
		}
	});
});

// Ajax send email submit contact form
// -------------------------------------------------------------------
function ajaxContact(theForm) {
	var $ = jQuery;

	$('#loader').fadeIn();

	var formData = $(theForm).serialize(),
		note = $('#Note');

	$.ajax({
		type: "POST",
		url: "contact-send.php",	// The path to "contact-send.php"
		data: formData,
		success: function(response) {
			if ( note.height() ) {			
				note.fadeIn('fast', function() { $(this).hide(); });
			} else {
				note.hide();
			}

			$('#LoadingGraphic').fadeOut('fast', function() {
				if (response.indexOf("success") != -1) {
					if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) <= 8) {
						$(theForm).css('display','none');
					} else {
						$(theForm).animate({'opacity': 0},'fast');
					}
				}

				// Show success or error message.
				result = '';
				c = '';
				if (response === 'success') { 
					result = 'Your message has been sent. Thank you!';	// The thank you message shown after sending
					c = 'success';
				} else {
					result = response;
					c = 'error';
				}

				note.removeClass('success').removeClass('error').text('');
				var i = setInterval(function() {
					if ( !note.is(':visible') ) {
						note.html(result).addClass(c).slideDown('fast');
						clearInterval(i);
					}
				}, 40);    
			}); // end loading image fadeOut
		}
	});

	return false;
}
