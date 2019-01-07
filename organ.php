<?php
 
include('head.php');
$bpart='';
$id=1;
$errors=array();

if(isset($_POST['submit']))
{
    $bpart=mysqli_real_escape_string($con,$_POST['bpart']);
    
    if($bpart=='select')
    {
        array_push($errors,'Select Organs');
    }
    if(count($errors)==0)
    {
        $sql="SELECT * FROM organs WHERE bodypart='$bpart'";
        $query=mysqli_query($con,$sql);
        $result=mysqli_num_rows($query);
        if($result>0)
        {
            echo '<table class="table table-striped table-bordered table-hover table-condensed">';
            echo '<tr><th>id</th><th>Body Part</th><th>State</th><th>District</th><th>Address</th><th>Pincode</th><th>Contact</th><th>Book Online</th>';
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                echo '<tr>';
                echo '<td>'.$id++.'</td>';
                echo '<td>'.$row['bodypart'].'</td>';
                echo '<td>'.$row['state'].'</td>';
                echo '<td>'.$row['district'].'</td>';
                echo '<td>'.$row['address'].'</td>';
                echo '<td>'.$row['pincode'].'</td>';
                echo '<td>'.$row['contact'].'</td>';
                echo '<td><a href="'.$row['Book'].'">Click Here</a></td>';
                echo '</tr>';
            }

        }
        else
        {
            echo 'No Data Available';
        }
    }    
}




?>


<!DOCTYPE html>
<html>
    <head>
        <title>Blood Bank</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main1.css">
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
                <div class="collapse navbar-collapse" id="navbar">
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
                            <form action="organ.php" method="post" role="list" style="display: block">
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <div class="col-md-4 form-group">
                                        <label><h4>Select the Organ:</h4></label>
                                    </div>  
                                    
                                    <div class="col-md-2">    
                                        <select name="bpart" class="form-control">
                                            <option value="select">select</option>
                                            <option value="Kidney">Kidney</option>
                                            <option value="Heart">Heart</option>
                                            <option value="Lungs">Lungs</option>
                                            <option value="Bone Marrow">Bone Marrow</option>
                                            <option value="Eye Tissue">Eye Tissue</option>
                                            <option value="liver">liver</option>
                                            <option value="Hair Transplant">Hair Transplant</option>
                                            <option value="Pancreas">Pancreas</option>
                                            <option value="Tendons">Tendons</option>
                                            <option value="Skin">Skin</option>
                                            <option value="Bone">Bone</option>
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
        <?php
        echo '</table>';
        
        ?>
        
        
    </body>
</html>