<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?php $title = "Kyle Merl | Web Development and Design"; echo $title;?> </title>
    <meta name="description" content="Design Portfolio for Kyle Merl - Web Development | UX Design | Video Editing and more."/>
	<meta name="keywords" content="Kyle Merl, web design, web development, ux design, ui design"/>

    <link href="style.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/9cead1c546.js"></script>
  </head>

  <body>
    <nav class="navbar">
<!-- Navbar for desktop -->
		<ul>	|<
		<?php 
			foreach ($nav as $links) {
		?>
			<li><a href="<?php echo $links[href];?>" alt="<?php echo $links[alt];?>" class="<?php echo $links[className];?>"><?php echo $links[text];?></a></li>
		<?php
			}
		?>
    	</ul>
<!-- Dropdown Nav Menu for mobile -->
		<ul class="toggler">
		<?php
			foreach ($navToggled as $links) {
		?>
		  <li><a href="<?php echo $links[href];?>" alt="<?php echo $links[alt];?>"><?php echo $links[text];?></a></li>
		<?php
		  }
		?>
		</ul>
    </nav>
