var openEditorLinkClickHandler = function() {
	$('#bottom_pane').toggle();
};


$(document).ready(function() {
	$('#open_editor_link').click(openEditorLinkClickHandler);
});