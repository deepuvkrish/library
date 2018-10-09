<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!--Font Awesome version 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">









	
</head>

<body class="background">

<nav class="navbar navbar-expand-lg navbar-light bg-lig">
    <button type="button" id="sidebarCollapse" class="btn btn-infos">
        <i class="fa fa-align-justify"></i>
    </button>
    <!--<a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
     aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h style="padding-left:10px"> Lib-Com</h>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../logout.php" onclick="return confirm('Do You want to log out?')">
                <i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="wrapper">
    <!--Side Bar/Menu-->
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>Menu</h3>
			</div>
			<ul class="list-unstyled components">
                <li>
                <a href="index.php" style="color:#05a8f3">Home</a>
                </li>
				<li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color:#05a8f3">Services</a>
					<ul class="list-unstyled" id="homeSubmenu">
						<li>
							<a href="http://www.jecc.ac.in/campusbook">
							<i class="fas fa-book-open faa-wrench animated" style="font-size:20px;"></i> CampusBook</a>
						</li>
						<li>
							<a href="http://202.88.225.92/xmlui">
							<i class="fas fa-desktop faa-float animated" style="font-size:20px;"></i> Digital Space </a>
						</li>
						<li>
							<a href="http://192.168.2.206/">
							<i class="far fa-newspaper faa-tada animated" style="font-size:20px;"></i> NPTEL Courses</a>
						</li>
						<li>
							<a href="http://jecc.ac.in/library/libusers/login">
							<i class="fas fa-lock faa-flash animated" style="font-size:20px;"></i> Library Log In</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color:#05a8f3">Page</a>
					<ul class="list-unstyled" id="pageSubmenu">
						<li><a href="totals.php">Total Visits</a></li>
						<li><a href="reports.php">Reports</a></li>
						<li><a href="date.php">DateWise Scans</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<!--/-Side Bar/Menu  ended-->
    <div class="content">
    	<div>
    		<img src="../../img/head.png" height=100px width=100% >
    	</div>
		<div class="contact">
			<i class="fas fa-user-tie  faa-float animated" style="padding-top:20px;padding-left:30px"></i> Mr. VINOD <br> <br>
			<i class="fas fa-address-card faa-flash animated"style="padding-left:30px"></i> Software Engineer <br><br>
			<i class="fas fa-landmark faa-flash animated" style="padding-left:30px"></i> Jyothi Engineering College <br><br>
			<i class="fas fa-phone faa-pulse animated" style=";padding-left:30px"></i> +91-9567-225-125 
		<div>
	</div>
</div>
	


 <!--Footer-->
<div class="foot">
		<div class="container">
			<div class="row">
				<!-- Footer Copyright -->
				<div class="col" align="center">
					<p>
						<font color="white">© Copyright 2018. All Rights Reserved. | Developed &amp; Maintained by the Interns of
						<a href="http://jecc.ac.in/infrastructure/tbi" title="TBI"> tbi@jec </a> CSE - 2017 Admitted Batch.</font>
					</p>
				</div>
				<!-- Copy Right Content -->
			</div>
			<!-- Footer Copyright -->
		</div>
		<!-- Container Closed-->
</div><!--Footer closed-->
    

    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	 <script src="js/index.js"></script>
 

	
	
    <script>
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});  
    </script>





</body>

</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>
