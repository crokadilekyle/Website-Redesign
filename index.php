<?php include 'arrays.php' ?>
<?php include 'header.php' ?>
<?php include 'functions.php' ?>
    <main>
      <section class="container">	
		  <div class="underConstruction" id="underConstructionModal">
		    <h4>Hello!  My site is still under construction but feel free to take a look at what I have so far.  Thank you for stopping by!</h4><span id="closeButton"><strong>x</strong></span>
		  </div>
		  
		<?php
			foreach ($article as $content) {
		?>
		  
					
		<article <?php 
			setId("id", $content);
			setClass("className", $content);
		?>>
				
				
		  	<figure>
				
				<a href="<?php setHref($content, "hrefDirect", "href", "group");?>" alt="<?php echo $content[hrefAlt]; ?>">
					<img src="<?php echo $content[figImage]; ?>" alt="<?php echo $content[imgAlt]; ?>" <?php setStyle("style", $content);?>/>
				</a>
				
			</figure>
				
			<div class="home">				
				<h2><?php echo $content[h2]; ?></h2>
				<p><?php echo $content[p]; ?></p>				
			</div>
		  </article>
		  <?php } ?>
		
      </section>
    </main>
<?php include 'footer.php' ?>