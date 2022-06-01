<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){



    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    
    $sql = mysqli_query($con, "UPDATE  socialmedia SET facebook='$facebook' , instagram='$instagram',youtube='$youtube'   WHERE id=1 ");


    if($sql){
        $msg="Social Media Updated successfully ";
    }
    else{
        $msg1="Social Media Doesn't Updated... Plese Try Again";
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
                <h1> Edit Social Media Links</h1>

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
                                <h4>Edit Social Media Links</h4>

                            </div>
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg1))
                                {
                                    echo $msg1;
                                }
                                ?></p>

                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg))
                                {
                                    echo $msg;
                                }
                                ?></p>

                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                                <?php
                                $sql= mysqli_query($con,"select * from socialmedia where id='1'  ");
                                $total=mysqli_fetch_assoc($sql)
                                ?>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label>Facebook </label>
                                                <input type="url" class="form-control" placeholder=""  name="facebook" value="<?php echo $total['facebook'];?>" style="width: 400px;" required>
                                            </div>
                                        </div>


                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label>Twitter </label>
                                                <input type="url" class="form-control" placeholder=""  name="twitter" value="<?php echo $total['twitter'];?>" style="width: 400px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label>Instagram </label>
                                                <input type="url" class="form-control" placeholder=""  name="instagram" value="<?php echo $total['instagram'];?>" style="width: 400px;" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label>YouTube </label>
                                                <input type="url" class="form-control" placeholder=""  name="youtube" value="<?php echo $total['youtube'];?>" style="width: 400px;" required>
                                            </div>
                                        </div>

                                    </div>


                                


                                </div>



                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update Social Media" class="btn btn-add">
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



    <?php include 'footer.php';?>


