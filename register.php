<?php include('server.php'); ?>



<html>
<head>
    <title>SIGNUP-PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/sign1.css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>

    <h2>CREATE AN ACCOUNT</h2>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="register.php" role="form">
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">NAME:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="name" placeholder="NAME" name="fname"><?php echo $username; ?>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class=" control-label col-sm-3" for="email">EMAIL:</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="fmail">
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="control-label col-sm-3 " for="usid">CONFIRM EMAIL:</label>
                        <div class="col-sm-4">
                            <input type="USID" class="form-control " id="userid" placeholder="CONFIRM EMAIL" name="fmail1">
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group"> 
                        <label class="control-label col-md-3" for="adharcard">AADHARCARD NO:</label>
                            <div class="col-sm-4">
                                <input type="USID" class="form-control " id="aadharcard" placeholder="AADHARCARD NO" name="fanumber">
                            </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="gender">GENDER:</label>
                        <div class="col-sm-2">
                            <select class="form-control" id="gender1" name="fgender">
                                <option value="Male">MALE</option>
                                <option value="Female">FEMALE</option>
                                <option value="Other's">Other's</option>
                            </select>
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                          <label class="control-label col-md-3" for="confirmation">CONSULTED DOCTOR PREVIOUSLY:</label>
                          <div class="col-sm-2">
                              <select class="form-control" id="confirmation1" name="fconsult">
                                  <option value="Yes">YES</option>
                                  <option value="No">NO</option>
                              </select>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="control-label col-md-3" for="confirmation">Registering As:</label>
                          <div class="col-sm-2">
                              <select class="form-control" id="confirmation1" name="loginas">
                                  <option value="User">User</option>
                                  <option value="Admin">Admin</option>
                              </select>
                          </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password">PASSWORD:</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control " id="password" placeholder="PASSWORD" name="fpassword">
                        </div>    
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <center>
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </center>    
                    </div>
                    <p>Already Registered <a href="login.php">Login</a></p>
                </form>
            </div>    
        </div>    
    </div>
</body>

</html>
