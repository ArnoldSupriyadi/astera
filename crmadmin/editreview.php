<?php include_once("../connection.php"); ?>


<?php

if(isset($_POST['submit'])){





    $file_name = $_FILES['reviewimage']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }

    $file_size =$_FILES['reviewimage']['size'];
    $file_tmp =$_FILES['reviewimage']['tmp_name'];
    $file_type=$_FILES['reviewimage']['type'];


    $file_ext=strtolower(end(explode('.',$_FILES['reviewimage']['name'])));



    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../reviewimage/" . $file_name);



    }



     $rid=$_POST['bid'];
     $name=$_POST['name'];
     $post=$_POST['post'];
     $review=$_POST['editor1'];


    //UPDATE `products` SET `product_name`='name',`product_price`='545',`product_description`='uiegfiuegifiuoef',`product_review`='fbuegf'WHERE `product_id`=3

    $sql = mysqli_query($con, "UPDATE  review SET rname='$name' , image='$file_name' , post='$post' , review='$review'    WHERE id='$rid' ");

    if($sql){
        $msg="Review Updated Successfully...";
    }
    else{
        $msg1="Review Does not Updated...Try Again.";
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
                <h1>Edit Product Details</h1>

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

                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr class="info">
                                        <th style="width:22%;text-align: center"> User Image</th>

                                        <th style="width:8%;text-align: center">user Name</th>

                                        <th style="width:7%;text-align: center">user Designation</th>

                                        <th style="width:60%;text-align: center">User Review</th>

                                        <th style="width:3%;text-align: center">Update</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $crid=$_GET['crtid'];
                                    $sql= mysqli_query($con,"select * from review where id='$crid'  ");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>
                                            <form action="" method="post" enctype="multipart/form-data">

                                                <td><img src="../reviewimage/<?php echo $total['image'];?>"  style="width: 100px;height: 100px;">
                                                    <label> Change Products Image </label>
                                                    <input type="file" class="form-control" placeholder="Choose Blog Image" name="reviewimage" />
                                                </td>

                                                <td><input type="text" name="name" value="<?php echo $total['rname'];?>" ></td>

                                                <td><input type="text" name="post" value="<?php echo $total['post'];?>" ></td>

                                                <td><textarea type="text" name="editor1" value="" style="height: 200px;width: 400px;"><?php echo $total['review'];?></textarea></td>




                                                <td>
                                                    <input type="hidden" name="bid" value="<?php echo $crid; ?>">

                                                    <input type="hidden" name="image1" value="<?php echo $total['image'];?>">

                                                    <input type="submit" name="submit" value="update" class="btn btn-add">
                                                </td>
                                            </form>


                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customer Modal1 -->
            <!-- <style>
                 .btn {
                     background-color: DodgerBlue;
                     border: none;
                     color: white;
                     padding: 12px 30px;
                     cursor: pointer;
                     font-size: 20px;
                 }

                 /* Darker background on mouse-over */
                 .btn:hover {
                     background-color: RoyalBlue;
                 }
             </style>
            <a href="ExportExcel1"> <button class="btn"><i class="fa fa-download"></i> Export To Excel</button></a-->
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
    CKEDITOR.replace( 'editor1' );
</script>
