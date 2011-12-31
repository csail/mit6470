<!-- Title / Page Headline -->
<h1 class="headline center "><strong>HTML Tutorial</strong></h1>

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
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Currently Viewing: <?php echo $VIDEO_NAME?></strong></h2>

<div class="hr padded_hr"></div>
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
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Videos</strong></h2>


<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
	echo "<h3>". HTML::anchor('course/html?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
//    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/html?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}
?>
<br/>
<br/>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Exercises</strong></h2>


<p class="flavor_text">
        Here are a few exercises to help you grasp the fundamentals of HTML. For each exercise, a link is provided to a webpage with some content. Your task is to write an HTML file to replicate the contents of this webpage. You are finished when your HTML produces a page identical to the one in the exercise.
</p>


<h3 class='exerciselink'><a id='exerciselink_1' href='/html_exercises/exercise1.html'>Exercise 1</a></h3>
<p class='flavor_text'>Organization of HTML in a basic webpage. Note that webpage has a title, which is usually displayed on the tab, which you must include.</p>
<h3 class='exerciselink'><a id='exerciselink_2' href='/html_exercises/exercise2.html'>Exercise 2</a></h3>
<p class='flavor_text'>Modifying text and adding whitespace with HTML tags.</p>

<h3 class='exerciselink'><a id='exerciselink_3' href='/html_exercises/exercise3.html'>Exercise 3</a></h3>
<p class='flavor_text'>Ordered and unordered lists</p>

<h3 class='exerciselink'><a id='exerciselink_4' href='/html_exercises/exercise4.html'>Exercise 4</a></h3>
<p class='flavor_text'>Tables</p>

<h3 class='exerciselink'><a id='exerciselink_5' href='/html_exercises/exercise5.html'>Exercise 5</a></h3>
<p class='flavor_text'>Images and links. <a href='/2012/assets/resources/smiley_face.zip'>Download Image Here.</a></p>

<h3 class='exerciselink'><a id='exerciselink_6' href='/html_exercises/exercise6.html'>Exercise 6</a></h3>
<p class='flavor_text'>A form for sending e-mail. Remember that each input element should have a "name" attribute for server processing purposes. A "textarea" is included in this example. The button behavior is left unspecified.</p>

<h3 class='exerciselink'><a id='exerciselink_7' href='/html_exercises/exercise7.html'>Exercise 7</a></h3>
<p class='flavor_text'>A simple div for holding content. More complicated div exercises in the CSS tutorial</p>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Materials</strong></h2>

<h3><a href='/2012/assets/resources/html_ppt.zip'>HTML Powerpoint (used in lectures)</a></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Additional Resources</strong></h2>


<h3><a href='http://w3schools.com/html/default.asp'>More HTML Tutorials (w3schools)</a></h3>
<h3><a href='http://w3schools.com/tags/default.asp'>HTML Reference (w3schools)</a></h3>
<h3><a href='http://diveintohtml5.info'>HTML5 e-book (Dive Into HTML5)</a></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Questions?</strong></h2>
<p> Contact us at 6.470-staff@mit.edu or come to our <a href="/2012/competition/schedule">Office Hours</a></p>
<div class="hr padded_hr"></div>
<h4> Page and content by Mark Zhang </h4>
