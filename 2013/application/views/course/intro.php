<!-- Title / Page Headline -->
<h1 class="headline center "><strong>Intro to Making a Website</strong></h1>

<p class="flavor_text">
Download the lecture slides <?php echo HTML::anchor('assets/resources/02_web_programming_overview.pptx', 'here') ?> and the demo code from lecture <?php echo HTML::anchor('assets/resources/intro_demos.zip', 'here') ?> </p>




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

$video_url_base = URL::base();
$video_url_base .= 'assets/videos/intro/';

if($VIDEO_NAME!="") 
{
	include Kohana::find_file('views', 'course/video_player');
}

?>

<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Videos</strong></h2>
<h6 class="headline center ">By Mark Zhang</h6>
<p>
New to web programming? This series of video lectures provides a gentle introduction to web programming. We first look at what happens behind the scenes when you access a website in your browser, then briefly survey core technologies in web programming.
</p>
<p>
For those following the 6.470 lectures, the videos provide more detail on some topics we glossed during lecture, particularly on URLs, IP addresses, and DNS lookup.
</p>
<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
	echo "<h3>". HTML::anchor('course/intro?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
//    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/intro?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}

?>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Questions?</strong></h2>
<p class="flavor_text"> Ask a question on <a href="https://piazza.com/class#winter2013/6470">Piazza</a> or come to our <?php echo HTML::anchor('/competition/schedule', 'Office Hours'); ?></p>
