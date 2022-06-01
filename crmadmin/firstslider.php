
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
    $file_name5 = $_FILES['image5']['name'];
    $file_size5 =$_FILES['image5']['size'];
    $file_tmp5 =$_FILES['image5']['tmp_name'];
    $file_type5 =$_FILES['image5']['type'];

    $array = explode('.', $_FILES['image5']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size5 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp5, "../productimage/" . $file_name5);
    }

    $file_name4 = $_FILES['image4']['name'];
    $file_size4 =$_FILES['image4']['size'];
    $file_tmp4 =$_FILES['image4']['tmp_name'];
    $file_type4 =$_FILES['image4']['type'];

    $array = explode('.', $_FILES['image5']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size4 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp4, "../productimage/" . $file_name4);
    }

    $file_name3 = $_FILES['image3']['name'];
    $file_size3 =$_FILES['image3']['size'];
    $file_tmp3 =$_FILES['image3']['tmp_name'];
    $file_type3 =$_FILES['image3']['type'];

    $array = explode('.', $_FILES['image4']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size3 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp3, "../productimage/" . $file_name3);
    }


    $file_name2 = $_FILES['image2']['name'];
    $file_size2 =$_FILES['image2']['size'];
    $file_tmp2 =$_FILES['image2']['tmp_name'];
    $file_type2 =$_FILES['image2']['type'];

    $array = explode('.', $_FILES['image2']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size2 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp2, "../productimage/" . $file_name2);
    }

    $file_name1 = $_FILES['image1']['name'];
    $file_size1 =$_FILES['image1']['size'];
    $file_tmp1 =$_FILES['image1']['tmp_name'];
    $file_type1 =$_FILES['image1']['type'];


    $array = explode('.', $_FILES['image1']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp1, "../productimage/" . $file_name1);
    }

    $file_name_banner = $_FILES['banner_image']['name'];
    $file_size_banner =$_FILES['banner_image']['size'];
    $file_tmp_banner =$_FILES['banner_image']['tmp_name'];
    $file_type_banner =$_FILES['banner_image']['type'];


    $array = explode('.', $_FILES['banner_image']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size_banner > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp_banner, "../productimage/" . $file_name_banner);
    }


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

        move_uploaded_file($file_tmp, "../productimage/" . $file_name);
    }


    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    // $content = $_POST['editor'];
    // $date = date( 'd-M,Y ' );
    // $title = $_POST['title'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];



    $sql = mysqli_query($con, "INSERT INTO fslider (name, price, sale_price, image, banner_image, image_detail1, image_detail2, image_detail3, image_detail4, image_detail5)VALUES('$name','$price','$sale_price','$file_name','$file_name_banner','$file_name1','$file_name2','$file_name3','$file_name4','$file_name5')");


    if($sql){
        $msg=" Product Inserted successfully ";
    }
    else{
        $msg1="Product Not Inserted... Please Try Again";
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
                <h1> Add Product</h1>

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
                                <h4>Add New First Product</h4>

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
                                                <label> Enter Product Name </label>
                                                <input type="Text" class="form-control" placeholder=""  name="name" style="width: 920px;" >
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                 <div class="col-md-12">
                                     <div class="row">
                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Product Price </label>
                                                <input type="Text" class="form-control" placeholder=""  name="price" style="width: 920px;" >
                                            </div>
                                        </div>
                                    </div>
                                 </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 25px">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Product Sale Price </label>
                                                <input type="Text" class="form-control" placeholder=""  name="sale_price" style="width: 920px;" >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Product Image </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                                <!--<input type="hidden" name="productimage" />-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;" >
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose banner Image </label>
                                                <input type="file"  id="imgInp" class="form-control" name="banner_image" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                                <!--<input type="hidden" name="productimage" />-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     
                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Image Detail 1</label>
                                                <input type="file"  id="imgInp" class="form-control" name="image1" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Image Detail 2 </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image2" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Image Detail 3 </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image3" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Detail 4 </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image4" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row"  style="padding-left: 25px;">
                                        <div  class="form-group col-sm-12">
                                            <div><label> Choose Detail 5 </label>
                                                <input type="file"  id="imgInp" class="form-control" name="image5" placeholder="" onchange="readURL(this)"  style="width: 920px;">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Add Product" class="btn btn-add">
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



