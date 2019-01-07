<?php include('server.php'); ?>

<?php


$username="";
$errors=array();

$db=mysqli_connect('localhost','root','','datablood');

if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($db,$_POST['uName']);
    $password_1 = mysqli_real_escape_string($db,$_POST['upass']);
    $loginas= mysqli_real_escape_string($db,$_POST['ulogin']);
    
    
    if(empty($username))
    {
        array_push($errors,"User Name is Required");
    }
    if(empty($password_1))
    {
        array_push($errors,"Password is Required");
    } 
    
    if(count($errors)==0)
    {
        $password = md5($password_1);
        $query="SELECT * FROM users WHERE email='$username' AND password='$password' AND loginas='$loginas'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['username']=$username;
            $_SESSION['success']="you are now logged in";
            if($loginas=='User')
            {
                header('location: db.php');
            }
            if($loginas=='Admin')
            {
                header('location: dbadmin.php');
            }
        }
        else
        {
            array_push($errors,"Incorrect username/password");
        }
    }
}
?>



<html>
<head>
    <title>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/sign1.css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.js">

    </script>
</head>

<body>
    <h2>SIGN IN TO PATIENTS PORTAL</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="login.php">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Login As</label>
                        </div>
                        <div class="col-md-6">
                            <select name="ulogin" class="form-control">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>E-mail:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="uName" placeholder="E-mail" class="form-control">
                        </div>    
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Password</label>
                        </div>
                        <div class="col-md-6">
                        <input type="password" name="upass" placeholder="Password" class="form-control">
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <center>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </center>    
                    </div>
                    <p>New here <a href="register.php">Create an account</a></p>
                </form>   
            </div>
        </div>    
    </div>
</body>
</html>
