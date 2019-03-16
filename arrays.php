<?php
	
//------------------array for nav - index.php

$nav = array (
	array (
		href => "index.php",
		alt => "Kyle Merl",
		text => "Kyle Merl",
	),

	array (
		href => "about.php",
		group => "about",
		alt => "About",
		text => "About",
		className => "collapse",
	),
	
	array (
		href => "projects.php?item=web&group=webProjects",
		alt => "Web Design",
		text => "Web",
		className => "collapse",
	),
	
	array (
		href => "projects.php?item=ux&group=uxProjects",
		alt => "UX Design",
		text => "UX",
		className => "collapse",
	),
	
	array (
		href => "projects.php?item=video&group=videoProjects",
		alt => "Video Editing",
		text => "Video",
		className => "collapse",
	),
	
	array (
		href => "projects.php?item=more&group=moreProjects",
		alt => "More Projects",
		text => "More",
		className => "collapse",
	),
	
	array (
		href => "#",
		alt => "menu",
		className => "menu",
	)
);



// ------------------array for drop down menu

$navToggled = array_slice($nav, 1, -1, true);

// ------------------array for articles - adds categories to home page

$article = array(

	$about = array(	
		id => "about",
		className => "about",
		hrefDirect => "about.php",
		hrefAlt => "about",
		figImage => "assets/profile.jpg",
		imgAlt => "Kyle Merl's profile picture",
		h2 => "Hello.  I'm Kyle!",
		p => "I design and build websites.  I also believe that great UX design can make the world a better place.  Heck, it already has!"
	),
	
	array(	
		href => "web",
		group => "webProjects",
		hrefAlt => "Web Design Projects",
		figImage => "assets/websitebanner.jpg",
		imgAlt => "Website Design Banner Image",
		style => "style=\"object-position: 25%\"",
		h2 => "Web Design",
		p => "A website needs to be functional and look good.  It is also important to consider who the intended audience is and what problems the website must be designed to solve.  Here are some of website that I have designed recently."
	),
	
	array(	
		href => "ux",
		group => "uxProjects",
		hrefAlt => "UX Design Projects",
		figImage => "assets/dronecone.jpg",
		imgAlt => "UX Design Banner Image",
		h2 => "UX Design",
		p => "The best user interface is the one that goes unnoticed by the user.  It should make the process of performing the task as simple as possible.  Here are some wireframes that I have created for various projects."
	),
	
	array(	
		href => "video",
		group => "videoProjects",
		hrefAlt => "Video Editing Projects",
		figImage => "assets/video.jpg",
		imgAlt => "Video Editing Banner Image",
		h2 => "Video Editing",
		p => "Video Editing is something that I have always had an interst in, ever since my days learning audio production with ProTools back in my community college days.  I decided to create a YouTube channel to use as practice so I could grow my skills.  Here is the work I have done."
	),
	
	array(	
		href => "more",
		group => "moreProjects",
		hrefAlt => "Other Projects",
		figImage => "assets/bluemccaw.jpg",
		imgAlt => "More Banner Image",
		h2 => "... And More",
		p => "This is a collection of other work that I have done that doesn't necessarily fit into any of the above categories but is relevant to me as a designer and a person."
	)
);

// -------------------array for projects - creates heading and blurb for each projects page

