<?php include_once("../connection.php"); ?>



<?php

if(isset($_POST['submit'])){





    $file_name = $_FILES['image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../imagesforspeaker/".$_POST['img_id']);
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

        move_uploaded_file($file_tmp, "../imagesforspeaker/" . $file_name);



    }



    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $position=$_POST['position'];
    $linkedin_url=$_POST['linkedin_url'];



    $sql = mysqli_query($con, "UPDATE  speaker SET image='$file_name' ,name='$name', position='$position',linkedin_url='$linkedin_url'    WHERE id=$pid ");

    if($sql){
        $msg="Speaker Updated Successfully...";
    }
    else{
        $msg1="Speaker Does not Updated...Try Again.";
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
                <h1>Edit Speaker Content</h1>

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
                                    <h4>Edit Speaker Content</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                                <?php
                                $crid=$_GET['crtid'];
                                $sql= mysqli_query($con,"select * from   speaker where id='$crid'  ");
                                $total=mysqli_fetch_assoc($sql)

                                ?>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Speaker Name : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['name'];?>"  name="name" style="width: 426px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Speaker Position : </label>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['position'];?>"  name="position" style="width: 426px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Speaker Linkedin Url : </label>
                                                <input type="url" class="form-control" placeholder="" value="<?php echo $total['linkedin_url'];?>" name="linkedin_url" style="width: 426px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div  class="form-group col-sm-6">
                                                <label> Choose Speaker Image :</label>
                                                <img src="../imagesforspeaker/<?php echo $total['image'];?>"  style="width: 200px;height: 150px;">
                                                <input type="file" class="form-control" name="image" placeholder=""   style="width: 200px;"  required>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">

                                        <input type="hidden" name="pid" value="<?php echo $crid; ?>">

                                        <input type="hidden" name="image1" value="<?php echo $total['image']; ?>">

                                        <input type="hidden" name="img_id" value="<?php echo $total['image'];  ?>">

                                        <input type="submit" name="submit" value="Update Speaker" class="btn btn-add">
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

