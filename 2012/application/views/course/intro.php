<!-- Title / Page Headline -->
<h1 class="headline center"><strong>Web Programming Introduction</strong></h1>

<div class="hr"></div>

<p class="flavor_text">
New to web programming? This series of video lectures provides a gentle introduction to web programming. We first look at what happens behind the scenes when you access a website in your browser, then briefly survey core technologies in web programming.
</p>


<?php
//names of video files without extension (mp4)
$VIDEO_LIST = array("01_Introduction","02_Accessing_Website","03_Accessing_Website_Internet_IP_Addresses","04_Accessing_Website_IPs_vs_URLs","05_Accessing_Website_DNS_Lookup","06_Accessing_Website_HTTP_Requests_Server_Side_Processing","07_Client_Side_Technologies","08_Server_Side_Technologies","09_Additional_Technologies", "10_Web_Hosting_and_Conclusion");
//names of videos
$VIDEO_NAMES = array("Introduction", "Accessing a Website", "The Internet and IP Addresses", "IPs versus URLs", "DNS Lookup","HTTP Requests and Server Side Processing","Client Side Technologies", "Server Side Technologies","Additional Technologies", "Web Hosting and Conclusion");


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

