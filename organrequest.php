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
                <a class="navbar-brand " href="home.html">SHALYA PURAN</a>
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
                        <a href="dbadmin.php"><i class="fas fa-home"></i>Home</a>
                    </li>
                     <li>
                        <a href="organrequest.php"> <i class="fa fa-hand-holding-heart"></i>Organ Requests</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i>Today's Appointments</a>
                    </li>
                     <li>
                        <a href="bloodrequests.php"><i class="fa fa-tint"></i>Blood Requests</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i>Admin</a>
                    </li>
                </ul>
            </div>
        </nav> 
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Organ Requests
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-hand-holding-heart"></i> organ Requests
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-default">
                            <?php
                            $id=1;
                            include('server.php');
                            $sql="SELECT * FROM organ_orders";
                            $query=mysqli_query($db,$sql);
                            $result=mysqli_num_rows($query);
                            if($result>0)
                            {
                                echo '<table class="table table-striped table-bordered table-hover table-condensed">';
                                echo '<tr><th>id</th><th>name</th><th>Address</th><th>Aadhar</th><th>Delivery Address</th><th>Contact Number</th><th>Body Part</th>';
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                {
                                    echo '<tr>';
                                    echo '<td>'.$id++.'</td>';
                                    echo '<td>'.$row['name'].'</td>';
                                    echo '<td>'.$row['address'].'</td>';
                                    echo '<td>'.$row['aadhar'].'</td>';
                                    echo '<td>'.$row['delivery_address'].'</td>';
                                    echo '<td>'.$row['mobile_number'].'</td>';
                                    echo '<td>'.$row['body_part'].'</td>';
                                    echo '</tr>';
                                }

                            }
                            else
                            {
                                echo 'No Data Available';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>