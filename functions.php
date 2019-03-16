<?php 

//sets the ID attribute for the article tags for index.php

function setId($id, $content) {
	
	if (is_array($content)){
		
		if(array_key_exists($id, $content)){
			echo 'id="' . $content[$id] . '"';
		}
	}
}

//sets the Class attribute for the article tags for index.php
function setClass($className, $content) {
	
	if (is_array($content)){
		
		if(array_key_exists($className, $content)){
			echo 'class="' . $content[$className] . '"';
		}
	}
}

//sets the Href attribute for the link image in each article tag for index.php
function setHref($content, $directLink, $href, $group) {
	
	if (is_array($content)){
		
		if(array_key_exists($directLink, $content)){
			
			echo $content[$directLink];
			
		}else{
			
			echo "projects.php?item=" . $content[$href] . "&group=" . $content[$group];
		}
	}
}

//sets any special styling for images if needed
function setStyle($style, $content){
	
	if (is_array($content)){
		if(array_key_exists($style, $content)){
			echo $content[$style];
		}
	}
}
?>