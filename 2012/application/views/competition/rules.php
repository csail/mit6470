<style>
h6 {text-transform: none;}
</style>
<!-- Title / Page Headline -->
<h1 class="headline center"><strong>Competition Rules</strong></h1>

<div class="hr"></div>

<h2>Official Rules</h2>
<p>To qualify for this year’s Web Programming Competition, you must put together a team that is <b>eligible</b> to participate. Your team must build a Web application that matches one of the <b>competition themes</b>, and meets our <b>technical requirements</b>. Your development schedule must align with our <b>milestones</b>.</p>

<h3>Eligibility Guildelines</h3>
<p>The following rules regard eligibility to compete for cash prizes. Anyone is permitted to listen in on our lectures, and any website that meets the technical requirements will get academic credit for the course.</p>

<ul>
	<li>All "MIT students" are eligible to compete. MIT students include undergraduates, graduate students, and any students from other schools who have officially registered for the class through some cross-registration system.</li>
	<li>The contest is open to teams of 1-3 students.</li>
	<li>A non-MIT student may only participate in the competition if he is in a team with two other MIT students.</li>
</ul>

<p>You do not have to officially register for the course (6.188) to compete, unless you are not from MIT. We strongly encourage that you register for the course so we have a count on the number of competitors for logistics. However, you may compete in 6.470 even if you are taking another 12 unit class during IAP, by not registering officially for 6.470.</p>

<h3>Competition Themes</h3>
<p>Your site must match one of the following three themes to qualify for the competition. However, if your site meets the technical requirements but does not match the themes, you will receive academic credit for the course, but will not qualify for the competition.</p>

<h4>Theme 1: Politics</h4>
<p>The Internet has the potential to drastically alter the political landscape. In the olden days, the only powerful political voices were TV channels, newspapers, radios, etc. But now, with the instant-communication, all-inclusive World Wide Web, anyone can have a voice. Anyone can start a political blog and express their opinions. Anyone can have access to political information like performances in polls and the backgrounds of election candidates.</p>
<p>But how many good, popular websites dedicated to politics are out on the Web? Can you name even one? Clearly the Internet is in the need of some well-designed political websites. There is a lot of room for innovation.</p>
<p>For this year’s Web Programming Competition, we want you to build a site that is <b>devoted to some aspect of politics</b>. This is very open-ended. Here are some examples to get you started:
Examples</p>

<ul>
	<li><b>Educational</b> - a website that educates users about different candidates, different sides to political issues, or different political processes, perhaps in form of a game, a quiz, or an interesting visualization. This overlaps with the next theme, so go there for more info.</li>
	<li><b>Advocacy</b> - trying to push a particular political issue or rally people around an issue. For example, you might make a website that tries to simulate what the Internet would be like under the SOPA bill. You will have to convince the staff that your issue is of current political relevance (so you can't just pick anything and claim it's a political issue).</li>
	<li><b>Social</b> - letting people speak their mind, and organizing the ensuing discussions in some interesting and user-friendly way.</li>
</ul>

<h4>Theme 2: Education</h4>
<p>The internet also has great promise in the realm of education. Online education may soon be disrupting traditional forms of education, with its ability to reach a greater audience and its ability to engage users through well-designed web applications.</p>

<p>For this year’s Web Programming Competition, we want you to build a site that either <b>educates people on a particular topic</b> or <b>facilitates social interaction in educational communities</b>. We prefer that you focus on one topic so that you can build a user-interface specifically tailored to that topic. We emphasize engaging users in a compelling and creative way through the features on your website. Here are some examples:</p>

<h5>Examples</h5>

<h6>Educating people on a particular topic:</h6>
<ul>
	<li>Vocabulary.com is an educational website for learning vocabulary. Note that it has a nice quiz feature, a system for helping you reinforce words, a point system, a ranking system among your friends, a prominently-placed dictionary, etc. Your website will probably not have this many features, but it is a good source of inspiration.</li>
	<li>Codecademy.com is a website for learning how to program. Notice its innovative use of an on-screen terminal to get users used to inputting commands, and various features already mentioned above. It is specifically tailored to teach programming.</li>
	<li>Quizlet.com is a sophisticated flash-cards website. The interface is a little cluttered, but you can see many of the engaging features shown above.</li>
</ul>

