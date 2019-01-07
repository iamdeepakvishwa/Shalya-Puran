<?php

session_start();

$username="";
$email="";
$Aadhar="";
$password="";
$errors=array();

$db = mysqli_connect('localhost','root','','datablood');

if(isset($_POST['register']))
{
    $username = mysqli_real_escape_string($db,$_POST['fname']);
    $email = mysqli_real_escape_string($db,$_POST['fmail']);
    $email1 = mysqli_real_escape_string($db,$_POST['fmail1']);
    $Aadhar = mysqli_real_escape_string($db,$_POST['fanumber']);
    $gender = mysqli_real_escape_string($db,$_POST['fgender']);
    $consult = mysqli_real_escape_string($db,$_POST['fconsult']);
    $password = mysqli_real_escape_string($db,$_POST['fpassword']);
    $loginas = mysqli_real_escape_string($db,$_POST['loginas']);
    
    if(empty($username))
    {
        array_push($errors,"User Name is Required");
    }
    if(empty($email))
    {
        array_push($errors,"E-mail is Required");
    } 
    if(empty($password))
    {
        array_push($errors,"Password is Required");
    }
    
    if($email != $email1)
    {
        array_push($errors,"email Does Not Match");
    }
    if(empty($Aadhar))
    {
        array_push($errors,"email Does Not Match");
    }
    

    if(count($errors)==0)
    {
        $password=md5($password);
        $sql= "INSERT INTO users (name,email,aadhar,gender,consult,password,loginas) VALUES ('$username','$email','$Aadhar','$gender','$consult','$password','$loginas')";
        $y=mysqli_query($db,$sql);
        if($y==0)
        {
            echo "Insertion Failed";
        }
        $_SESSION['name']= $username;
        $_SESSION['success']= "you are now logged in";
        if($loginas=='User')
        {
            header('location: db.php');
        }
        if($loginas=='Admin')
        {
            header('location: dbadmin.php');
        }
    }
    
}
?>