<?php

//session_start();
include("../connection.php");
if(isset($_POST['login']))
{

    $email=$_POST['email'];

    $password=$_POST['password'];

    $find_query = mysqli_query($con,"select * from admin_login where user_name = '".$email."' && password = '".$password."'");

    $find_query_data = mysqli_fetch_assoc($find_query);

   


    if($find_query_data){

         $_SESSION['user_name'] = $find_query_data['user_name'];
    $_SESSION['password'] = $find_query_data['password'];

        echo '<script>window.location.assign("dashboard.php");</script>';

    }
    else{

        $msg="Invalid username/password";

    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRM Admin Panel</title>

    <!-- Favicon and touch icons -->

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>
<!-- Content Wrapper -->
<div class="login-wrapper"  style="background-image: url(../img/banner-1.jpg);height: 657px;opacity: .95">

    <div class="container-center">
        <div class="login-area">
            <div class="panel panel-bd panel-custom">
                <div class="panel-heading">
                    <?php
                    if(isset($msg))
                    {
                        ?>
                        <h4 style="color:#E31F23; text-align:center;"><?php echo $msg; ?></h4>
                        <?php
                    }

                    ?>
                    <div class="view-header">
                        <div class="header-icon">
                           <!-- <img src="logo/logo.png"  style="width: 120%; height: 50px;"> -->



                        </div>
                        <div class="header-title" style="margin-left: 5px!important;">
                            <h3>Login</h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="" id="loginForm" method="post">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                            <!-- <span class="help-block small">Your unique username to app</span>-->
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button type="submit" name="login" class="btn btn-add">Login</button>
                            <!--<a class="btn btn-warning" href="register.html">Register</a>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>