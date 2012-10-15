<div id="top_pane">
<!-- Title / Page Headline -->
<h1 class="headline center"><strong>PHP Tutorial</strong></h1>

<div class="hr"></div>

<p class="flavor_text">
</p>


<?php
$VIDEO_LIST = array(
	'intro_server_side_programming', 
	'intro_php',
	'variables_strings',
	'conditional_and_loops',
	'functions',
	'arrays',
	'arrays_pt2',
	'forms',
	'cookies_sessions',
	'mysql',
	'conclusion'
);
$VIDEO_NAMES = array(
	'Introduction to Server Side Programming', 
	'PHP Introduction and Basic Syntax',
	'Variables and Strings',
	'Conditional and Looping Statements',
	'Functions',
	'Arrays',
	'More about Arrays and the for-each Loop',
	'Dealing with Forms and HTTP Requests',
	'Cookies and Sessions',
	'Connecting to MySQL',
	'Conclusion'
);

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

//$video_url_base = URL::base();
$video_url_base = 'http://jlaurend.scripts.mit.edu/6470videos/php/';

if($VIDEO_NAME!="") 
{
	include Kohana::find_file('views', 'course/video_player');
}

?>


<h2 class="headline center"><strong>Videos</strong></h2>

<div class="hr"></div>

<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
	echo "<h3>". HTML::anchor('course/php?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
	
}

?>

<h2 class="headline center "><strong>Materials</strong></h2>
<h3><?php echo HTML::anchor('assets/resources/php_ppt.pdf', 'PHP Slides (used in lectures)'); ?></h3>
<!-- <h3><?php echo HTML::anchor('assets/resources/html_exercises_sol.zip', 'Solutions to PHP Exercises'); ?></h3> -->
<div class="hr padded_hr"></div>

<h2 class="headline center "><strong>Additional Resources</strong></h2>
<h3><?php echo HTML::anchor('http://www.php.net/manual/en/', 'PHP Manual'); ?></h3>
<h3><?php echo HTML::anchor('http://www.w3schools.com/php/default.asp', 'PHP Tutorial (w3schools)'); ?></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Questions?</strong></h2>
<p class="flavor_text"> Contact us at 6.470-staff@mit.edu or come to our <a href="/2012/competition/schedule">Office Hours</a></p>
<div class="hr padded_hr"></div>
<h4> Page and content by Charles Liu.</h4>
</div>
<div id="bottom_pane" style="width: 100%; position: fixed; bottom: 0; left: 0; background-color: white; height: 40%; display:none">
	BOTTOM PANE
</div>

