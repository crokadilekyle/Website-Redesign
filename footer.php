<footer>
		<?php	
		foreach ($icons as $social) {
		?>

		<a href="<?php echo $social[href];?>" target="_blank">
		<i class="fa fa-2x <?php echo $social[iCLass];?>" aria-hidden="true" style="color: #f7f7f7;"></i></a>

		<?php
		}
		?>
		<p>Kyle Merl</p>
      	<p>&copy <?php echo date("Y"); ?> All Rights Reserved.</p>
    </footer>
		<script src="functions.js"></script>
  </body>
</html>