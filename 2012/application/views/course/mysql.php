<!-- Title / Page Headline -->
<script>
$(document).ready(function() {
	$('#run_mysql_code_button').click(function() {

		var code = $('#mysql_code_textarea').val();
		$.ajax({
			type: 'GET',
			url: <?php echo "'".URL::site()."ajax/runMysqlCode'" ?>,
			data: {'code': code},
			success: function(data) {
				$('#mysql_code_results').html('');
				
				data = JSON.parse(data);
				
				// Get header
				var header_html = '<tr>';
				for (var i = 0; i < data[0].length; i++) {
					header_html += '<th class="matrixItem">'+data[0][i]+'</th>';
				}
				header_html += '</tr>';
				$('#mysql_code_results').append(header_html);
				
				// Get the rest
				for (var i = 1; i < data.length; i++) {
					var row = data[i];
					var row_html = '<tr>';
					var td_class;
					if (i % 2 == 0) {
						td_class = "matrixEven";
					} else {
						td_class = "matrixOdd";
					} 
					var last_row = false;
					if (i == data.length -1) {
						last_row = true;
					}
					
					for (var j = 0; j < row.length; j++) {
						row_html += '<td class="matrixItem ' + td_class + (last_row ? ' last' : '') 
							+ '">' + row[j] + '</td>';
					}
					row_html += '</tr>';
					$('#mysql_code_results').append(row_html);
				}
				console.log(data);	
			}
		});
	});
});
</script>
<h1 class="headline center"><strong>MySQL Tutorial</strong></h1>


<div class="hr"></div>

<p class="flavor_text">
MySQL Tutorial coming soon.
</p>

<textarea id="mysql_code_textarea" class="DefaultTableStyle" style="width:800px;"></textarea><br />
<button id="run_mysql_code_button">Run</button>

<table id="mysql_code_results" class="DefaultTableStyle"></table>

<?php
$VIDEO_LIST = array();
$VIDEO_NAMES = array();

$VIDEO_NAME = "";
if(isset($_GET["video"]))
{
    $index = intval($_GET["video"]);
    if($index < count($VIDEO_LIST) && $index>=0)
    {
        $VIDEO_FILE_NAME = $VIDEO_LIST[$index];
        $VIDEO_NAME = $VIDEO_NAMES[$index];
    }
}

?>


<?php if($VIDEO_NAME!="") {?>
<h2 class="headline center"><strong>Currently Viewing: <?php echo $VIDEO_NAME?></strong></h2>

<div class="hr"></div>
<div class="video-js-box">
  <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
  <video id="video" class="video-js" width="640" height="360" controls="controls" preload="auto" poster="/2012/assets/images/6470_video_logo.png">
	
    <source src="<?php echo URL::site('assets/videos/web_overview/'.$VIDEO_FILE_NAME.'.mp4'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
    <!-- <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm; codecs="vp8, vorbis"' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg; codecs="theora, vorbis"' /> -->
    <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
    <object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash"
      data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
      <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
      <param name="allowfullscreen" value="true" />
      <param name="flashvars" value='config={"playlist":["/2012/assets/images/6470_video_logo.png", {"url": "http://video-js.zencoder.com/oceans-clip.mp4","autoPlay":false,"autoBuffering":true}]}' />
      <!-- Image Fallback. Typically the same as the poster image. -->
      <img src="/2012/assets/images/6470_video_logo.png" width="640" height="264" alt="Poster Image"
        title="No video playback capabilities." />
    </object>
  </video>
  <!-- Download links provided for devices that cant play video in the browser. -->
  <p class="vjs-no-video"><strong>Download Video:</strong>
    <a href="assets/videos/web_overview/Introduction.mp4">MP4</a>,

    <!-- Support VideoJS by keeping this link. -->
    <a href="http://videojs.com">HTML5 Video Player</a> by VideoJS
  </p>
  </div>

<?php } ?>

<h2 class="headline center"><strong>Videos</strong></h2>

<div class="hr"></div>

<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/intro?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}

?>


