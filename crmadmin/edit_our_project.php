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





    $file_name = $_FILES['image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../our_project/".$_POST['img_id']);
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

        move_uploaded_file($file_tmp, "../our_project/" . $file_name);



    }



    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    
    // $content=$_POST['editor'];
    // $title = $_POST['title'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];


    $sql = mysqli_query($con, "UPDATE  our_project SET name='$name' ,category='$category', image='$file_name'   WHERE id=$pid ");

    if($sql){
        $msg="Blog Updated Successfully...";
    }
    else{
        $msg1="Blog Does not Updated...Try Again.";
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
                <h1>Edit Our Project</h1>

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
                                    <h4>Edit Blog Details</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                        <?php
                            $crid=$_GET['crtid'];
                            $sql= mysqli_query($con,"select * from our_project where id='$crid'  ");

                            $total=mysqli_fetch_assoc($sql);
                            

                        ?>
                        <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


<div class="col-md-12">
    
    <div class="row"  style="padding-left: 25px;"  >
        <div  class="form-group col-sm-6">
            <div><label> Choose Project Image </label>
                <img src="../our_project/<?php echo $total['image'];?>"  style="width: 150px;height: 120px; margin-bottom: 20px">
                <input type="file"  id="imgInp" class="form-control" name="image" placeholder="" onchange="readURL(this)"   >
                <!--<input type="hidden" name="productimage" />-->
                <small style="color: #990000;">Ukuran Gambar 385 × 489 pixel</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="padding-left: 25px">
            <div class="form-group col-sm-6">
                <label> Enter Project Name </label>
                <input type="text" class="form-control" value="<?php echo $total['name'];?>" placeholder=""  name="name" style="width: 920px;" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="padding-left: 25px">
            <div class="form-group col-sm-6">
                <label> Enter Category Name </label>
                <input type="text" class="form-control" value="<?php echo $total['category'];?>" placeholder=""  name="category" style="width: 920px;" >
            </div>
        </div>
    </div>

</div>
<input type="text" name="pid" value="<?php echo $crid; ?>">

     <input type="text" name="image1" value="<?php echo $total['image'];?>">

    <input type="text" name="img_id" value="<?php echo $total['image'];?>">


<div class="col-md-12">
    <div class="reset-button" style="padding-left: 390px;">
        <input type="submit" name="submit" value="Update Our Project" class="btn btn-add">
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