$projects = array (
	
		"web" => array(
			pageTitle => "Web Design Projects",
			title => "web-design",
			h1 => "Web Design Projects",
			h2 => "<h3>Below I talk about my design process and then share some recent projects.</h3>
			
					<span class=\"col-2 button\"><a id=\"scroll\" href=\"#projects\">Skip to Projects</a></span>

					<h3>What Problems Do I Need to Solve?</h3>

					<p>Before I get started on site mapping or wireframing I need to know what the website needs to do.  What are the most important parts of the website?  What problems does it need to solve?  Is it mainly informative or does it need to collect user data or sell products or services?  Answering these questions well from the beginning lays a strong foundation for the rest of the project.</p>

					<h3>What is the Best Solution?</h3>

					<p>There are many ways of building a website and each of them come with advantages and challenges.  Once I know the purpose of the website I can decide the best way to build it.  I consider factors such as hosting, content management, database requirements, timeline and budget, just to name a few.  With a firm understanding of what the client expects from me, now I can move on to site mapping!</p>

					<h3>Designing the Site</h3>

					<p>A site map is a basic outline for the site and is always my starting point. Creating one helps me organize the content and create a site structure.  For larger projects I will also create a user flow chart to make sure I'm not missing anything or creating any unfavorable UX situations.</p>

					<p>At this stage I also create some user personas because I want to have a good understanding of the target audience.  It is important to cater the design to the people who are expected to use it.  Next I start wireframing.</p>

					<p>I start off with pen and paper and once I'm happy with what I have I move into Adobe XD to make low fidelity wireframes. Lo-fi wireframes are best for figuring out the page layout, user flow, information structure and the over-all functionality of the site.  I won't move onto high fidelity wireframes until the lo-fi ones are approved by the client. </p>

					<p>After getting approval for the lo-fi wireframes I create the high fidelity wireframe and prototype in Adobe XD.  The prototyping tool allows me to create a mock website for the client to interact with.  I use this to make sure they can navigate the site well.  After this is successful I jump into my editor and start building the site!</p>

					<p>I hope this short summary gives you a good idea of the process I use for designing websites.  Now let's look at some of the work I've done!</p>",
			),
	
		"ux" => array(
			pageTitle => "UX Design Projects",
			title => "ux-design",
			h1 => "UX Design Projects",
			h2 => "Below are some user interfaces I have designed.",
			),
	
		"video" => array(
			pageTitle => "Video Editing Projects",
			title => "video-editing",
			h1 => "Video Editing Projects",
			h2 => "Here are my video editing projects.",
			),
	
		"more" => array(
			pageTitle => "Graphic Design and Illustration",
			title => "more",
			h1 => "... and More",
			h2 => "Here are projects that don't fit into the other groups but are relevant."
			),
	);
			

//---------------------array for projects content - generates the details about each project on the projects page

$projectDetails = array (
	
			"webProjects" => array (
				
				"wtha" => array (
					projTitle => "The William Tennent House Associaton",
					projImg => "assets/wtha_mock_up.jpg",
					linksTo => "wtha.php",
					projAlt => "William Tennent House Association Website picture",
					projH3 => "The William Tennent House Association",
					problem => "The WTHA needed a website to assist with recruiting new members, receiving donations and educating the public about their cause.",
					solution => "I built them a Wordpress site - it was the easiest and quickest way for them to have a website up and running that allowed them the functionality they needed.",
				
				),
				
				"radick" => array (
					projTitle => "J. Radick Roofing Siding and Windows",
					projImg => "assets/radick_mock_up.jpg",
					linksTo => "radick.php",
					projAlt => "J Radick Roofing Siding and Windows picture",
					projH3 => "J Radick Roofing Siding and Windows",
					problem => "Local roofing and siding contractor wanted a basic informational website for his business.",
					solution => "Created a website using the Bootstrap framework that links with their Facebook page and provides an email contact form.",
				
				),
				
				"kyle" => array (
					projTitle => "Kylemerl.com: My Portfolio Website",
					projImg => "assets/merl_mock_up.jpg",
					linksTo => "kyle.php",
					projAlt => "kylemerl.com picture",
					projH3 => "Kylemerl.com",
					problem => "I needed a website to serve as my portfolio.",
					solution => " Created this website using CSS Grid for layout and created PHP templates to simplify adding more projects in the future.",
				
				)
			),
			
		
			
			"uxProjects" => array (
			
				$plannerApp = array (
					projTitle => "The Project Planner App",
					projImg => "assets/kylemerlcom.png",
					linksTo => "projectapp.php",
					projAlt => "project planner app picture",
					projH3 => "The Project Planner App",
					problem => "When planning home improvement projects you often draw a diagram of your room to jot down measurements and such.  I thought it would be nice if you could draw these diagrams onto your phone, record the measurements and then have the app calculate everything you need.",
					solution => "I set out to design an app that would allow you to easily take measurements and use them to calculate ALL of the materials you would need for a project."
				),
				
				$challenge = array (
					projTitle => "The 100 Day UI Challenge",
					projImg => "assets/kylemerlcom.png",
					linksTo => "challenge.php",
					projAlt => "100 day ui challenege picture",
					projH3 => "100 Day UI Challenge",
					problem => "I wanted to challenge myself daily to encourage me to learn new things and try new ideas.",
					solution => "I joined a 100 day UI challenge that I found online, where each day they email you a prompt to complete."
				),
			)
		);
			
			
		

//  ------------------array for social icons

$icons = array (
		
		array (
			href =>"https://www.linkedin.com/in/kyle-merl-29505280/",
			iCLass =>"fa-linkedin-square"
		),
		array (
			href =>"https://www.instagram.com/kylemerl/",
			iCLass =>"fa-instagram"
		),
		array (
			href =>"https://www.youtube.com/kylemerl",
			iCLass =>"fa-youtube-square"
		),
		array (
			href =>"https://github.com/crokadilekyle",
			iCLass =>"fa-github"
		),
	
	);
?>