<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Client Registration</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <style>
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height:200px;
        width:200px;
        padding:10px;
      }

    </style>

  </head>

  <body class="bg-dark">

    <!--<img src="lib/logo.png"/>-->

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <img src="../lib/LNWF_logo2.png" class="center"/>

        <!--<div class="card-header">Register an Account</div>-->
        <div class="card-body">
          <form method="post" action="register.php">
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="admin_username" id="adminUsername" class="form-control" placeholder="User name" required="required" autofocus="autofocus">
                    <label for="admin_username">User name</label>
                </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="admin_email" id="adminInputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="admin_email">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="admin_inputpassword" id="adminInputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="admin_inputpassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="admin_confirmpassword" id="adminConfirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="admin_confirmpassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
              <?php
              if(isset($_GET['errorusern'])==true) {
                  echo '<font color="#FF0000"><p align="center">Username taken</p></font>';
              }

              if(isset($_GET['erroremail'])==true) {
                  echo '<font color="#FF0000"><p align="center">Email has already been registered</p></font>';
              }

              if(isset($_GET['errorpassw'])==true) {
                  echo '<font color="#FF0000"><p align="center">Password does not match</p></font>';
              }
              ?>
            <button class="btn btn-primary btn-block" name="reg_user">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
