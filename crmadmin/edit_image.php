<?php include_once("../connection.php"); ?>



<?php

if(isset($_POST['submit'])){





    $file_name = $_FILES['image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../recentwork_image/".$_POST['img_id']);
    }

    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../recentwork_image/" . $file_name);



    }



     $pid=$_POST['pid'];
     $image_name=$_POST['image_name'];


    $sql = mysqli_query($con, "UPDATE  recentwork SET image_name='$image_name' , image='$file_name'   WHERE id=$pid ");

    if($sql){
        $msg="Image Updated Successfully...";
    }
    else{
        $msg1="Image Does not Updated...Try Again.";
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
                <h1>Edit Image</h1>

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
                                    <h4>Edit Recent Image</h4>
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
                                        <th style="width:40%;text-align: center">  Image</th>

                                        <th style="width:20%;text-align: center"> Name</th>


                                        <th style="width:10%;text-align: center">Update</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $crid=$_GET['crtid'];
                                    $sql= mysqli_query($con,"select * from recentwork where id='$crid'  ");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>
                                            <form action="" method="post" enctype="multipart/form-data">

                                                <td><img src="../recentwork_image/<?php echo $total['image'];?>"  style="width: 150px;height: 120px;">
                                                    <label> Change Products Image </label>
                                                    <input type="file" class="form-control" placeholder="Choose Image" name="image" />
                                                </td>

                                                <td><input type="text" name="image_name" value="<?php echo $total['image_name'];?>" ></td>


                                                <td>
                                                     <input type="hidden" name="pid" value="<?php echo $crid; ?>">

                                                    <input type="hidden" name="image1" value="<?php echo $total['image'];?>">

                                                    <input type="hidden" name="img_id" value="<?php echo $total['image'];?>">

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
