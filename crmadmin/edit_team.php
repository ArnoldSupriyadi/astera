<?php include_once("../connection.php"); ?>



<?php

if(isset($_POST['submit'])){





    $file_name = $_FILES['member_image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../member_image/".$_POST['img_id']);
    }

    $file_size =$_FILES['member_image']['size'];
    $file_tmp =$_FILES['member_image']['tmp_name'];
    $file_type=$_FILES['member_image']['type'];


    $file_ext=strtolower(end(explode('.',$_FILES['member_image']['name'])));



    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../member_image/" . $file_name);



    }



    $pid = $_POST['pid'];
    $member_name = $_POST['member_name'];
    $member_profession = $_POST['member_profession'];


    $sql = mysqli_query($con, "UPDATE   member SET member_name='$member_name' ,member_profession='$member_profession',member_image='$file_name'   WHERE id=$pid ");

    if($sql){
        $msg="Team Updated Successfully...";
    }
    else{
        $msg1="Team Does not Updated...Try Again.";
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
                <h1>Edit Team Details</h1>

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
                                    <h4>Edit Team Details</h4>
                                </a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                                <?php
                                $crid=$_GET['crtid'];
                                $sql= mysqli_query($con,"select * from member where id='$crid'  ");
                                $total=mysqli_fetch_assoc($sql)
                                ?>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Member Name : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['member_name'];?>"  name="member_name" style="width: 426px;" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Member Position : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['member_profession'];?>"  name="member_profession" style="width: 426px;" >
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div  class="form-group col-sm-12">
                                                <label> Choose Member Image :</label><br>
                                                <img src="../member_image/<?php echo $total['member_image'];?>"  style="width: 200px;height: 150px;">
                                                <input type="file" class="form-control" name="member_image" placeholder=""   style="width: 200px;"  >
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">

                                        <input type="hidden" name="pid" value="<?php echo $crid; ?>">

                                        <input type="hidden" name="image1" value="<?php echo $total['member_image'];?>">

                                        <input type="hidden" name="img_id" value="<?php echo $total['member_image'];?>">


                                        <input type="submit" name="submit" value="Update Team" class="btn btn-add">
                                    </div>
                                </div>


                            </form>


                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

    <?php include('footer.php'); ?>
</div>

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
