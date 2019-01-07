<?php
 
include('head.php');
$bgoup='';
$bcity='';
$id=1;
$errors=array();

if(isset($_POST['submit']))
{
    $bgroup=mysqli_real_escape_string($con,$_POST['bgroup']);
    $bcity=mysqli_real_escape_string($con,$_POST['city']);
    
    
    if($bgroup=='select')
    {
        array_push($errors,'Select blood group');
    }
    if($bcity=='select')
    {
        array_push($errors,'Select city');
    }
    if(count($errors)==0)
    {
        $sql="SELECT * FROM blood WHERE blood_group='$bgroup' AND district='$bcity'";
        $query=mysqli_query($con,$sql);
        $result=mysqli_num_rows($query);
        if($result>0)
        {
            echo '<table class="table table-striped table-bordered table-hover table-condensed">';
            echo '<tr><th>id</th><th>Blood Bank name</th><th>Blood Bank Address</th><th>Book Online</th>';
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                echo '<tr>';
                echo '<td>'.$id++.'</td>';
                echo '<td>'.$row['bank_name'].'</td>';
                echo '<td>'.$row['bank_address'].'</td>';
                echo '<td><a href="'.$row['book'].'">Click Here</a></td>';
                echo '</tr>';
            }

        }
    }    
}




?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blood Bank</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main2.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Shalya Puran</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Surgery</a></li>
                        <li><a href="bank.php">Blood Bank</a></li>
                        <li><a href="organ.php">Organ Bank</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-bank">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="bank.php" method="post" role="list" style="display: block">
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <div class="col-md-4 form-group">
                                        <label><h4>Select the blood group:</h4></label>
                                    </div>    
                                    <div class="col-md-2">    
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
                                    <div class="col-md-3 form-group">
                                        <label><h4>Select City:</h4></label>
                                    </div>  
                                    <div class="col-md-2">
                                        <select name="city" class="form-control">
                                            <option value="select">select</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="ghaziabad">ghaziabad</option>
                                            <option value="Noida">Noida</option>
                                            <option value="Gurugram">Gurugram</option>
                                            <option value="Meerut">Meerut</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-4">
                                            <input type="submit" name="submit" class="form-control btn btn-submit" value="search">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </body>
</html>