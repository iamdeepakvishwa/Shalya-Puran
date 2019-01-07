<?php

session_start();

$username="";
$email="";
$Aadhar="";
$password="";
$errors=array();

$db = mysqli_connect('localhost','root','','datablood');

if(!empty($_POST['submit']))
{
    $username = mysqli_real_escape_string($db,$_POST['fname']);
    $Address = mysqli_real_escape_string($db,$_POST['Address']);
    $Aadhar = mysqli_real_escape_string($db,$_POST['aadhar']);
    $daddress = mysqli_real_escape_string($db,$_POST['daddress']);
    $mobile = mysqli_real_escape_string($db,$_POST['mnumber']);
    $bgroup = mysqli_real_escape_string($db,$_POST['bgroup']);
    $amount = mysqli_real_escape_string($db,$_POST['amount']);
    
    if(empty($username))
    {
        array_push($errors,"User Name is Required");
    }
    if(empty($Address))
    {
        array_push($errors,"address is Required");
    } 
    if(empty($daddress))
    {
        array_push($errors,"Delivery Address is required");
    }
    
    if(empty($mobile))
    {
        array_push($errors,"mobile number is required");
    }
    if(empty($Aadhar))
    {
        array_push($errors,"Aadhar number is required");
    }
    

    if(count($errors)==0)
    {
        $sql= "INSERT INTO blood_orders (name,address,aadhar,delivery_address,mobile_number,blood_group,amount) VALUES ('$username','$Address','$Aadhar','$daddress','$mobile','$bgroup','$amount')";
        $y=mysqli_query($db,$sql);
        if($y==0)
        {
            echo "Insertion Failed";
        }
        $_SESSION['name']= $username;
        header('location: db.php');
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>organ Book</title>
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
                            Admin<b class="caret"></b></a>
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
                            <h1 class="page-header">Blood Book</h1>
                            <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tint"></i> Fill the Form
                            </li>
                        </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-bank">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="bloodbook.php" method="post" role="list" style="display: block">
                                            <?php include('errors.php'); ?>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Full Name:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="fname" placeholder="Full Name" class="form-control" required>
                                                </div>    
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Address:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea name="Address" class="form-control" placeholder="Address" required></textarea>
                                                </div>    
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Aadhar Number:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="aadhar" class="form-control" placeholder="Aadhar Number" required>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Delivery Address:</label>
                                                </div>    
                                                <div class="col-md-9">
                                                    <textarea name="daddress" class="form-control" placeholder="Delivery Address" required></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Contact Number:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="mnumber" class="form-control" placeholder="Mobile Number" required>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Blood Group</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="bgroup" class="form-control">
                                                        <option value="select">select</option>
                                                        <option value="A+">A+</option>
                                                        <option value="B+">B+</option>
                                                        <option value="O+">O+</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Select Amount</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="amount" class="form-control">
                                                        <option value="select">Select</option>
                                                        <option value="1 Unit">1 Unit</option>
                                                        <option value="2 Unit">2 Unit</option>
                                                        <option value="3 Unit">3 Unit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-5 col-sm-offset-4">
                                                        <input type="submit" name="submit" class="form-control btn btn-primary" value="submit">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </form>    
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