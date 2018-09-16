<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

    <title>Date Wise Scans</title>
    
    <!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

    <!--Font Awesome version 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	 crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">

    <link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

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
		    <a href="indexx.php"><h3 style="padding:10px";>Dash Board</h3></a>
				<li>
					<a href="#homeSubmenu" style="color:yellow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
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
					<a href="#pageSubmenu"  style="color:yellow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
					<ul class=" list-unstyled" id="pageSubmenu">
						<li><a href="totals.php">Total Visits</a></li>
						<li><a href="reports.php">Reports</a></li>
					</ul>
				</li>
				
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
		<!--/-Side Bar/Menu  ended-->
        

        <div class="content" style="padding-left:10px">
            <div class="content-wrapper">                                             <!-- Content Wrapper. Contains page content -->
                <section class="content-header">                                      <!-- Content Header (Page header) -->
                    <h1 style="font-family:Times of roman">Date wise Visits</h1>
                    <hr>
                </section>
        
                <section class="content">                                                                                    <!-- Main content -->
                    <div class="row">                                                                                          <!-- Small boxes (Stat box) -->
                        
                        <div class="col">
                            <form method="POST">
                                <div class="row">
                                    <div class="col">
                                        From<br><input type="date" value="data" name="date_start"><br>
                                    </div>
                                    <div class="col">
                                        To<br><input type="date" value="data" name="date_end"><br>
                                    </div>
                                    <div class="col">
                                        <button type="submit" name="save" class="btn btn-primary" value="Search Results... " > Submit
                                            <i class="fas fa-spinner fa-pulse"></i>
                                        </button>
                                    </div>
                                </div><br>
                            </form><br>
                        <?php
                            if(isset($_POST['save'])){
                                $date_start = $_POST['date_start'].' 00:00:00';
                                $date_end = $_POST['date_end'].' 23:59:59';
                                $sel = mysqli_query($conn,"select * from log_staff where datetime_in between '$date_start' and '$date_end'");
                                $staff_btwn = 0;
                                if(mysqli_num_rows($sel)>0){
                                $staff_btwn = mysqli_num_rows($sel);            
                                }
                            }
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="far fa-clock faa-flash animated" style="font-size:68px"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php 
                                                if(isset($_POST['save'])){
                                                    echo $staff_btwn;
                                                }
                                                else{
                                                    echo 0;
                                                }
                                            ?>
                                            </div>
                                            <div>Visits In Between</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="reports.php">
                                    
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right faa-wrench animated" style="font-size:48px"></i></span>
                                        
                                    
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
        
        
            </div>

        </div>

 
</body>
     <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
     crossorigin="anonymous"></script>
     
    <!-- Google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
	<script>
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});  
    </script>
</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>