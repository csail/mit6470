var threads = [
	{
		id: 1,
		begin_selection: 3,
		end_selection: 120,
		article_id: 1
	},
	{
		id:2,
		begin_selection: 2550,
		end_selection: 2703,
		article_id: 2
	}
]

var comments = {
	1: [
		{
			id: 1,
			thread_id: 1,
			text: 'A bit too sensational, in my opinion...'
		}
	],
	2: [
		{
			id: 2,
			thread_id: 2,
			text: 'Great point! The users just care about the end product, not what\'s behind the scenes.'
		}
	]
}

var articles = [
	{
		id: 1,
		title: 'Clawbacks and Startups Don’t Mix',
		body: '<p>The <a href="http://www.ft.com/intl/cms/s/0/5997a58a-0bf5-11e1-9310-00144feabdc0.html#axzz1dNLxm6mx">story</a> emanating from the <a href="http://www.zynga.com">Zynga</a> is a wake-up call for startups.</p>'
			+ '<p>Reports allege the company threatened to reclaim stock options originally granted to employees who, in the eyes of the company, were <a href="http://finance.fortune.cnn.com/2011/11/10/zynga-stock-scandal/?iid=SF_TS_Lead">not performing</a> to levels on par with their equity holdings.&nbsp;I don’t know what’s true and what’s not about the Zynga&nbsp;<a href="http://news.cnet.com/8301-13506_3-57322150-17/zynga-to-employees-give-back-our-stock-or-youll-be-fired/">news</a>.&nbsp;Therefore, I’m not going to comment on the particulars of those specific allegations in this post. That said, however, something is clearly going on and spreading around the developer community, and if the Hacker News community is any indicator, this earthquake could have powerful, plate-shifting aftershocks.</p>'
			+ '<p>Last year, one of our family friends was let go from a job at a small but successful hedge fund in New York City. His path to the fund was not rosy. He struggled to get into and out of college. He scraped by to get his accounting license. He worked at a big accounting company for a decade and, it turns out, happened to be so good at his craft that he randomly caught the eye of one of New York’s most powerful financiers. He was recruited, offered a plum gig (with grueling hours), jumped ship, let go of his consistent paychecks, and took on considerable risk with a small team to help build a new hedge fund in the middle of the 2008 collapse. Then, a few weeks before his carry in the fund was to be paid out, he was approached by Mr. Number Two, plainly told he’d be fired with a year’s severance, and told to grab his belongings. “It’s just business.”</p>'
			+ '<p>He was crushed. The dollar amount aside, he couldn’t understand why this would happen. He sought the advice of all of his mentors, most of whom shook their head in disbelief, dismay, and disgust, all saying some variation of, “it’s just business.” The <a href="http://mindyourdecisions.com/blog/2008/08/19/game-theory-in-the-dark-knight-a-critical-review-of-the-opening-scene-spoilers/">opening scene</a> in <em>The Dark Knight</em> depicts a bank robbery pulled off by a group of men, each of whom kill each other, one-by-one during the heist, until the only person standing is the Joker, the mastermind of the scheme. As one of the robbers says, “One less share.”</p>'
			+ '<p>Startups are supposed to be different, right?</p>'
			+ '<p>Startups are when people get together to build something new, to form new cultures, to help define a new type of workplace while collectively trying to solve a problem. In the riskiest part of these ventures — company formation and the early stage — startups and their shareholders recruit extremely talented people, mostly technical and some non-technical, on the promise of a potential deferred payoff through realized equity in exchange for a lower monthly salary and oftentimes insane work hours and demands. Yet, so many extremely qualified, passionate people are willing to forgo the safety of a consistent paycheck and defined-contribution retirement program to get into the game. When you step back and think about the dynamics, it’s pretty damn inspiring and what makes entrepreneurial ecosystems so exceptional.</p>'
			+ '<p>The reality, however, is that startups are not immune to the Joker’s “one less share.”</p>'
			+ '<p>In the world of non-unionized, at-will employment, shareholders and managers can terminate employment when they see fit, even at times when a significant payout looms. Sure, once a cliff is reached with respect to vesting of shares, an employee will accrue equity that is rightfully theirs. In some cases, there could be sensitive company intelligence that only the founders, executive management, and board members are aware of, such as a potential acquisition, merger, or details around a public offering. With that information, management could, hypothetically, have an incentive to look over the ledger and ponder a re-splitting the pie.</p>'
			+ '<p>If the <a href="http://marketplace.publicradio.org/display/web/2011/11/10/pm-zynga-wants-employee-shares-back/?refid=0">story</a> from Zynga is true, and if equity “clawbacks” and attempts to reclaim shares (against threats of termination) are used as tactics to manage option pools and optimize for a policy of “one less share,” the repercussions from this could spread. It could be the line in the sand. Should any early-stage employee truly put their trust in an equity agreement or option grant issued by their new employer? Who will back them up when legal fees may be too daunting? Will management seek to retain talent with promises of equity instead of just hiring and firing the right people, in the best interest of the company?</p>'
			+ '<p>These ideas <a href="http://news.ycombinator.com/news">dominated</a> Hacker News and one <a href="http://news.ycombinator.com/item?id=3220819">story</a> posted today had, on its own, close to 300 comments. In my four separate interactions with engineers today, the topic came up, and their reactions were not muted. They are paying attention to every potential actor in this story and what it could mean for their future gigs or when they start their own companies. While clawbacks seem to be known dangers in the world of finance, I’d like to believe that this ethos won’t creep into the startup world, an ecosystem that is certainly not perfect but is decidedly far too passionate to say “it’s just business.”</p>',
		author: 'Semil Shah',
		date: '2011-11-10'
	},
	{
		id: 2,
		title: 'Why Mobile Flash Died: An Adobe Employee Speaks Out',
		body: '<p>Adobe’s mobile Flash efforts have recently gone the way of the western black rhino, and Principal Product Manager Mike Chambers isn’t too pleased with how the Adobe chose to break the news. In fact, he feels so strongly about it that he’s offered up <a href="http://www.mikechambers.com/blog/2011/11/11/clarifications-on-flash-player-for-mobile-browsers-the-flash-platform-and-the-future-of-flash/">his own clarifications on the matter</a>.</p>'
			+ '<p>“Our goal was to be very clear about WHAT we were doing, but in doing so, we didn’t pay enough attention to explaining WHY we were doing it,” he said on his blog today. Fair enough — the <a href="http://blogs.adobe.com/conversations/2011/11/flash-focus.html">official Adobe announcement</a> <em>was</em> pretty abrupt. So, now that everyone’s settled down a bit, why did Adobe really pull the plug?</p>'
			+ '<p>Well, for one thing, Adobe realized that Flash would never reach the same kind of ubiquity in the smartphone space that its enjoys on PCs. Adobe’s own statistics indicate that the company’s Flash Player is installed on <a href="http://www.adobe.com/products/flashplatformruntimes/statistics.html">a staggering 99% of all Internet-enabled PCs</a>. Meanwhile, their smartphone penetration numbers were <a href="http://www.adobe.com/products/flashplatformruntimes/statistics.displayTab2.html">considerably less impressive</a>.</p>'
			+ '<p>To absolutely no one’s surprise, the iPhone played a crucial role here. With Steve Jobs and company having fully turned their backs on Flash, further attempts by Adobe to push Flash onto other smartphones would mean that developers would have to craft online experiences for two opposing tribes. That’s where Adobe’s focus on HTML5 comes in.</p>'
			+ '<p>Mobile browsers have grown to be incredibly savvy in recent years, a far cry from the dumbed-down WAP views we previously had to deal with. Considering that most major mobile browsers pack support for HTML5, trying to shoehorn Flash into the mobile content mix is fighting an uphill battle. According to Chambers, “on mobile devices HTML5 provides a similar level of ubiquity that the Flash Player provides on the desktop. It is the best technology for creating and deploying rich content to the browser across mobile platforms.”</p>'
			+ '<p>There’s also the issue of how users consume content on their devices. Smartphone users have the concept of “apps” drilled into their heads before they can even take their phones home, so it’s no surprise that they’ll turn to their respective app stores if they want to play a game. I sincerely doubt that average customers knew (or cared) that their devices played well with Flash, save for a few highly specialized circumstances.</p>'
			+ '<p>Lastly, it was a simple matter of manpower. Adobe has been a fan of HTML5<a href="http://techcrunch.com/2010/05/19/adobe-html5/"> for quite a while now</a>, and it’s stronger position in the mobile space has become more and more apparent. Rather than devote time and energy to working on a platform that 1) needed to be tweaked for different OSs and hardware configurations and 2) would never be as widely-used as they would like, Adobe decided that those resources would be better spent furthering HTML5 development.</p>'
			+ '<p>So, there we have it. Mobile Flash died a quiet death, which is perhaps fitting because it never made much of a splash while it was alive. Here’s to Adobe moving on to bigger and better things.</p>',
		author: 'Chris Velazco',
		date: '2011-11-11'
	},	
]


$(document).ready(function() {
	var article, article_id, thread, article_body;
	var begin_i, end_i;
	for (var article_i in articles) {
		article = articles[article_i];
		article_body = article['body'];
		article_id = article['id'];
		for (var thread_i in threads){
			thread = threads[thread_i];
			if (thread['article_id'] !== article_id) continue;
			begin_i = thread['begin_selection'];
			end_i = thread['end_selection'];
			article_body = article_body.substring(0, begin_i) + '<span class="comment-annotation">' 
				+ article_body.substring(begin_i, end_i) + '</span>' 
				+ article_body.substring(end_i, article_body.length);
		}
		$('#articles').append('<h2>' + article['title'] + '</h2>');
		$('#articles').append('<div class="article-body collapsed" id="article' + article_id + '">' 
			+ article_body + '</div>');
		$('#articles-list').append('<li><a href="#article' + article_id + '" class="articles-list-title">' 
			+ article['title'] + '</span></li>');
		var cur_comments = comments[article_id];
		for (var comment_i in cur_comments){
			$('#articles').append('<div class="comment-text">' + cur_comments[comment_i]['text']);
		}
	}
});