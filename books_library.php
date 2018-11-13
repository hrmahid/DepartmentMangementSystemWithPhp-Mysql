<?php include'libs/imenu.php'; ?>

	<!--div class="services"-->
		<div class="container">
			<?php 
   		$sql = "SELECT * FROM library";
   		$run = mysqli_query($con,$sql);
   		while ($row = mysqli_fetch_assoc($run)) {
   			?>
   			<div class="col-md-3 wella text-center bookhob" style="height:300px;color: black;border: 0.5px solid blue;border-radius:15px; margin-left:4px;">
   				<label style="color: black"><?php echo $row['name']; ?></label><br>
				<img src="book_library/thumbnails/<?php echo $row['thumb']; ?>" width="70%" height="150px"><br>
				<a href="book_library/<?php echo $row['book']; ?>" class="btn btn-primary" download="<?php echo $row['name']." FROM SPICC"; ?>">DOWNLOAD</a>
				<br><br>
			</div>
   			<?php
   		}
    ?>
			
		</div>
	<!--/div-->
	<br />
	<?php include 'libs/footer.php'; ?>
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>