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
	<title>Lib-Com</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!--Font Awesome version 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	 crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">









	
</head>



<?php
            // ALL VISITS
            $data = mysqli_query($conn, 'select * from log_student');
            $visit_student = mysqli_num_rows($data);

            $data1 = mysqli_query($conn, 'select * from log_staff');
            $visit_staff = mysqli_num_rows($data1);

            $num_visit = $visit_student + $visit_staff;

            // UNIQUE
            $data = mysqli_query($conn, 'select DISTINCT(students_id) from log_student');
            $uniq_student = mysqli_num_rows($data);

            $data = mysqli_query($conn, 'select DISTINCT(staff_id) from log_staff');
            $uniq_staff = mysqli_num_rows($data);

            $uniq_visit = $uniq_student + $uniq_staff;

            // Department Wise
            $cse = 0;
            $ce = 0;
            $ece = 0;
            $eee = 0;
            $me = 0;
            $mre = 0;
            $sel = mysqli_query($conn, 'select admission_no from log_student');
            $total_no = mysqli_num_rows($sel);

            $sel = mysqli_query($conn, "Select students_id from log_student");
            if (mysqli_num_rows($sel) > 0) 
            {
                while ($data = mysqli_fetch_assoc($sel)) 
                {
                    $stud_id = $data['students_id'];
                    $sel1 = mysqli_query($conn, "Select * from students where id = '$stud_id'");
                    if (mysqli_num_rows($sel1) > 0) 
                    {
                        while ($data1 = mysqli_fetch_assoc($sel1)) 
                        {
                            $department = $data1['dept'];
                            if ($department == "CSE") 
                            {
                                $cse++;
                            }
                            if ($department == "CE") 
                            {
                                $ce++;
                            }
                            if ($department == "ECE") 
                            {
                                $ece++;
                            }
                            if ($department == "EEE") 
                            {
                                $eee++;
                            }
                            if ($department == "ME") 
                            {
                                $me++;
                            }
                            if ($department == "MRE") 
                            {
                                $mre++;
                            }
                        }
                    } 
                    else 
                    {
                        echo "No matching records found in Database";
                    }
                }
            } 
            else 
            {
                echo "No records Found in Log";
            }
            $sel = mysqli_query($conn, "select * from log_student where datetime_out ='0000-00-00 00:00:00'");
            $notout_stud = mysqli_num_rows($sel);

            $sel = mysqli_query($conn, "select * from log_staff where datetime_out ='0000-00-00 00:00:00'");
            $notout_staf = mysqli_num_rows($sel);
?>

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
				
				<li>
					<a href="#homeSubmenu" style="color:#05a8f3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
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
					<a href="#pageSubmenu" style="color:#05a8f3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
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

		<!--main page-->
		<div class="content">
			

			<!--Main Content-->
			<div class="rows">
				<div class="col-sm-4">
					<!-- 1st Column starts-->
					<div class="rows">
						<!-- Currently Inside Row -->
						<div class="panel panel-grn">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-clock faa-wrench animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div style="font-size:20px">Currently Inside</div>
										<div>Students:
											<?php echo $notout_stud;?>
										</div>
										<div>Faculty:
											<?php echo $notout_staf;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rows">
						<!-- Total Visits -->
						<div class="panel panel-vio">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-chalkboard-teacher faa-flash animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9">
										<div class="huge" style="padding:10px">
										<p2>Total Visits :</p2>
											<?php echo $num_visit; ?>
										</div>
										
									</div>
								</div>
								<a href="totals.php">
									<span class="pull-left">
										<p style="color:White;">View Details</p>
									</span>
									<span class="pull-right">
										<i class="fa fa-arrow-circle-right faa-passing animated" style="font-size:20px"></i>
									</span>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
					</div>
					<div class="rows">
						<!-- All Reports -->
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fas fa-user-graduate faa-pulse animated" style="font-size:68px"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge" style="padding:10px">All Reports</div>
									</div>
								</div>
								<a href="reports.php">
									<span class="pull-left">
										<p style="color:White;">View Details</p>
									</span>
									<span class="pull-right">
										<i class="fa fa-arrow-circle-right faa-passing animated" style="font-size:20px"></i>
									</span>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end of 1st column-->

		</div>
			<!--End Of Main Content-->


			
</div>

	<div class="clock-container">
  
		<div class="clock-digital">
    		<div class="date"></div>
   	 		<div class="time"></div>
    		<div class="day"> </div>
  		</div>
  		<div class="clock-analog">
    		<div class="spear"></div>
    		<div class="hour"></div>
    		<div class="minute"></div>
    		<div class="second"></div>
    		<div class="dail"></div>
  		</div>
	</div>
		<!--Main Page Ends-->

	<div id="clock" class="light">
<div class="display">
<div class="weekdays"></div>
<div class="ampm"></div>
<div class="alarm"></div>
<div class="digits"></div>
</div>
</div>
		
</div>

</div>
	<!--Wrapper Ends-->


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
	</div>
	<!--Footer closed-->
	


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