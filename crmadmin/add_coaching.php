
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $file_name = $_FILES['coaching_image']['name'];
    $file_size = $_FILES['coaching_image']['size'];
    $file_tmp = $_FILES['coaching_image']['tmp_name'];
    $file_type = $_FILES['coaching_image']['type'];

    $file_ext=strtolower(end(explode('.',$_FILES['coaching_image']['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }
    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {
        move_uploaded_file($file_tmp, "../coaching_image/" . $file_name);
    }


    $coaching_name = $_POST['coaching_name'];
    $coaching_content = $_POST['editor'];



    $sql = mysqli_query($con, "INSERT INTO  coaching (coaching_name,coaching_content,coaching_image)VALUES('$coaching_name','$coaching_content','$file_name')");


    if($sql){
        $msg="Coaching Inserted successfully ";
    }
    else{
        $msg1="Coaching Not Inserted... Plese Try Again";
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
                <h1> Add Coaching</h1>

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
                                <h4>Add New Coaching</h4>

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
                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Coaching Name </label>
                                                <input type="Text" class="form-control" name="coaching_name" style="width: 426px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div  class="form-group col-sm-6">
                                                <label> Choose Coaching Image </label>
                                                <input type="file" class="form-control" name="coaching_image" style="width: 426px;"  required>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Coaching Content </label>
                                            <textarea type="Text" class="form-control" placeholder=""  name="editor" style="    width: 914px;height: 85px;" required></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Coaching" class="btn btn-add">
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
        </script>

    <script>
        CKEDITOR.replace('editor');
    </script>

    <?php include 'footer.php';?>


