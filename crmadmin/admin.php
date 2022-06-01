<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    $sql = mysqli_query($con, "UPDATE   admin_login SET user_name='$user_name',password='$password'   WHERE id=1 ");


    if($sql){
        echo '<script>window.location.assign("index.php");</script>';
    }
    else{
        $msg="Contact Us Not Updated... Please Try Again";
    }

}



?>





<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
<!--preloader-->

<!-- Site wrapper -->
<div class="wrapper">
    <?php include('header.php'); ?>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-gears"></i>
            </div>
            <div class="header-title">
                <h1>Edit Admin Credential</h1>

            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <h4>Edit Admin</h4>

                            </div>
                        </div>
                        <div class="panel-body">

                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg))
                                {
                                    echo $msg;
                                }
                                ?></p>


                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <?php
                                    $sqlqry= mysqli_query($con,"select * from admin_login ");
                                    while($tota=mysqli_fetch_assoc($sqlqry)) {
                                        ?>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label>User :</label>
                                                <input type="text"   name="user_name"   value="<?php echo $tota['user_name'] ?>"  style="width: 250px;height: 40px;margin-left: 15px;"  >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label>Password :</label>
                                                <input type="password"     name="password"   value="<?php echo $tota['password'] ?>"  style="width: 250px;height: 40px;margin-left: 18px;"   >
                                            </div>
                                        </div>


                                    <?php } ?>

                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update Admin" class="btn btn-add">
                                    </div>
                                </div>


                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- /.content -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    <?php include 'footer.php';?>


