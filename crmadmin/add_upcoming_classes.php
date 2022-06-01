<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $file_name = $_FILES['class_image']['name'];
    $file_size =$_FILES['class_image']['size'];
    $file_tmp =$_FILES['class_image']['tmp_name'];
    $file_type=$_FILES['class_image']['type'];


    $file_ext=strtolower(end(explode('.',$_FILES['class_image']['name'])));



    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../upcoming_class_image/" . $file_name);



    }


    $class_name = $_POST['class_name'];
    $class_content = $_POST['class_content'];
    $class_url = $_POST['class_url'];


    $sql = mysqli_query($con, "INSERT INTO  upcoming_class (class_name,class_image,class_content,class_url)VALUES('$class_name','$file_name','$class_content','$class_url')");

    if($sql){
        $msg=" Upcoming Classes Inserted successfully ";
    }
    else{
        $msg1="Upcoming Classes Not Inserted... Plese Try Again";
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
                <h1> Add Upcoming Classes</h1>

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
                                <h4>Add New Upcoming Classes</h4>

                            </div>
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 16px;color: red"><?php
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
                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Upcoming Class Name </label>
                                                <input type="Text" class="form-control" placeholder=""  name="class_name" style="width: 426px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div  class="form-group col-sm-12">
                                                <label> Choose Upcoming Class Image </label>
                                                <input type="file" class="form-control" name="class_image" placeholder="" onchange="readURL(this)"   required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Upcoming Class Url link </label>
                                                <input type="url" class="form-control"  name="class_url" style="width: 914px;height: 50px;" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Upcoming Class Description </label>
                                                <input type="Text" class="form-control"  name="class_content" style="    width: 914px;height: 85px;" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Upcoming Class" class="btn btn-add">
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

    <?php include 'footer.php';?>


