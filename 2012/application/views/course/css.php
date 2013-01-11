<!-- Title / Page Headline -->
<h1 class="headline center"><strong>CSS Tutorial</strong></h1>

<p class="flavor_text">
CSS allows you to style the content of your webpage, for example by controlling the color and positioning of elements. The following videos describe the syntax of CSS and how to use many CSS properties, with a focus on page layout.
</p>


<?php
$VIDEO_LIST = array("01_Intro", "02_Selectors","03_Precedence","04_Box_Model", "05_Positioning", "06_Floating","07_Various_Properties","08_Conclusion");
$VIDEO_NAMES = array("Introduction and Basic Syntax", "Selectors", "Inserting CSS and Precedence", "Page Layout and the Box Model", "Positioning","Display and Floating", "Other Common Properties", "Conclusion");

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
$video_url_base .= 'assets/videos/css/';

if($VIDEO_NAME!="") 
{
	include Kohana::find_file('views', 'course/video_player');
}
?>


<div class="hr"></div>
<h2 class="headline center"><strong>Videos</strong></h2>


<!--write video links-->
<?php
for($i = 0; $i < count($VIDEO_NAMES); $i++)
{
    echo "<h3>". HTML::anchor('course/css?video='.$i, $VIDEO_NAMES[$i], array('class' => 'videolink', 'id' => 'videolink_'.$i));
//    echo "<h3><a class='videolink' id='videolink_".$i."' href='/2012/course/css?video=".$i."'>".$VIDEO_NAMES[$i]."</a></h3>";
}

?>

<br/>
<br/>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Exercises</strong></h2>

<script type="text/javascript">
var hints = ["You'll need the following properties for this one: width, margin, padding, border, color, text-decoration, text-align, color. If you want to set the top, left, right, and bottom margins, there's an abbreviated way to it with only the margin property. Same with many other properties like border, padding, background, etc. Look it up.", "Think carefully about which properties should apply to table, to tr, to td, and to th. To get the alternate row colors, you'll need to apply a class to every alternate row, then set a background-color for this class. To text-align the second column, I used the 'last-child' pseudo-element; it's easier than setting a new class for every one of those td element. Look it up.", "This one is tricky; it's not immediately apparent what properties should be applied to each of ul, li, and a. This should get you started: change the list-style-type on ul to make the item-markers disappear. Set the display mode of the 'a' elements to block and give them a width. Float the li elements.", "Getting an element to center can be tricky. One way is to set the width of the element and then set its left and right margins to 'auto'. Another way is to set the element's display mode to inline or inline block and set its parent's text-align to center. This second one works better if you want to keep the element's width 'auto' or are too lazy to figure out a width.", "Your CSS file will probably be longer than your HTML. Definitely reuse code from the previous exercises."];
    function show_hint(x)
    {
        document.getElementById("hintp"+x).innerHTML="Hint: "+hints[x-1];
    }
</script>


<p class="flavor_text">
        Here are a few exercises to help you get the hang of CSS. Some of them are quite challenging, but we tried to pick things you will actually encounter in web-programming. For each exercise, a link is provided to a page that has been styled with CSS. You will be given a pre-written HTML file. You are to write a separate CSS file to style the HTML so that it matches the page provided in the exercise. 
</p>

<p class="flavor_text">
You should set the id and class attributes of HTML elements however you wish, but you shouldn't need to add any additional HTML elements. You are finished when your HTML and CSS files produce a page identical to the one in the exercise. Have fun!
</p>

<p class="flavor_text"><b><a href="/2012/assets/resources/css_exercises_starter_pak.zip">Download starter HTML here</a></b></p>

<h3 class='exerciselink'><a id='exerciselink_1' href='/css_exercises/exercise1.html'>Exercise 1</a></h3>
<p class='flavor_text'>We start off with styling a single div element and its contents.</p>
<p class='flavor_text' id="hintp1" onclick="show_hint(1)" style="color: #993738;">Hint</p>
<h3 class='exerciselink'><a id='exerciselink_2' href='/css_exercises/exercise2.html'>Exercise 2</a></h3>
<p class='flavor_text'>Making a table prettier. The font families used are "Trebuchet MS", Arial, Helvetica, sans-serif". The nice maroon color is #993738.</p>
<p class='flavor_text' id="hintp2" onclick="show_hint(2)" style="color: #993738;">Hint</p>
<h3 class='exerciselink'><a id='exerciselink_3' href='/css_exercises/exercise3.html'>Exercise 3</a></h3>
<p class='flavor_text'>Turning a list into a navigation bar.</p>
<p class='flavor_text' id="hintp3" onclick="show_hint(3)" style="color: #993738;">Hint</p>
<h3 class='exerciselink'><a id='exerciselink_4' href='/css_exercises/exercise4.html'>Exercise 4</a></h3>
<p class='flavor_text'>Help 6.470 make a sponsor page. Note that the content is always centered even when you resize the page; that's part of the exercise.</p>
<p class='flavor_text' id="hintp4" onclick="show_hint(4)" style="color: #993738;">Hint</p>
<h3 class='exerciselink'><a id='exerciselink_5' href='/css_exercises/exercise5.html'>Exercise 5</a></h3>
<p class='flavor_text'>Remake the 6.470 home page. Feel free to re-use code from exercises 3 and 4.</p>
<p class='flavor_text' id="hintp5" onclick="show_hint(5)" style="color: #993738;">Hint</p>

<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Materials</strong></h2>
<h3><a href='/2012/assets/resources/css_ppt.zip'>CSS Powerpoint (used in lectures)</a></h3>
<h3><a href='/2012/assets/resources/css_exercises_sol.zip'>Solutions to CSS Exercises</a></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Additional Resources</strong></h2>


<h3><a href='http://w3schools.com/css/default.asp'>More CSS Tutorials (w3schools)</a></h3>
<h3><a href='http://w3schools.com/cssref/default.asp'>CSS Reference (w3schools)</a></h3>
<h3><a href='http://w3schools.com/css3/default.asp'>CCS3 Tutorials (w3schools)</a></h3>
<h3><a href='http://sass-lang.com/'>SASS Website</a></h3>
<div class="hr padded_hr"></div>
<h2 class="headline center "><strong>Questions?</strong></h2>
<p class="flavor_text"> Contact us at 6.470-staff@mit.edu or come to our <a href="/2012/competition/schedule">Office Hours</a></p>
<div class="hr padded_hr"></div>
<h4> Page and content by Mark Zhang.</h4>
