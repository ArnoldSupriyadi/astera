<?php
$today = date("F Y");

$date=date("Y-m-d");?>


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

    
    // image detail 5
    $file_name5 = $_FILES['image_detail5']['name'];

    if($file_name5 =='')
    {
        $file_name5 = $_POST['image_detail_post5'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail5']);
    }
    
    $file_name5 = $_FILES['image_detail5']['name'];
    $file_size5 =$_FILES['image_detail5']['size'];
    $file_tmp5 =$_FILES['image_detail5']['tmp_name'];
    $file_type5 =$_FILES['image_detail5']['type'];

    $array = explode('.', $_FILES['image_detail5']['name']);
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


    // image detail 4
    $file_name4 = $_FILES['image_detail4']['name'];

    if($file_name4 =='')
    {
        $file_name4 = $_POST['image_detail_post4'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail4']);
    }
    
    $file_name4 = $_FILES['image_detail4']['name'];
    $file_size4 =$_FILES['image_detail4']['size'];
    $file_tmp4 =$_FILES['image_detail4']['tmp_name'];
    $file_type4 =$_FILES['image_detail4']['type'];

    $array = explode('.', $_FILES['image_detail4']['name']);
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


    // image detail 3
    $file_name3 = $_FILES['image_detail3']['name'];

    if($file_name3 =='')
    {
        $file_name3 = $_POST['image_detail_post3'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail3']);
    }
    
    $file_name3 = $_FILES['image_detail3']['name'];
    $file_size3 =$_FILES['image_detail3']['size'];
    $file_tmp3 =$_FILES['image_detail3']['tmp_name'];
    $file_type3 =$_FILES['image_detail3']['type'];


    $array = explode('.', $_FILES['image_detail3']['name']);
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

     // image detail 2
    $file_name2 = $_FILES['image_detail2']['name'];

    if($file_name2 =='')
    {
        $file_name2 = $_POST['image_detail_post2'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail2']);
    }
    
    $file_name2 = $_FILES['image_detail2']['name'];
    $file_size2 =$_FILES['image_detail2']['size'];
    $file_tmp2 =$_FILES['image_detail2']['tmp_name'];
    $file_type2 =$_FILES['image_detail2']['type'];


    $array = explode('.', $_FILES['image_detail2']['name']);
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

    
    // image detail 2
    $file_name2 = $_FILES['image_detail2']['name'];

    if($file_name2 =='')
    {
        $file_name1 = $_POST['image_detail_post2'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail2']);
    }
    
    $file_name2 = $_FILES['image_detail2']['name'];
    $file_size2 =$_FILES['image_detail2']['size'];
    $file_tmp2 =$_FILES['image_detail2']['tmp_name'];
    $file_type2 =$_FILES['image_detail2']['type'];


    $array = explode('.', $_FILES['image_detail2']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size1 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp2, "../productimage/" . $file_name2);
    }

    // image detail 1
    $file_name1 = $_FILES['image_detail1']['name'];

    if($file_name1 =='')
    {
        $file_name1 = $_POST['image_detail_post1'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_detail1']);
    }
    
    $file_name1 = $_FILES['image_detail1']['name'];
    $file_size1 =$_FILES['image_detail1']['size'];
    $file_tmp1 =$_FILES['image_detail1']['tmp_name'];
    $file_type1 =$_FILES['image_detail1']['type'];


    $array = explode('.', $_FILES['image_detail1']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size1 > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp1, "../productimage/" . $file_name1);
    }
    
    // banner image
    $file_name_banner = $_FILES['banner_image']['name'];

    if($file_name_banner=='')
    {
        $file_name_banner = $_POST['banner_image1'];
    }
    else{
        unlink("../productimage/".$_POST['img_id_banner']);
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

    // Product
    $file_name = $_FILES['image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../productimage/".$_POST['img_id']);
    }

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



    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $sale_price=$_POST['sale_price'];
    // $title = $_POST['title'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];


    $sql = mysqli_query($con, "UPDATE tslider SET name='$name', price='$price', sale_price='$sale_price' ,image='$file_name' ,banner_image='$file_name_banner', image_detail1='$file_name1', image_detail2='$file_name2', image_detail3='$file_name3', image_detail4='$file_name4', image_detail5='$file_name5'  WHERE id=$pid ");

    if($sql){
        $msg="Product Updated Successfully...";
    }
    else{
        $msg1="Product Does not Updated...Try Again.";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
<!--preloader-->
<style>.btn {

        padding: 5px 0px !important;

    }</style>
<!-- Site wrapper -->
<div class="wrapper">
    <?php include('header.php'); ?>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>



    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Edit Third Product Details</h1>

            </div>
        </section>
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
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="#">
                                    <h4>Edit Product Details</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                        <?php
                            $crid=$_GET['crtid'];
                            $sql= mysqli_query($con,"select * from tslider where id='$crid'  ");

                            $total=mysqli_fetch_assoc($sql);
                            

                        ?>
                        <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


<div class="col-md-12">
    <div class="row">
        <div class="col-md-12" style="padding-left: 25px">
            <div class="form-group col-sm-6">
                <label>Name </label>
                <input type="Text" class="form-control" value="<?php echo $total['name'];?>" placeholder=""  name="name" style="width: 920px;" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding-left: 25px">
            <div class="form-group col-sm-6">
                <label>Price </label>
                <input type="Text" class="form-control" value="<?php echo $total['price'];?>" placeholder=""  name="price" style="width: 920px;" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding-left: 25px">
            <div class="form-group col-sm-6">
                <label>Sale Price </label>
                <input type="Text" class="form-control" value="<?php echo $total['sale_price'];?>" placeholder=""  name="sale_price" style="width: 920px;" >
            </div>
        </div>
    </div>
    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Product Image </label>
                <img src="../productimage/<?php echo $total['image'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Banner Image </label>
                <img src="../productimage/<?php echo $total['banner_image'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="banner_image" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Image Detail 1 </label>
                <img src="../productimage/<?php echo $total['image_detail1'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image_detail1" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Image Detail 2 </label>
                <img src="../productimage/<?php echo $total['image_detail2'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image_detail2" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

     <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Image Detail 3 </label>
                <img src="../productimage/<?php echo $total['image_detail3'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image_detail3" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Image Detail 4 </label>
                <img src="../productimage/<?php echo $total['image_detail4'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image_detail4" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>

    <div class="row"  style="padding-left: 25px;">
        <div  class="form-group col-sm-6">
            <div><label> Choose Image Detail 5 </label>
                <img src="../productimage/<?php echo $total['image_detail5'];?>"  style="width: 150px;height: 120px;">
                <input type="file"  id="imgInp" class="form-control" name="image_detail5" placeholder="" onchange="readURL(this)">
                <!--<input type="hidden" name="productimage" />-->
            </div>
        </div>
    </div>



</div>
    <input type="text" name="pid" value="<?php echo $crid; ?>">

    <input type="text" name="image1" value="<?php echo $total['image'];?>">

    <input type="text" name="img_id" value="<?php echo $total['image'];?>">

    <input type="text" name="banner_image1" value="<?php echo $total['banner_image'];?>">

    <input type="text" name="img_id_banner" value="<?php echo $total['banner_image'];?>">

    <input type="text" name="image_detail_post1" value="<?php echo $total['image_detail1'];?>">

    <input type="text" name="img_id_detail1" value="<?php echo $total['image_detail1'];?>">

    <input type="text" name="image_detail_post2" value="<?php echo $total['image_detail2'];?>">

    <input type="text" name="img_id_detail2" value="<?php echo $total['image_detail2'];?>">

    <input type="text" name="image_detail_post3" value="<?php echo $total['image_detail3'];?>">

    <input type="text" name="img_id_detail3" value="<?php echo $total['image_detail3'];?>">

    <input type="text" name="image_detail_post4" value="<?php echo $total['image_detail4'];?>">

    <input type="text" name="img_id_detail4" value="<?php echo $total['image_detail4'];?>">

    <input type="text" name="image_detail_post4" value="<?php echo $total['image_detail5'];?>">

    <input type="text" name="img_id_detail4" value="<?php echo $total['image_detail5'];?>">


<div class="col-md-12">
    <div class="reset-button" style="padding-left: 390px;">
        <input type="submit" name="submit" value="Update Product" class="btn btn-add">
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
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
</div>
<!-- ./wrapper -->
<!-- Start Core Plugins
   =====================================================================-->
<!-- jQuery -->

</body>

</html>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTableExample1').DataTable( {
            "pagingType": "full_numbers"
        } );
    } );
</script>

<script>
    CKEDITOR.replace( 'editor' );
</script>

