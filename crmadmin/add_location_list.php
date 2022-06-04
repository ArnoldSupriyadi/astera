
<?php error_reporting(0);?>
<?php
//session_start();
include_once("../connection.php");

// if(isset($_SESSION['adminuser']) && $_SESSION['password'] != "")
// {
// //Task to do
// }
// else{
//     echo '<script>window.location.assign("index.php");</script>';

// }
?>

<?php

if(isset($_POST['submit'])){


    $location = $_POST['location'];
    $link = $_POST['link'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];



    $sql = mysqli_query($con, "INSERT INTO  location_list(location,link)VALUES('$location','$link')");


    if($sql){
        $msg=" Blog Inserted successfully ";
    }
    else{
        $msg1="Blog Not Inserted... Please Try Again";
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
                <h1> Add Location</h1>

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
                                <h4>Add New Location</h4>

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


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Location </label>
                                                <input type="Text" class="form-control" placeholder=""  name="location" style="width: 920px;" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Link Maps </label>
                                            <textarea type="text" name="link" style="width: 515px;height: 160px;"></textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Location" class="btn btn-add">
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
    <script type="text/javascript">

        //testing
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        //testing


    </script>

    <script>
        CKEDITOR.replace('editor');
    </script>

   <!--  <script>
        CKEDITOR.replace('description');
    </script> -->

    <?php include 'footer.php';?>



