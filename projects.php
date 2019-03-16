<?php include 'arrays.php' ?>
<?php include 'header.php' ?>
 <main>
	
	 <section class="container">
		 
		 <?php if(isset($_GET['item'])) {
		
			$projectPage = htmlspecialchars($_GET['item']);
			$projectContent = $projects[$projectPage];
			}			
		?>
		 
		<h1 class="col-2"><?php echo $projectContent[h1];?></h1>
		 <div class="col-2"><?php echo $projectContent[h2];?></div>
        
			<?php if(isset($_GET['group'])) {
				
				$projectGroup = htmlspecialchars($_GET['group']);
				
				$projectList = $projectDetails[$projectGroup];
}
	
			?>
			<?php foreach($projectList as $content){ 
	
					 ?>
		  
		<article id="projects" class="project">
          <figure><a href="<?php echo $content[linksTo];?>"><img src="<?php echo $content[projImg];?>" alt="<?php echo $content[projAlt];?>"/></a></figure>
          <div>
            <h2><?php echo $content[projH3];?></h2>
            <p>Problem: <?php echo $content[problem];?></p>
			<p>Solution: <?php echo $content[solution];?></p>
          </div>
        </article>
		  	
			<?php } ?>
		  
      </section>
    </main>
<?php include 'footer.php' ?>