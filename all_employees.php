<?php include'libs/imenu.php'; 
	
	$sql = "SElECT * FROM employes";
	$run = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($run);

?>


		<div class="container">
			<div class="row">
				<table class="table table-striped" border='1px' align='center'>
					<tr style="text-align:center">
						<th>Photo</th>
						<th>ID No</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Date of Birth</th>
						<th>Joining Date</th>
						<th>Educational Qualification</th>
						<th>Mobile</th>
						<th>Email</th>
					</tr>
					<?php
								
						while($row = mysqli_fetch_assoc($run)){
					?>
					<tr style="text-align:center">
						<td><img src="images/employee/<?php echo $row['photo']; ?>" width="70px"/></td>
						<td><?php echo $row['realid']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['desgisnation']; ?></td>
						<td><?php echo $row['dateofb']; ?></td>
						<td><?php echo $row['joindate']; ?></td>
						<td><?php echo $row['educationquali']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['email']; ?></td>
					</tr>
					<?php
							}


					?>
				</table>
			</div>
		</div>


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
