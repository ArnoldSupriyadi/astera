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

        move_uploaded_file($file_tmp, "../serviceimage/" . $file_name);



    }

    $title = $_POST['title'];
     // $content = $_POST['content'];

    $sql = mysqli_query($con, "INSERT INTO service (title,image)VALUES('$title','$file_name')");


    if($sql){
        $msg=" service Inserted successfully ";
    }
    else{
        $msg1="service Not Inserted... Plese Try Again";
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
                <h1> Add New Service</h1>

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
                                <h4>Add Service</h4>

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

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-6">
                                            <label> Enter Service Title : </label>
                                            <input type="text" class="form-control" placeholder=""  name="title" style="width: 850px;" >
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-6">
                                            <label> Enter Banner Content : </label>
                                            <input type="text" class="form-control" placeholder=""  name="content" style="width: 850px;" >
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div  class="form-group col-sm-6">
                                            <label> Choose Service Image :</label>
                                            <input type="file"  id="imgInp" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>



                                </div>
                        </div>

                        <div class="col-md-12">
                            <div class="reset-button" style="padding-left: 390px;">
                                <input type="submit" name="submit" value="Add New service" class="btn btn-add">
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
                    .height(250);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    //testing


</script>

<?php include 'footer.php';?>


