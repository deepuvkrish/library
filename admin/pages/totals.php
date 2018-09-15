<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>

<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">


    <title>Department Wise Visits</title>
    
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

<?php
                // Department Wise
                $cse=0;$ce=0;$ece=0;$eee=0;$me=0;$mre=0;
                $sel = mysqli_query($conn,'select admission_no from log_student');
                $total_no = mysqli_num_rows($sel);
        
                $sel = mysqli_query($conn,"Select students_id from log_student");
                if(mysqli_num_rows($sel)>0){
                    while($data = mysqli_fetch_assoc($sel)){
                        $stud_id = $data['students_id'];
                        $sel1 = mysqli_query($conn,"Select * from students where id = '$stud_id'");
                        if(mysqli_num_rows($sel1)>0){
                            while($data1 = mysqli_fetch_assoc($sel1)){
                                $department = $data1['dept'];
                                if($department=="CSE"){
                                    $cse++;
                                }
                                if($department=="CE"){
                                    $ce++;
                                }
                                if($department=="ECE"){
                                    $ece++;
                                }
                                if($department=="EEE"){
                                    $eee++;
                                }
                                if($department=="ME"){
                                    $me++;
                                }
                                if($department=="MRE"){
                                    $mre++;
                                }
                            }
                        }
                        else{
                            echo "No matching records found in Database";
                        }
                    }
                }
                else{
                    echo "No records Found in Log";
                }
