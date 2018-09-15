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
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">

    <title>Date Wise Scans</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">    <!-- Bootstrap Core CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">        <!-- MetisMenu CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">                   <!-- Custom CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">                <!-- Morris Charts CSS -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  <!-- Custom Fonts -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
            <a href="../logout.php" onclick="return confirm('Do You want to log out?')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
        </nav>

        <div id="page-wrapper">
            <div class="content-wrapper">                                             <!-- Content Wrapper. Contains page content -->
                <section class="content-header">                                      <!-- Content Header (Page header) -->
                    <h1>Faculty Date wise Visits</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-school"></i> Home</a></li>
                        <li><a href="totalscans.php"><i class="fas fa-desktop"></i> Total Visits</a></li>
                        <li><a href="#"><i class="far fa-clock"></i> Date Wise Visits-Faculty</a></li>
                    </ol>
                </section>
        
                <section class="content">                                                                                    <!-- Main content -->
                    <div class="row">                                                                                          <!-- Small boxes (Stat box) -->
                        
                        <div class="col">
                            <form method="POST">
                            From<br><input type="date" value="data" name="date_start"><br>
                           To<br><input type="date" value="data" name="date_end"><br>
                           <br>
                            <input type="submit" name="save" value="Search Results..." class="btn btn-primary">
                         
                        </form>
                        <br>
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
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="far fa-clock" style="font-size:68px"></i>
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
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
        
        
            </div>

        </div>

 
</body>
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>