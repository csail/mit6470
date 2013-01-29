<!-- Title / Page Headline -->
<!--<h2 style="color:#90292c; text-align:center;">We're revising our contest for 2013. Check back closer to IAP!</h2>-->

<div class="hr"></div>

<table cellspacing="0" cellpadding="0" id="FeatureMatrix" class="center" 
	style="margin-left: auto; margin-right: auto; margin: 50px auto"
	<tbody>
		<tr>
			<th><h6>Milestone</h6></th>
			<th><h6>Date Due</h6></th>
			<th><h6>Description</h6></th>
		</tr>
		<tr>
			<td valign="center" class="matrixItem"><a href="#milestone1">Milestone 1</a></td>
			<td class="matrixOdd">1/13/13</td>
			<td class="matrixEven">UI/UX Design Mockup</td>
		</tr>
		<tr>
			<td valign="center" class="matrixItem"><a href="#milestone2">Milestone 2</a></td>
			<td class="matrixOdd">1/20/13</td>
			<td class="matrixEven">Dynamic Database-backed Functionality</td>
		</tr>
		<tr>
			<td class="matrixItem"><a href="#milestone3">Milestone 3</a></td>
			<td class="matrixOdd">1/27/13</td>
			<td class="matrixEven">Non-trivial Frontend Feature</td>
		</tr>
		<tr>
			<td class="matrixItem last"><a href="#finalsub">Final Submission</a></td>
			<td class="matrixOdd last">1/29/13</td>
			<td class="matrixEven last">Fully functional site</td>
		</tr>
	</tbody>
</table>
<br />

<a name="milestone1"></a>
<h3 id="milestone1">Milestone 1 - UI/UX Design Mockup</h3>
<p>Before beginning work on any website, you should first take some time to think about your users. Who do you envision using your site, what needs will your site fulfill for your target users, and how should you best design your site to fulfill these needs?</p>

<p>For this milestone, please complete the following:</p>

<h4>User research</h4>

<ol>
	<li>What problem does your application address? Aim for 1-2 sentences.</li>
	<li>How does your application address the problem above? Aim for one sentence. The next question is a better place for elaborate explanations.</li>
	<li>What are the killer features of your application?</li>
  <li>Identify and briefly describe your target demographic. Who do you envision using your site?</li>
	<li>Identify at least one user characteristic (technical expertise, familiarity with site topic, frequency of visits) that you believe will cause users to use your site differently or require different features from your site. Briefly explain why your chosen characteristic is important.</li>
  <li>Use the above to help you find three users from different attitude/behavior sets within your target audience. Sit down with these people and conduct <b><a href='http://www.nngroup.com/articles/interviewing-users/'>user research interviews</a></b> on each of them. You might ask your users how they currently deal with the problem that your site aims to solve, or you might ask what features they'd want in a website such as yours. You might try to explore their general attitude toward the problem. The information you collect will guide your site's design and the features you chose to include. Briefly summarize these interviews and what you learned from them.</li>
  <li>Explain any modifications to your initial idea or your initial feature set based on your user interviews.</li>
	<li>Use these interviews to develop at least two different <b><a href='http://en.wikipedia.org/wiki/Persona_(user_experience)'>user personas</a></b>.</li>
  <li>Develop at least one <b><a href='http://en.wikipedia.org/wiki/User-centered_design#Use_case'>use case</a></b> for your site. This should be a list or table demonstrating a sequence of user actions and website responses that occur when a user attempts to complete a core task on your site. Make sure to indicate the task the user is trying to complete.</li>
</ol>

<h4>Site Design</h4>

<p>Think hard about your most complicated page. What are the important features of this page? What usability problems may come up? For your most important page:</p>

<ol>
	<li>Draw out, by hand, three different designs for this page. Scan these for your submission.</li>
	<li>Make a list of pros and cons for each design (3 pros and 3 cons for each).</li>
	<li>Pick the best design and mock it up using a program such as Photoshop, Inkscape, Gimp. Submit a screenshot of this mockup.</li>
</ol>

<h4>Additional Questions</h4>

<p>Please answer the following questions. Please be succinct as possible.</p>

