<?php include_once("../connection.php"); ?>


<?php

if(isset($_POST['submit'])){





    $file_name = $_FILES['sponsor_package_image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../imagesforsponsor/".$_POST['img_id']);
    }

    $file_size =$_FILES['sponsor_package_image']['size'];
    $file_tmp =$_FILES['sponsor_package_image']['tmp_name'];
    $file_type=$_FILES['sponsor_package_image']['type'];


    $file_ext=strtolower(end(explode('.',$_FILES['sponsor_package_image']['name'])));



    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../imagesforsponsor/" . $file_name);



    }



    $pid=$_POST['pid'];
    $sponsor_package_name = $_POST['sponsor_package_name'];
    $sponsor_package_content = $_POST['editor'];


    //UPDATE `products` SET `product_name`='name',`product_price`='545',`product_description`='uiegfiuegifiuoef',`product_review`='fbuegf'WHERE `product_id`=3

    $sql = mysqli_query($con, "UPDATE   sponsor_package SET sponsor_package_name='$sponsor_package_name' ,sponsor_package_content='$sponsor_package_content', sponsor_package_image='$file_name'   WHERE id=$pid ");

    if($sql){
        $msg="Sponsor Package Updated Successfully...";
    }
    else{
        $msg1="Sponsor Package Does not Updated...Try Again.";
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
                <h1>Edit Sponsor Package Details</h1>

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
                                    <h4>Edit Sponsor Package Details</h4>
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
                                        <th style="width:30%;text-align: center">Sponsor Package Image</th>

                                        <th style="width:15%;text-align: center">Sponsor Package Name</th>

                                        <th style="width:10%;text-align: center">Sponsor Package Content</th>

                                        <!--<th>Product Review</th>-->

                                        <th style="width:5%;text-align: center">Update</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $crid=$_GET['crtid'];
                                    $sql= mysqli_query($con,"select * from sponsor_package where id='$crid'  ");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>
                                            <form action="" method="post" enctype="multipart/form-data">

                                                <td><img src="../imagesforsponsor/<?php echo $total['sponsor_package_image'];?>"  style="width: 150px;height: 120px;">
                                                    <label> Change Sponsor Package Image </label>
                                                    <input type="file" class="form-control" placeholder="Choose Product Image" name="sponsor_package_image" />
                                                </td>

                                                <td><input type="text" name="sponsor_package_name" value="<?php echo $total['sponsor_package_name'];?>" ></td>

                                                <td><textarea type="text" name="editor" value=""  style="width: 515px;height: 160px;"><?php echo $total['sponsor_package_content'];?></textarea></td>




                                                <td>
                                                    <input type="hidden" name="pid" value="<?php echo $crid; ?>">

                                                    <input type="hidden" name="image1" value="<?php echo $total['sponsor_package_image'];?>">

                                                    <input type="hidden" name="img_id" value="<?php echo $total['sponsor_package_image'];?>">


                                                    <input type="submit" name="submit" value="Update Sponsor Package" class="btn btn-add">
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
    CKEDITOR.replace( 'editor' );
</script>
