
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

        move_uploaded_file($file_tmp, "../blogimage/" . $file_name);



    }


    $name = $_POST['name'];
    $content = $_POST['editor'];
    $date = date( 'd-M,Y ' );
    // $title = $_POST['title'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];



    $sql = mysqli_query($con, "INSERT INTO   blog (name,content,date,image)VALUES('$name','$content','$date','$file_name')");


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
                <h1> Add Blog</h1>

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
                                <h4>Add New Blog</h4>

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
                                                <label> Enter Blog Name </label>
                                                <input type="Text" class="form-control" placeholder=""  name="name" style="width: 920px;" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"  style="padding-left: 25px;"  >
                                        <div  class="form-group col-sm-6">
                                            <div><label> Choose Blog Image </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image" placeholder="" onchange="readURL(this)"   >
                                                <!--<input type="hidden" name="productimage" />-->
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Blog Content </label>
                                            <textarea type="text" name="editor" style="width: 515px;height: 160px;"></textarea>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Blog" class="btn btn-add">
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



