<style>
div.code_result {
	border: 1px dashed black; padding: 10px;
}

</style>
<h1>Lecture Notes - Day 1</h1>
<p>On the first day of class, we went through the logistics of the class, unveiled the themes, and dove into HTML and CSS. The slides were borrowed from our online tutorials which we suggest you go through for a more thorough understanding of the content. You can find them under the Course Materials drop down. You'll want to go through Start Here, HTML, and CSS.</p>

<h2>Web Programming Overview</h2>
<p>We briefly discussed the Client/Server nature of the internet. For the purposes of this class, all you really need to understand is that when a users navigates to an address via a browser, an HTTP request is sent to the server at that address. The server process your request and gives a response which your browser knows how to display.</p>

<p>In particular, the client (your browser) knows how to handle HTML, CSS, and JavaScript files. The HTML files are used for specifying the semantic content of your page while CSS specifies how to style that content. JavaScript is a light-weight scripting language that allows you to make your website more dynamic.</p>

<h2>HTML</h2>
<p>We went over HTML via an example. HTML basically consists of tags which may have attributes. For example, the following is an HTML tag:</p>
<code>
	<?php echo HTML::chars('<p>I love IAP!</p>'); ?>
</code>

<p>We can attributes to this tag which will be useful when we need to apply styles to this element using CSS:</p>

<code>
	<?php echo HTML::chars('<p id="my_iap_paragraph" class="extremely_excited_text">I love IAP!</p>')?>
</code>

<p>From here, we went through a very basic example of making a bio page for Joe. We saw heading how to use heading tags, divs, lists, and tables. Here is the code we wrote:</p>

<pre>
<?php $code = <<<EOD
<!DOCTYPE html>
<html>
	<head>
		<title>Joe's Bio</title>
	</head>
	<body>
		<h1>Joe's Home Page</h1>
		<div id="about_me" class="center italics">
			<h2>About Me</h2>
			<p>I'm on the staff for 6.470 and it's awesome!</p>
		</div>
		<h2>Hobbies</h2>
		<ol>
			<li>Running</li>
			<li>Watching Basketball</li>
			<li>Coding</li>
		</ol>
		<h2>Running Log</h2>
		<table border="1" style="border-collapse: collapse; color: red; border-color: blue;">
			<tr>
				<th>Date</th>
				<th>Route</th>
				<th>Distance</th>
				<th>Comment</th>
			</tr>
			<tr>
				<td>1/7/2012</td>
				<td>River Loop: Longfellow to JFK</td>
				<td>7.7</td>
				<td>Beautiful winter day!</td>
			</tr>
			<tr>
				<td>1/9/2012</td>
				<td>Treadmill</td>
				<td>3</td>
				<td>too cold!</td>
			</tr>
		</table>
	</body>
</html>
EOD;
	echo HTML::chars($code);
	?>
</pre>

<p>When you view this in the browser, you get this:</p>

<div class="code_result">
	<?php echo $code; ?>
</div><br />

<p>Note: What you see above is due to other CSS styles we have defined on the 6.470 website. If you run the copy the code to a new file and view it in your browser, you should likely see something slightly different (mainly there should be a border around the table).</p>

<br />
<h2>CSS</h2>
<p>For CSS, we went through about half of the slides for our online tutorial. We focused on core CSS concepts which are often sources of confusion. Namely the <a href="http://www.w3schools.com/css/css_boxmodel.asp">Box Model</a> and page layout/positioning.

<p>We then dove right into a demo where we tried to code up the 6.470 homepage as much as we could in our limited time. We were able to get the basic layout of the page down and the dropdown menu in place. Once we had the basic layout down, we played around with some new CSS3 features such as box shadow and rounded corners. At the end of the lecture we navigated over to a <a href="2011.beercamp.com">website</a> that uses CSS3 transformations in an incredibly creative way. (Note: that site uses JavaScript for handling the scroll event and changing the CSS3 dynamically.)</p>

<p>Here's the code we wrote during lecture:</p>

<pre>
<?php
$code2 = <<<EOD
<html>
	<head>
		<title>6.470</title>
		<style>
		body {
			background-color: #e8ebec;			
		}
		#wrapper {
			border: 1px solid gray;
			width: 600px;
			height: 600px;
			margin-left: auto;
			margin-right: auto;
			background-color: #f4f5f5;
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			box-shadow: 3px 3px 5px black;
		}
		#logo img {
			width: 200px;
			float: left;
		}
		#nav_bar{
			float: right;
			background-color: black;
			color: white;
			margin-top: 10px;
		}
		#nav_bar ul {
			list-style: none;
			background-color: black;
		}
		#nav_bar ul li {
			float: left;
			margin-left: 4px;
			margin-right: 4px;
			position: relative;
		}
		#nav_bar ul li a {
			text-decoration: none;
			color: white;
		}
		#nav_bar ul li:hover a {
			color: red;
		}
		#nav_bar ul li ul {
			display: none;
		}
		#nav_bar ul li:hover ul {
			display: block;
			position: absolute;
		}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="logo"><img src="logo.png" alt="6.470 Logo" /></div>
			<div id="nav_bar">
				<ul>
					<li><a href="http://6.470.scripts.mit.edu">Home</a></li>
					<li>
						<a href="#">Course Material</a>
						<ul>
							<li>Start Here</li>
							<li>HTML</li>
							<li>CSS</li>
						</ul>
					</li>
					<li><a href="#">Competition</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
EOD;

echo HTML::chars($code2);
?>
</pre>

<h2>HTML/CSS References and Resources</h3>
<p>The lecture was by no means a comprehensive coverage of HTML/CSS. Our intent was to introduce you to the core concepts, show you a quick couple demos, and then to point you in the right direction. A few resources you should use as references and to dive deeper into HTML/CSS are listed below.</p>

<ul>
	<li>First, make sure to view our online tutorials under the Course Materials drop down!</li>
	<li><a href="https://developer.mozilla.org/en-US/">Mozilla Developer Network</a> - Lots of great references and articles covering all the essentials and more of web programming.</li>
	<li><a href="www.w3schools.com">W3Schools</a> - Contains tons of great and simple tutorials. Great resource to look up the usage of HTML/CSS.</li>
	<li><a href="http://www.w3.org/">W3C</a> - The World Wide Web Consortium develops/maintains the major web standards. You can go here to see the official documentation on HTML5, CSS3, and more. You should only really go here if you're looking to really read the letter of the law.</li>
</ul>

<h2>Materials</h2>
To download the code written in lecture <?php echo HTML::anchor('assets/resources/Day1Code.zip', 'click here')?>.