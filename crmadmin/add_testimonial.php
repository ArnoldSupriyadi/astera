<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    $array = explode('.', $_FILES['image']['name']);
    $file_ext=strtolower(end($array));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../testimonialimage/" . $file_name);



    }



    $cname = $_POST['cname'];
    // $profession = $_POST['profession'];
    $comment = $_POST['editor'];



    $sql = mysqli_query($con, "INSERT INTO  testimonial (cname,comment,image)VALUES('$cname','$comment','$file_name')");


    if($sql){
        $msg=" Testimonial Inserted successfully ";
    }
    else{
        $msg1="Testimonial Not Inserted... Plese Try Again";
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
                <h1> Add Testimonial</h1>

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
                                <h4>Add New Testimonial</h4>

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
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Customer Name </label>
                                                <input type="Text" class="form-control" placeholder=""  name="cname" style="width: 426px;" >
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Customer Profession </label>
                                                <input type="Text" class="form-control" placeholder=""  name="profession" style="width: 426px;" >
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Choose Customer Image </label>
                                            <input type="file" class="form-control" placeholder=""  name="image" style="width: 426px;" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Customer Comment </label>
                                            <textarea name="editor"  value=""></textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Testimonial" class="btn btn-add">
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

    <?php include 'footer.php';?>


