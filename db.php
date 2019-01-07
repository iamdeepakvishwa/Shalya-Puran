<?php
include('server.php');
if (!isset($_SESSION['username']))
{
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
}
if(isset($_GET['logout'])) 
{
    session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
}
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location: db.php');
}
?>

<!DOCTYPE html >
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/logo1.PNG" style="width: 40px; height: 40px; float: left; ">
            <a class="navbar-brand " href="index.php">SHALYA PURAN</a>
        </div>
        <ul class="nav navbar-right top-nav">
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        echo $_SESSION['username'];
                    }
                    ?><b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li class="divider"></li>
                    <li>
                        <a href="db.php?logout='1'"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="db.php"><i class="fas fa-home"></i>Home</a>
                </li>
                 <li>
                    <a href="organbook.php"> <i class="fa fa-hand-holding-heart"></i>Organ Bank</a>
                </li>
                 <li>
                    <a href="hospitalbook.php"><i class="fa fa-fw fa-table"></i>Hospital Appointment</a>
                </li>
                 <li>
                    <a href="bloodbook.php"><i class="fa fa-tint"></i>Blood Bank</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-wrench"></i>Users</a>
                </li>
            </ul>
        </div>
    </nav> 
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-briefcase-medical fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h3>Surgery Section</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tint fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h3>Blood Portal</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a href="bank.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
          
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-hand-holding-heart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h3>Organ Portal</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a href="organ.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Hospital Visits</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Hospital Name</th>
                                                <th>Doctor Name</th>
                                                <th>Date of Visit</th>
                                                <th>Next Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            
    </div>
    </div> 
   </div>
    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>    
</body>
</html>