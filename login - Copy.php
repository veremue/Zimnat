<?php include "user.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zimnat</title>

    <!-- Bootstrap Core CSS -->
    <link href="reGassets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="reGassets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="reGassets/bower_components/css/bootstrap-timepicker.min.css" rel="stylesheet">
	
    <!-- Timeline CSS -->
    <link href="reGassets/dist/css/timeline.css" rel="stylesheet">

     <!-- DataTables CSS -->
    <link href="reGassets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="reGassets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="reGassets/dist/css/sb-admin-2.css" rel="stylesheet">
	
	<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <!-- Morris Charts CSS -->
    <link href="reGassets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="reGassets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <!-- jQuery -->
    <script src="reGassets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="reGassets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="reGassets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="reGassets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="reGassets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="reGassets/dist/js/sb-admin-2.js"></script>

     <script src="reGassets/plugins/select2/select2.full.min.js"></script>
	<!-- InputMask -->
	<script src="reGassets/plugins/input-mask/jquery.inputmask.js"></script>
	<script src="reGassets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="reGassets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<!-- date-range-picker -->
	<script src="reGassets/plugins/moments.js"></script>
	<script src="reGassets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap datepicker -->
	<script src="reGassets/plugins/datepicker/bootstrap-datepicker.js"></script>
	
    <link rel="stylesheet" href="main.css">

    <script src="prettify.js"></script>
	

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><img src="images/zimnat%20logo.png" alt="Zimnat" width="100" height="25" /></a>
				
            </div>
            <!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
			<li><a href = "dashboard.php"><i class = "fa fa-home"></i> Home</a></li>
			<li><a href = "#"><i class = "fa fa-list"></i> Policies</a></li>
			<li><a href = "claim-intimation.php"><i class = "fa fa-money"></i> Claims</a></li>
			<li><a href = "#"><i class = "fa fa-print"></i> Points</a></li>
			<!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $user_full_name;?>
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="payment-details.php"><i class="fa fa-bank fa-fw"></i> Update Payment Details</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
			</ul>
			
           

        </nav>
	</div>