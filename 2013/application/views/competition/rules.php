<style>
h6 {text-transform: none;}
</style>
<!-- Title / Page Headline -->
<!--<h2 style="color:#90292c; text-align:center;">We're revising our contest for 2013. Check back closer to IAP!</h2>-->

<h1 class="headline center"><strong>Competition Rules</strong></h1>

<h3>Rules are subject to change prior to 1/7/13, the start of the competition.</h3>

<div class="hr"></div>

<h3>Overview</h3>
<p>To qualify for this year's Web Programming Competition and compete for <?php echo HTML::anchor('competition/prizes', 'cash prizes'); ?>, you must put together a team that is <b><a href="#eligibility">eligible</a></b> to participate. Your team must build a Web application that matches one of the <?php echo HTML::anchor('competition/challenge', 'competition themes'); ?>, and meets our <b><a href="#techreq">technical requirements</a></b>. Your development schedule must align with our <?php echo HTML::anchor('competition/milestones', 'milestones'); ?>. Your team may wish to enter the <?php echo HTML::anchor('competition/rookies', 'rookie division'); ?>.</p>

<p><b>Anyone is permitted to listen in on our <?php echo HTML::anchor('competition/schedule', 'lectures and workshops'); ?> (although priority will be given to those enrolled in our course), and any team with 1-3 students that completes our milestones and submits a website that meets the technical requirements will get academic credit for the course. (see <b>Course Requirements</b>)</b></p>

<a name="eligibility"></a>
<h3>Eligibility Guildelines</h3>
<p>The following rules regard eligibility to compete for cash prizes. </p>

<ul>
  <li><b>MIT students</b>: All "MIT students" are eligible to compete. "MIT students" include undergraduates, graduate students, and any students from other schools which have an official cross-registration program with MIT (Harvard, Wellesley, etc.)</li>
  <li><b>Non-MIT students</b>: A non-MIT student may only participate in the competition if he is in a team with two other MIT students.</li>
  <li><b>Team size</b>: The contest is open to teams of 1-3 students.</li>
  <li><b>Outside help</b>: Non-team members may not contribute to a site's implementation or design (including graphic design). However, team members may use publicly available components (see <b><a href="#techreq">Original Design and Implementation</a></b>)
  <li><b>Past winners</b>: Past competitors who have won more than $2000 total in their 6.470 career are not eligible to compete. As an example, if a team of 3 wins $6470, each team member is considered to have won $6470/3 and is not eligible to compete again. However, members of a team of 3 that won $5000 can compete again. Special prizes do not count towards this restriction. If in doubt, please <b><a href="mailto:6.470-staff@mit.edu">contact the staff</a></b>.</li>
  <li><b>Staff</b>: Current staff members and their immediate family members cannot compete.</li>
</ul>

<p>You do not have to officially register for the course (6.S188) to compete, as long as you are eligible. We strongly encourage that you register for the course so we have a count on the number of competitors for logistics. However, you may compete in 6.470 even if you are taking another 12 unit class during IAP, by not registering officially for 6.470.</p>

<a name="techreq"></a>
<h3>Technical Requirements</h3>

<p> All teams' sites must satisfy the following technical requirements to qualify for competition and gain academic credit. The requirements are intended to ensure entries entail a significant programming effort, and aim to expose students to users' expectations for modern web sites.</p>

<p>Your site must meet all the following <b>basic requirements</b>.</p>

<ul>
	<li><b>Dynamically-generated, database-backed pages</b>. Your site must contain pages that are produced dynamically by a back-end (like PHP, Python or Ruby scripts) that uses the results of database queries.</li>
	<li><b>Personalized experience based on user accounts</b>. Your site must have a sign-in feature. The feature can use 3rd party authentication, such as OpenID or Facebook Connect. At a minimum, a personalized UI can be achieved by including the user’s name in the header. Signing off and account management (e.g., password change) are optional.</li>
	<li><b>Original design and implementation</b>. Your site’s high-level design and the implementation of key features must be original. Customizing a CMS (e.g., Alfresco, Drupal, Wordpress) will most likely result in a site that violates this requirement. You may use open-source or publicly-available closed-source components, as long as the top-level design is original. You may use Web application frameworks like Zend, Django, and Ruby on Rails.</li>
