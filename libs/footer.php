<footer>
		<div class="footer">
			<div class="container">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>SPICC</h2>
					<p>SPICC Is a Computer Club of Sylhet Polytechnic Institute. They Arrange Many Contests Like SPI Winter Programming Contest, Web Design Contest, Quiz Contests. And work for the imporvemetn of Spi Students.</p>
					
					<ul class="social-network">
						<li><a href="https://facebook.com/groups/329247040899326" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
					</ul>
				</div>
				
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s" class="far fa-book">
				<h2>Notices</h2>
				<ul  >
					<?php 
						$sql = "SELECT * FROM pdf_notices ORDER BY id DESC LIMIT 5";
						$run = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($run)){
							?>
							<li><a href="pdf_notices/<?php echo $row['pdffile'];?>"  download="<?php echo $row['name']; ?>"  style="color:#fff;" ><?php echo $row['name']; ?></a></li>
							<?php	
						}
						 ?>
				</ul>
				</div>
				
				
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
					<h3>CONTACT INFORMATION</h3>
					<ul>
						<li><i class="fa fa-home fa-2x"></i><span class="lea"> Address: Technical Road, Sylhet-3100</span></li><hr>
						<li><i class="fa fa-phone fa-2x"></i><span class="lea"><strong>Tel:</strong></span> +38 000 129900</li><hr>
						<li><i class="fa fa-envelope fa-2x"><span class="lea"></span></i> info@spi.gov.bd</li>
						<hr>
					</ul>
				</div>
				
			</div>
		</div>
		
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4 style="color:#fff">&copy; 2018 SPICC.Developed by Session: 2016-17</h4>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Multi
                    -->
					<div class="col-md-6">
						<ul class="pull-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="get_result.php">Result</a></li>
							<li><a href="services.php">Services</a></li>
							<li role="presentation"><?php 
									
									if(isset($_SESSION['u_name'])){
										echo "<a href='../student/my_account.php?id=$id'>My Profile</a>";
									}
									else{
										echo "<a href='contact.html'>Contact</a>";
									}
								
								?></li>	
								<li role="presentation"><?php 
									
									if(isset($_SESSION['u_name'])){
										echo "<a href='log_out.php'>Log Out</a>";
									}
									else{
										echo "<a href='login.php'>Log In</a>";
									}
								
								?></li>
						</ul>
					</div>
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>		
	</footer>