<ol>
  <li>Who is on your team? You may list at most 3 people. For each member list the full legal name, .edu e-mail, school, major(s), year, and graduate/undergraduate status.</li>
  <li>Would your team like to participate in the <?php echo HTML::anchor('competition/rookies', 'Rookie Division'); ?>?</li>
	<li>Which of the themes does your application match? Your answer should be one sentence if the match is reasonably obvious. Be as brief as you can. If your application matches both themes, list the one where the matching is more obvious.</li>
	<li>What technology do you plan to use for your server-side programming (e.g. PHP, Ruby on Rails, etc)?</li>
	<li>What risks do you envision preventing you from successfully implementing your idea? Consider this an exercise of imagination, not a test of confidence.</li>
	<li>Are you planning to participate in the competition? Your answer will solely be used for planning purposes.</li>
</ol>

<p>Submit a PDF (or a ZIP if you have multiple files) to <a href="http://stellar.mit.edu/S/course/6/ia13/6.s188/">Stellar</a> that addresses each of the bullet points and numbered questions above. Only one person from your group needs to submit this but make sure your teammates are listed.</p>

<h3 id="milestone2" style="margin-top:50px">Milestone 2 - Dynamic Database-backed Functionality</h3>
<a name="milestone2"></a>
<p>For this milestone, we would like to see that you have made progress on using a server-side programming language (such as PHP, Ruby, Python), along with a database (such as MySQL), to be able to dynamically generate a page.</p>

<p>Specifically, by this milestone, you should have:</p>

<ul>
	<li><b>A login system</b>. You should be able to distinguish between the case where no one is logged in and the case where a specific user is logged in using a personal username/password combination or a third-party API such as Facebook</li>
	<li><b>Dynamic content.</b> The site should be able to display different content on the same page under different situations.</li>
	<li>A <b>database</b> with a "significant" amount of data. We're not going to define number of lines or entries, as long as your database contains enough data to satisfy the two requirements above and be able to generate sufficiently different content given different situations.</li>
</ul>

<p>Answer the following questions:</p>

<ol>
	<li>Did any of your answers to Milestone 1 change (particularly the Additional Questions and your idea for your site)? Write the numbers for the questions whose answers have changed, and their new answers.</li>
	<li>What feature are you demonstrating to meet the dynamic page generation requirement? We highly encourage you to implement your killer feature first, and demo it for this Milestone.</li>
	<li>Give us a link to the current version of your site that has this dynamic page generation. Alternatively, you may opt to come in to office hours on Sunday to show us the page.</li>
	<li>What technology are you using for the back-end? Include any frameworks if relevant.</li>
	<li>What technology do you plan to use for the front-end? Mention JavaScript frameworks like jQuery, advanced standards like WebGL, and Flash / Silverlight, if you plan to use them.</li>
	<li>What is the main browser you are targeting? Must be one of our supported browsers.</li>
	<li>What other features have you already built? Are they necessary for a minimum viable product? Briefly mention the features. Use at most one sentence per feature. Don’t feel the need to have a long laundry list.</li>
	<li>What features do you still have to build for a minimum viable product? Briefly mention the features. This is intended to help you measure your progress.</li>
	<li>What features would you like to build after finishing the core features? Briefly mention the features, in order of their importance to you. This is intended to help you focus your development efforts. Don’t feel the need to have a long laundry list.</li>
	<li>Please discuss one important design decision (at any level) that you had to make. What were the different alternatives and how did you make your decision?</li>
	<li>What implementation unknown / risks are you still facing? Consider this an exercise of imagination, not a test of confidence.</li>
</ol>

<p>Take your page from question 2. Walk through your code. In particular, write down:</p>
<ol>
	<li>What are the inputs going into the page? How are they being passed to the server? (GET? POST? Cookies?)</li>
	<li>What information from your database does this page require? Give the database schema of all tables that are used by this page.</li>
	<li>What other information does your server use to piece together the response, if any?</li>
	<li>Briefly spec out or describe: how should the server respond in different situations? Are there any edge cases? Make sure that your site actually behaves as intended.</li>
</ol>

<p>Optional question:</p>
<ol>
<li>If you are currently in the <?php echo HTML::anchor('competition/rookies', 'Rookie Division'); ?> and would like to switch to the main competition, please let us know.</li>
</ol>