</ul>
		
<p>Your site must help users access a <b>nontrivial amount of content</b>. You must achieve this goal by one of the following methods.</p>

<ul>
	<li><b>Large pre-loaded dataset</b>. Your database contains a processed version of a publicly accessible dataset that has at least 1,000 items. You will have to show us the original dataset, as well as a principal (not purely used for joins) table in your database that has at least 1,000 entries.</li>
	<li><b>Pre-generated dataset</b>. You bootstrapped your site with fake data. You will have to briefly describe the method you used to generate the data. The size requirements above still apply. Be creative when generating your data! Judges will be bored by a site where the same three names show up everywhere!</li>
	<li><b>3rd party data access</b>. Your back-end uses another application’s publicly accessible API to access and return data on the fly. Please keep in mind that the 3rd-party data must be received by your server,   You must show us the application, API description, and your implementation. If you go this route, you must use a database as a cache and fallback mechanism for API requests. You will fail milestone check-offs if your application malfunctions due to 3rd party API failures, and you may be disqualified if this happens when we test your application after the submission deadline.</li>
</ul>

<p>Your site must contain a <b>dynamic, nontrivial frontend feature</b>. You might achieve this by implementing one of the following features:</p>

<ul>
	<li><b>Data visualization</b>. Your application presents data in a visual manner that enhances the users’ understanding of the data. The visualization should highlight some feature of the data that isn’t obvious or trivial. The user must be able to influence which data gets displayed in the visualization’s. You are allowed to use a preexisting implementation for your visualization, like a jQueryUI widget, provided that it fits with your application. Original visualizations will be recognized with special awards.</li>
	<li><b>Dynamic filtering</b>. Your application shows a small (< 10%) subset of data which is most relevant to the user at the moment, or ranks the data such that the most relevant items are shown first. The subset and/or the ordering of the data must change in response to the user’s actions. Three examples that would fulfill this requirement are full-text search, criteria-based search, and a “recommended for you” section. For the latter, you will have to convince us that the contents changes based on user actions.</li>
</ul>

<p>Your site must comply with U.S. law and M.I.T. academic policy. Here are the issues that are usually relevant.</p>

<ul>
	<li><b>Intellectual property use</b>. Make sure you only use publicly-available data for your site. This applies to both the data in your database, and the implementation. Pay particular attention to images, fonts, and CSS, as most cease-and-desist letters refer to these.</li>
	<li><b>Old or proprietary code</b>. Asides from your code, all the 3rd-party software that your site uses, whether compiled binaries (e.g. DLLs) or source code (e.g. a PHP library), that you use must be publicly available, either for free or for a fee. Most importantly, you may not use any code that you wrote before January 3, 2011, unless it was publicly released.</li>
	<li><b>Plagiarism</b>. We will ask you to name all your team members, and list all the 3rd party data, code, and media that you have used. Please keep careful track of your sources, just like you would for any other course. Plagiarism may result in disqualification, a failing grade, and referral to MIT’s Committee of Discipline.</li>
	<li><b>Straight-forward evil</b>. Do not spam. Do not encourage or assist users in breaking non-disclosure agreements or infringing copyright. Do not abuse M.I.T.’s infrastructure or databases. Do not interfere with other contestants’ development process.</li>
</ul>

<p>Your site must work in one of the following browsers (you will specify which one in the <?php echo HTML::anchor('competition/milestones', 'milestones'); ?>). We will use the browser you specify to view your website for judging and grading purposes. The latest release of each of these browsers will be used.</p>

<ul>
	<li>Chrome</li>
	<li>Firefox</li>
</ul>