<h6>Connecting educators to students:</h6>
<ul>
	<li>Piazza.com is a resource for classes that you should be familiar with. It allows students and teachers to interact in an open forum which encourages rapid discussions that the whole class can take part in.</li>
	<li>An online community that is geared toward blind students allowing them to interact in new and creative ways online.</li>
	<li>A website that allows students to put up requests for tutors, with the amount they are willing to pay and other information.</li>
</ul>

<h5>Counter-example</h5>
<p>Note that teaching is different from simply providing information. It is the difference between Vocabulary.com and a mere online-dictionary. Websites that merely provide information (which arguably describes every website) do not fit under the education theme.</p>


<h4>Theme 3: TV</h4>
<p>With the advent of Hulu and other streaming video services, people are watching more and more of their TV on the Internet.</p>
<p>For this year's Web Programming Competition, we want you to build a site that helps people find TV shows they like or discuss their favorite TV shows. You can do this in a number of ways, but your website should not center around a single TV show.</p>
<p>Think about the ways that TV shows differ from movies. TV shows regularly put out new episodes every week for a long period of time, whereas movies have a single opening date. TV shows develop over a course of many months and often have a bigger fan following than movies. A good website for TV shows should take this into account.</p>
<p>You may want to focus on specific kinds of TV shows like game shows or reality shows. We discourage websites centered around sports or news, as they are completely different animals. Ask us if you are unsure.</p>
<p>Here are some examples:</p>
<h5>Examples</h5>
<ul>
	<li>A Pandora-like website for episodes of TV shows</li>
	<li>A website that matches you with TV shows based on your answers to questions</li>
	<li>A website that allows you to "play" through the questions on various game shows before watching that episode.</li>
	<li>A website that allows people to "suggest" things that they want to happen in various TV show. People can upvote these suggestions. The show writers can look to the website for inspiration.</li>
</ul>

<h5>Counter-examples</h5>

<ul>
	<li>A fan-site or wiki for a specific show.</li>
</ul>

<h3>Technical Requirements</h3>

<p>All teams’ sites must satisfy the following technical requirements to qualify for competition and gain academic credit. The requirements are intended to ensure entries entail a significant programming effort, and aim to expose students to users’ expectations for modern web sites.</p>

<p>Your site must meet all the following basic requirements.</p>

<ul>
	<li><b>Dynamically-generated, database-backed pages</b>. Your site must contain pages that are produced dynamically by a back-end (like PHP, Python or Ruby scripts) that uses the results of database queries.</li>
	<li><b>Personalized experience based on user accounts</b>. Your site must have a sign-in feature. The feature can use 3rd party authentication, such as OpenID or Facebook Connect. At a minimum, a personalized UI can be achieved by including the user’s name in the header. Signing off and account management (e.g., password change) are optional.</li>
	<li><b>Original design and implementation</b>. Your site’s high-level design and the implementation of key features must be original. Customizing a CMS (e.g., Alfresco, Drupal, Wordpress) will most likely result in a site that violates this requirement. You may use open-source or publicly-available closed-source components, as long as the top-level design is original. You may use Web application frameworks like Zend, Django, and Ruby on Rails.</li>
</ul>
		
<p>Your site must help users access a non-trivial amount of content. You must achieve this goal by one of the following methods.</p>

<ul>
	<li><b>Large pre-loaded dataset</b>. Your database contains a processed version of a publicly accessible dataset that has at least 1,000 items. You will have to show us the original dataset, as well as a principal (not purely used for joins) table in your database that has at least 1,000 entries.</li>
	<li><b>Pre-generated dataset</b>. You bootstrapped your site with fake data. You will have to briefly describe the method you used to generate the data. The size requirements above still apply. Be creative when generating your data! Judges will be bored by a site where the same three names show up everywhere!</li>
	<li><b>3rd party data access</b>. Your back-end uses another application’s publicly accessible API to access and return data on the fly. Please keep in mind that the 3rd-party data must be received by your server,   You must show us the application, API description, and your implementation. If you go this route, you must use a database as a cache and fallback mechanism for API requests. You will fail milestone check-offs if your application malfunctions due to 3rd party API failures, and you may be disqualified if this happens when we test your application after the submission deadline.</li>
</ul>

<p>Your site must present its content in an efficient matter. You must achieve this goal by implementing one of the following. In short, we would like for your site to have a <b>dynamic frontend feature</b>.</p>

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

<p>Your site must work in one of the following browsers (you will have to specify which one). We will use the browser you specify to view your website for judging and grading purposes. The latest release of each of these browsers will be used.</p>

<ul>
	<li>Chrome</li>
	<li>Firefox</li>
</ul>