<!-- Title / Page Headline -->
<h1 class="headline center"><strong>HTML Tutorial</strong></h1>

<div class="hr"></div>

<p class="flavor_text">
HTML allows you to describe the content of your webpage. The following videos describe the syntax of HTML and show you how to use many of the common HTML elements. 
</p>


<?php
$VIDEO_LIST = array("01_Intro","02_Attributes","03_Headings","04_Images and Links","05_Forms","06_Lists and Tables","07_Divs","08_Conclusion");
$VIDEO_NAMES = array("Introduction, Basic Syntax, and Getting Started", "Elements and Attributes", "Headings, Paragraphs, and Text Formatting", "Images and Links", "Forms", "Lists and Tables", "Divs", "Viewing Source, Including JS and CSS, and Conclusion");

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
	
    <source src="<?php echo URL::site('assets/videos/html/'.$VIDEO_FILE_NAME.'.mp4'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
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
	echo "<h3>". HTML::anchor('course/html?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
//    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/html?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}

?>

