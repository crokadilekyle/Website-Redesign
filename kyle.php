<?php include 'arrays.php'; ?>
<?php include 'header.php'; ?>
<a href="radick.php" alt="Previous Project" title="Previous Project"><span id="prev"></span></a>
<a href="wtha.php" alt="Next Project" title="Next Project"><span id="next"></span></a>
<main>
	<section class="container">
		<h1 class="col-2">My Website!</h1>
		<h2 class="col-2"><a class="light" href="kylemerl.com" alt="Kyle Merl's portfolio site" target="_blank">kylemerl.com</a></h2>
		<div class="webprojectdetails">
			<div class="webprojectcopy">
			<p>I needed a porfolio website that demonstrates my skills in:</p>
			
			<ul>
				<li>HTML and CSS</li>
				<li>PHP and JS</li>
				<li>Iterative Design</li>
				<li>UI and UX</li>
				<li>Video Editing</li>
				<li>Graphic Design</li>
				<li>And More</li>
			</ul>
			
			<p>I decided that I would build this site without using any libraries or frameworks, such as Bootstrap or JQuery.  All of the layout is achieved with CSS Grid and Flexbox, and all of the animations and effects are achieved with CSS and Vanilla Javascript.  I used PHP to generate dynamic content everywhere that it made sense to do so.  Instead of hard-coding my HTML content, I saved it into PHP arrays and used foreach loops, if statements, and the $_GET superglobal to dynamically generate the content.  This will make the task of adding new projects in the future easier.</p>
			
			<p>For this site I wanted to make sure that my coded website was an exact match to my wireframes.  I spent a lot of time in Adobe XD playing around with different layouts and color palettes.  I have found that the better the wireframe is, the easier the website is to develop.  The only aspects not included in my wireframes are the ideas that I came up with while coding my site.</p>
			
			<p>My primary concern with every site I build is creating a great user experience.  It should be easy for you to find the information you need when visiting a website.  I hope I achieved that goal!</p>
				
			<p>Here are some of the wireframes I made for this website.  Click the button below to download the XD file.</p>
			<a href="assets/downloads/kyle_merl_site.zip" download><span class="button">Download XD File</span></a>
		</div>
		<aside class="wireframesKyle">
			<img class="wireframe" src="assets/wireframe_home.jpg" alt="wireframe for the home page"/>
			<img class="wireframe" src="assets/wireframe_ux.jpg" alt="wireframe for UX design projects page" />
			<img class="wireframe" src="assets/wireframe_web.jpg" alt="wireframe for the Web projects page"/>
		</aside>
		</div>
	</section>
</main>
<?php include 'footer.php'; ?>