?>
<?php
                // Department Wise
    $dcse = 0;$dce = 0;$dece = 0;$deee = 0;$dme = 0;$dmre = 0;$dmgm = 0;
    $cel = mysqli_query($conn, 'select employee_code from log_staff');
    $totalsno = mysqli_num_rows($sel);

    $cel = mysqli_query($conn, "Select staff_id from log_staff");
    if (mysqli_num_rows($cel) > 0) {
    while ($dat = mysqli_fetch_assoc($cel)) {
        $staf_id = $dat['staff_id'];
        $sel2 = mysqli_query($conn, "Select * from staff where id = '$staf_id'");
        if (mysqli_num_rows($sel2) > 0) {
            while ($dat = mysqli_fetch_assoc($sel2)) {
                $dept = $dat['department'];
                if ($dept == "CSE") {
                    $dcse++;
                }
                if ($dept == "CE") {
                    $dce++;
                }
                if ($dept == "ECE") {
                    $dece++;
                }
                if ($dept == "EEE") {
                    $deee++;
                }
                if ($dept == "ME") {
                    $dme++;
                }
                if ($dept == "MRE") {
                    $dmre++;
                }
                if ($dept == "MGM") {
                    $dmgm++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
    }
    } else {
    echo "No records Found in Log";
    }
?>
<?php
            // ALL VISITS
    $data = mysqli_query($conn, 'select * from log_student');
    $visit_student = mysqli_num_rows($data);

    $data1 = mysqli_query($conn, 'select * from log_staff');
    $visit_staff = mysqli_num_rows($data1);
?>
<?php
        $s1 = 0;$s2 = 0;$s3 = 0;$s4 = 0;$s5 = 0;$s6 = 0;$s7 = 0;$s8 = 0;
        $mel = mysqli_query($conn, 'select admission_no from log_student');
        $totals_no = mysqli_num_rows($mel);

        $mel = mysqli_query($conn, "Select students_id from log_student");
        if (mysqli_num_rows($mel) > 0) {
        while ($datas = mysqli_fetch_assoc($mel)) {
            $stud_id = $datas['students_id'];
            $mel1 = mysqli_query($conn, "Select * from students where id = '$stud_id'");
            if (mysqli_num_rows($mel1) > 0) {
                while ($data2 = mysqli_fetch_assoc($mel1)) {
                $sem = $data2['sem'];
                if ($sem == "S1") {
                    $s1++;
                }
                if ($sem == "S2") {
                    $s2++;
                }
                if ($sem == "S3") {
                    $s3++;
                }
                if ($sem == "S4") {
                    $s4++;
                }
                if ($sem == "S5") {
                    $s5++;
                }
                if ($sem == "S6") {
                    $s6++;
                }
                if ($sem == "S7") {
                    $s7++;
                }
                if ($sem == "S8") {
                    $s8++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
        }
        } else {
        echo "No records Found in Log";
    }
?>
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

<?php
                // Department Wise
    $fcse = 0;$fce = 0;$fece = 0;$feee = 0;$fme = 0;$fmre = 0;$fmgm = 0;
    $fsel = mysqli_query($conn, 'select employee_code from log_staff');
    $ftotal_no = mysqli_num_rows($fsel);

    $fsel = mysqli_query($conn, "Select staff_id from log_staff");
    if (mysqli_num_rows($fsel) > 0) {
        while ($fdata = mysqli_fetch_assoc($fsel)) {
        $fstaf_id = $fdata['staff_id'];
        $fsel1 = mysqli_query($conn, "Select * from staff where id = '$fstaf_id'");
        if (mysqli_num_rows($fsel1) > 0) {
            while ($fdata1 = mysqli_fetch_assoc($fsel1)) {
                $fdepartment = $fdata1['department'];
                if ($fdepartment == "CSE") {
                    $fcse++;
                }
                if ($fdepartment == "CE") {
                    $fce++;
                }
                if ($fdepartment == "ECE") {
                    $fece++;
                }
                if ($fdepartment == "EEE") {
                    $feee++;
                }
                if ($fdepartment == "ME") {
                    $fme++;
                }
                if ($fdepartment == "MRE") {
                    $fmre++;
                }
                if ($fdepartment == "MGM") {
                    $fmgm++;
                }
            }
        } else {
            echo "No matching records found in Database";
        }
    }
    } else {
    echo "No records Found in Log";
    }
?>
<?php
    $dataPoints = array(
    array("label" => "Computer Science Engg", "symbol" => "CSE", "y" => $fcse),
    array("label" => "Civil Engg", "symbol" => "CE", "y" => $fce),
    array("label" => "Electronic & Commn Engg", "symbol" => "ECE", "y" => $fece),
    array("label" => "Electrical Engg", "symbol" => "EEE", "y" => $feee),
    array("label" => "Mechanical Engg", "symbol" => "ME", "y" => $fme),
    array("label" => "Mechatronic Engg", "symbol" => "MRE", "y" => $fmre),
    array("label" => "Management", "symbol" => "MGMT", "y" => $fmgm),
        )
?>



    <nav class="navbar navbar-expand-lg navbar-light bg-lig">
		<button type="button" id="sidebarCollapse" class="btn btn-infos">
			<i class="fa fa-align-justify"></i>
		</button>
		<!--<a class="navbar-brand" href="#">Navbar</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
		 aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
        </button>
        <h> Lib-Com</h>
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
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
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
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li><a href="#">page1</a></li>
						<li><a href="#">page2</a></li>
						<li><a href="#">page3</a></li>
					</ul>
				</li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
		<!--/-Side Bar/Menu  ended-->
        

        <!--Main Page-->
        <div class="content">
        
			<!--Main Content-->
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div id="piechart2" style="width: 500px; height: 300px;"></div>
                    </div>
                    <div class="col-6">
                        <div id="piechart4" style="width: 500px; height: 300px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div id="piechart_3d" style="width: 500px; height: 300px;">
                        </div>
                    </div>
                     <div class="col-6">
                        <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div id="piechart" style="width: 500px; height: 300px;"></div>
                    </div>
                    <div class="col-6">
                        <div id="piechart3" style="width: 500px; height: 300px;"></div>
                    </div>
                    
                </div>
                <div class="row">
                    <div id="chartContainer" style="width: 515px; height: 300px;"></div>
                </div>

            </div>
        </div>
			<!--End Of Main Content-->


		    </div>
		    <!--Main Page Ends-->
        </div>
    </div>
    <!-- /#wrapper-->


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
    
    <!--  TOTAL Visits Pie Charts -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TotalScans', 'Dept'],
          ['Students',  <?php echo $visit_student; ?>],
          ['Faculty',   <?php echo $visit_staff; ?>],
          
        ]);

        var options = {
          title: 'Total Visits'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>


      <!--Student Visits-->
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Dept", "Visits", { role: "style" } ],
        ["CSE", <?php echo $cse; ?>, "orange"],
        ["CE", <?php echo $ce; ?>, "green"],
        ["ECE", <?php echo $ece; ?>, "red"],
        ["EEE", <?php echo $eee; ?>, "blue"],
        ["ME",<?php echo $me; ?>, "Teal"],
        ["MRE",<?php echo $mre; ?>, "Violet"]

        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Student Unique Visits",
        width: 500,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };


      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
        }
    </script>

        <!--Faculty Visits-->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dept', 'Visits'],
          ['CSE', <?php echo $dcse; ?>],
          ['CE',  <?php echo $dce; ?>],
          ['ECE', <?php echo $dece; ?>],
          ['EEE', <?php echo $deee; ?>],
          ['ME',  <?php echo $dme; ?>],
          ['MRE', <?php echo $dmre; ?>],
          ['MGM', <?php echo $dmgm; ?>]
        ]);

        var options = {
          title: 'Faculty Unique Visits',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'Visits'],
          ['Semester 1', <?php echo $s1; ?>], 
          ['Semester 2', <?php echo $s2; ?>], 
          ['Semester 3', <?php echo $s3; ?>],
          ['Semester 4', <?php echo $s4; ?>], 
          ['Semester 5', <?php echo $s5; ?>], 
          ['Semester 6', <?php echo $s6; ?>],
          ['Semester 7', <?php echo $s7; ?>],
          ['Semester 8', <?php echo $s8; ?>]
        ]);

        var options = {
          title: 'Student Visits Semester Wise',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    <!-- Student Dept wise Pie Chart  -->
	<script type="text/javascript">
		google.charts.load('current', { 'packages': ['corechart'] });
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
          ['Dept', 'Login Per Day'],
          ['CSE',  <?php echo $cse; ?>],
          ['CE',   <?php echo $ce; ?>],
          ['ECE',  <?php echo $ece; ?>],
          ['EEE',  <?php echo $eee; ?>],
          ['MECH', <?php echo $me; ?>],
          ['MR', <?php echo $mre; ?>],
        ]);


			var options = {
				title: 'Student Visits Department wise Analysis'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

			chart.draw(data, options);
		}
    </script>

    
	<!-- Unique Visits Pie Charts -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Dept', 'Login Per Day'],
          ['Students',   <?php echo $uniq_student; ?>],
          ['Faculty',   <?php echo $uniq_staff; ?>],
          
        ]);

        var options = {
          title: 'Unique Visits Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart.draw(data, options);
      }
    </script>

     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
	    window.onload = function() {
 
	    var chart = new CanvasJS.Chart("chartContainer", {
	    theme: "light2",
	    animationEnabled: true,
	    title: {
		    text: "Faculty Dept Wise"
	    },
	    data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	    }]
	    });
	    chart.render();
 
	    }
    </script>
    

    
</html>
<?php
    }
    else{
        header('Location:../login.php');
    }
?>