<p>Submit a PDF (or a ZIP if you have multiple files) to <a href="http://stellar.mit.edu/S/course/6/ia13/6.s188/">Stellar</a> that addresses each of the bullet points and numbered questions above. Only one person from your group needs to submit this but make sure your teammates are listed.</p>

<h3 id="milestone3" style="margin-top:50px">Milestone 3 - Dynamic Frontend Feature</h3>
<a name="milestone3"></a>
<p>
	In addition to the dynamic backend capabilities we required in milestone 2, we would also like for you to create a dynamic frontend feature. The options for this are numerous. Here are some examples:
</p>

<ul>
	<li>Filtering/sorting done entirely in JavaScript.</li>
	<li>Use of drag and drop to improve the UI.</li>
	<li>Usage of either CSS3 or JavaScript transitions, animations, or transformations.</li>
</ul>

<p>Answer the following questions:</p>

<ol>
	<li>Give us a link to the current version of your site that has this dynamic frontend feature. Alternatively, you may opt to come in to office hours on Sunday to show us the page.</li>
	<li>Describe the feature you implemented at a high-level (i.e. a non-technical person should be able to understand this description).</li>
	<li>How does this feature address your users' needs?</li>
	<li>Were any tradeoffs made in the UI design of this feature, e.g. did you sacrifice power for easy-of-learning?</li>
	<li>What technology did you use for this frontend feature? Cite any 3rd party libraries that you used.</li>
	<li>Describe the feature you implemented at a lower level. Please go into as much (and only as as much) detail as is warranted by your implementation. Dive deep into the work <i>you</i> did and mention any 3rd party tools you used. You do not need to describe how these 3rd party tools work.</li>
	<li>What is the main browser you are targeting? Must be one of our supported browsers.</li>
</ol>

<p>Submit a PDF (or a ZIP if you have multiple files) to <a href="http://stellar.mit.edu/S/course/6/ia13/6.s188/">Stellar</a> that addresses each of the bullet points and numbered questions above. Only one person from your group needs to submit this but make sure your teammates are listed.</p>

<h3 id="finalsub" style="margin-top:50px">Final Competition Submission</h3>
<a name="finalsub"></a>
<p> This only applies to competitors. For your final submission (due Tuesday at 5pm), please submit a link to your final site. In addition, answer the following questions: </p>

<ol>
<li>Briefly list the core technologies that you ended up using to build your site (for example, Ruby on Rails, Node.js).</li>
<li>Please list all 3rd party libraries that are used in your website. This includes all code, apart from core technologies, that powers your website but was not written by your team. (including Twitter Bootstrap, jQuery, Pusher API) If in doubt, please include it. For each 3rd party library, please explain how you use it in your website.</li>
<li>Please specify (for our convenience) which browser your site was developed for.</li>
</ol>

Additionally, please be aware of the following if you are chosen for a semifinalist:

<ul>
<li>We will announce semifinalists for both the Rookie and General divisions by midnight Tuesday.</li>
<li>Semifinalists will have a 15 minute time slot on Wednesday from approximately 11am to 4pm to give a 5 minute presentation to the judges and answer questions about their site. We recommend that your presentation explain what problem your site aims to solve, why there is a need for this problem to be solved, and why your site solves this problem well. We also recommend that you use slides or a video instead of a live demo. More information about the presentation will be included in the semifinalist announcement.</li> 
<li>Sign-ups for the presentations will be sent out 30 minutes after the semifinalist announcement and will be first-come first-served.</li>
<li>Semifinalists will be required to give us access to the source code for their website. The best way to do this is through a Github repo. Providing us access to the web_scripts folder on scripts.mit.edu or emailing us a copy of the source code (including 3rd party libraries) would also work. We must receive this before presentations start on Wednesday or your team will not be eligible.</li>
<li>Your team is allowed to make changes to your site after the final submission deadline. However, if your site is broken when we look at it, you will not have a second chance, so make updates at your own risk.</li>
<li>Semifinalists will also give a short presentation at the Award Ceremony and must attend a mandatory Winner's Luncheon from 12pm - 2pm on Friday. Additionally, all Semifinalists will be eligible for the Webby Award, which involves online voting for the most popular website.</li>
</ul>


