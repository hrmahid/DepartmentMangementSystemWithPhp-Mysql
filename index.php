<?php session_start(); ?>
<?php 
	if(isset($_SESSION['u_name'])){
		include 'config/dbcon.php';
		$user = $_SESSION['u_name'];
		$sql = "SELECT * FROM students WHERE acc_name = '$user'"; 
		$run = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($run);
		$id = $row['id'];
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPI Computer Club</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />	
 
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>S</span>PICC</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Home</a></li>
								<li role="presentation"><a href="get_result.php">Results</a></li>
								<li role="presentation"><a href="books_library.php">Books</a></li>
								<li role="presentation"><a href="services.php">Services</a></li>
								<li role="presentation"><?php 
									
									if(isset($_SESSION['u_name'])){
										echo "<a href='student/my_account.php?id=$id'>My Profile</a>";
									}
									else{
										echo "<a href='contact.php'>Contact</a>";
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
	<div class="container-fluid new_header">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="search.php" method="POST">
					<input type="text" name="searchf" class="form-control" placeholder="Student / Blood Group / Books" style="width: 250px;float: left;">
					<input type="submit" name="search" class="btn btn-info" value="Search" style="float: left;">
				</form>
			</div>
		</div>
		<div style="color:green;"><h3> Are You Student?</span><span style="color:green;"><a href="student_registration.php"> Registration</a></a></h3></div>
	</div>
				</div>
			</div>	
		</nav>		
	</header>
   
	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<?php 
				include'config/dbcon.php';
					$sel = "SELECT * FROM slider";
					$on = mysqli_query($con,$sel);
					while($rw = mysqli_fetch_array($on)){
						?>
							<li><img src="images/slider/<?php echo $rw['name']; ?>" height="400px" width="100%"></li>
						<?php
					}
					?>	
			</ul>
		</div>	
    </div>
	
	<div class="container">
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h3>Welcome To SPI Computer Club</h3>
			</div>
			
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<h2>Our Activities</h2>
			</div>
		</div>
	</div>
	
		<div class="box">
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="col-sm-3">
					<i class="fa fa-html5 fa-3x"></i>
					<h4>Web Design</h4>
				</div>
			</div>
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="col-sm-3">
					<i class="fa fa-camera-retro fa-3x"></i>
					<h4>Graphics Design</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
				<div class="col-sm-3">
					<i class="fa fa-code fa-3x"></i>
					<h4>Programming</h4>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
				<div class="col-sm-3">
					<i class="fa fa-laptop fa-3x"></i>
					<h4>Networking</h4>
				</div>
			</div>
		</div>
	
	<div class="features">
		<div class="container">
			<div class="col-md-12">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Computer Department</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p>The department of Computer Technology was established at Sylhet Polytechnic Institute in 2003. The Department of Computer Technology is one of the Dynamic departments of Sylhet Polytechnic Institute. The main focus of the Computer department is on major areas of Web, Programming, Networking , Multimedia & Graphics, Application System Software, Hardware & Troubleshooting. The department is committed to the study and analysis of fundamental as well as applied problems. Teachers and students of the department work in solving problems in the fields of conventional and latest technology.<br></p>
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-lg-6">
			<img src="images/Alamgir.jpg" class="img-responsive" >
		</div>
		
		<div class="col-lg-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
			<h4>Md. Alomgir Hossain</h4>
			<h4><span style="color:red;">Designation :</span>&nbsp Chief Instructor & Head of the Departmen</h4>
			<h4><span style="color:green;">Educational Qualification:</span>&nbsp M.Sc in CSE</h4>
			<h4><span style="color:blue;">E-mail:</span>&nbsp mdalamgirh@yahoo.com</h4>
		</div>
	</div>
	<div class="container text-center">
		<h3><u>Department Details</u></h3>	
	</div>
	<div class="main-feature">
		<div class="container">
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-desktop fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">Lab Information:</h4>
						<ol style="color: green;font-weight: bold;">
								<li>Network Lab</li>
								<li>Hardware Lab</li>
								<li>Software Lab</li>
								<li>ICT Lab</li>
						</ol>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-users fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading"><a href="all_employees.php">Employees:</a></h4>
						<ol style="color: green;font-weight: bold;">
							<li>CI = 01</li>
							<li>Junior Instructor = 05</li>
							<li>Craft Instructor = 01</li>
							<li>Cleaner = 01</li>
							<li><a href="all_employees.php">View All</a></li>
						</ol>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
				<div class="media">
					<div class="media-left">					
						<i class="fa fa-code fa-3x"></i>
					</div>
					
					<div class="media-body">
						<h4 class="media-heading">SPI WD</h4>
						<p style="color: green;font-weight: bold;">SPI Web Design And Development Community. Join Our FB Group: <a href="https://m.facebook.com/groups/2092516524315212">Click To Join</a></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2><?php 
							include 'config/dbcon.php';
							$sel = "SELECT * FROM single_notice";
							$run = mysqli_query($con,$sel);
							$show = mysqli_fetch_assoc($run);
							echo $show['noticeline'];

					?></h2>
			</div>
		</div>	
		
	</div>
	
	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2>Some Of Our Teachers</h2>
				</div>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="images/about/man1.jpg" alt="" >
						<h3>Roksana Nahar</h3>
						<p><b>Designation: Junior Instructor <br />
						Educational Qualification: B.Sc in CSE</b></p>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="images/about/man2.jpg" alt="" >
						<h3>Shantonu Roy</h3>
						<p><b>Designation: Junior Instructor <br />
						Educational Qualification: B.Sc in CSE</b></p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<img src="images/about/man3.jpg" alt="" >
						<h3>Bashir Alam</h3>
						<p><b>Designation: Junior Instructor <br />
						Educational Qualification: B.Sc in CSE</b></p>
					</div>
				</div>
				
				<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="col-md-3">
						<img src="images/about/man4.jpg" alt="" >
						<h3>Abdullah Ibn Nazim</h3>
						<p><b>Designation: Junior Instructor <br />
						Educational Qualification: B.Sc in CSE</b></p>
					</div>
				</div>
			</div>	
		</div>
	</div>
	
	<!--include footer -->
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