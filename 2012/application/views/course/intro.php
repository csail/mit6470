<!-- Title / Page Headline -->
<h1 class="headline center "><strong>Web Programming Introduction</strong></h1>

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

$video_url_base = URL::base();
$video_url_base .= 'assets/videos/web_overview/';

if($VIDEO_NAME!="") 
{
	include Kohana::find_file('views', 'course/video_player');
}

?>

<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Videos</strong></h2>

<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
	echo "<h3>". HTML::anchor('course/intro?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
//    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/intro?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}

?>

<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Materials</strong></h2>

<h3><a href='/2012/assets/resources/overview_ppt.zip'>Web Programming Intro Powerpoint (used in lectures)</a></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Questions?</strong></h2>
<p class="flavor_text"> Contact us at 6.470-staff@mit.edu or come to our <a href="/2012/competition/schedule">Office Hours</a></p>
<div class="hr padded_hr"></div>
<h4> Page and content by Mark Zhang </h4
