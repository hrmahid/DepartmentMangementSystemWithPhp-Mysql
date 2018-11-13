<?php include'libs/imenu.php'; ?>

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 wella  text-center lb" >
					<form action="" method="post">
					<h5 style="color:red">Calculate CGPA</h5>
					<?php 

						if (isset($_POST['calc'])) {
							function test($data){
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
						}
						
						$r1 = test($_POST['1st']);
						$r2 = test($_POST['2nd']);
						$r3 = test($_POST['3rd']);
						$r4 = test($_POST['4th']);
						$r5 = test($_POST['5th']);
						$r6 = test($_POST['6th']);
						$r7 = test($_POST['7th']);
						$r8 = test($_POST['8th']);
						$total = ($r1*5)/100+($r2*5)/100+($r3*5)/100+($r4*10)/100+($r5*15)/100+($r6*20)/100+($r7*25)/100+($r8*15)/100;
						echo "<h4 style='color:black;'>Your CGPA = $total</h4>";


						}
					?>
					<label>1st</label>
					<input type="text" name="1st" value="0" class="form-control"  />
					<label>2nd</label>
					<input type="text" name="2nd" value="0" class="form-control"  />
					<label>3rd</label>
					<input type="text" name="3rd" value="0" class="form-control"  />
					<label>4th</label>
					<input type="text" name="4th" value="0" class="form-control"  />
					<label>5th</label>
					<input type="text" name="5th" value="0" class="form-control"  />
					<label>6th</label>
					<input type="text" name="6th" value="0" class="form-control"  />
					<label>7th</label>
					<input type="text" name="7th" value="0" class="form-control"  />
					<label>8th</label>
					<input type="text" name="8th" value="0" class="form-control"  /><br>
					<input type="submit" name="calc" class="btn btn-danger" value="Calculate">
					</form> 
				</div>
				<div class="col-md-8 panel" style="min-height: 605px;">
					<table class="table table-striped">
						<tr style="background-color: #005021;color:#62C9EB;">
							<th colspan="4"><h3>Notice Board</h3></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<tr>
							<td colspan="7">Title</td>
							<td>Created Date</td>
						</tr>
						<?php 

							$page =1;
							$perpage = 12;
							if (isset($_GET['page'])) {
									$page =1;
									$page = $_GET['page'];
								}

								$start_from =($page-1) * $perpage;
								
								$colle = "SELECT * FROM pdf_notices";
								$ran = mysqli_query($con,$colle);
								$countt = mysqli_num_rows($ran);
								
								@$total = ceil($countt/$perpage);

							$sql = "SELECT * FROM pdf_notices ORDER BY id DESC LIMIT $start_from,$perpage";
							$run = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($run)){
								
						echo"<tr>
							<td colspan='7'><a href='pdf_notices/$row[pdffile]' download='$row[name]'>$row[name]</a></td>
							<td>$row[dateofup]</td>
						</tr>";
							}
						 ?>
						
								<tr class="pagination">
							<td>
								<?php for ($i=1;$i <= @$total;$i++) { 
								echo "<a href='services.php?page=$i' class='page-item'>Page $i </a>";
								} ?>
						
							</td>
						</tr>
					</table>
				</div>
			</div>
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
