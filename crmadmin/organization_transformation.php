
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $file_name = $_FILES['organization_image']['name'];

    if($file_name=='')
    {
        $file_name = $_POST['image1'];
    }
    else{
        unlink("../organization_image/".$_POST['img_id']);
    }

    $file_size =$_FILES['organization_image']['size'];
    $file_tmp =$_FILES['organization_image']['tmp_name'];
    $file_type=$_FILES['organization_image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['organization_image']['name'])));

    $expensions= array("jpeg","jpg","png","gif");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG or GIF.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {
        move_uploaded_file($file_tmp, "../organization_image/" . $file_name);
    }

    $content = $_POST['content'];

    $sql = mysqli_query($con, "UPDATE  organization_transformation SET content='$content',organization_image='$file_name'   WHERE id=1 ");


    if($sql){
        $msg="Home Page Content Update successfully ";
    }
    else{
        $msg1="Home Page Content Not Updated... Plese Try Again";
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
                <h1>Edit Organization Transformation  Content</h1>

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
                                <h4>Organization Transformation  Content</h4>

                            </div>
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 16px;color: red"><?php
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

                                <?php
                                $sqlqry= mysqli_query($con,"select * from  organization_transformation where id=1");
                                $tota=mysqli_fetch_assoc($sqlqry);
                                ?>


                                <div class="col-md-6">
                                    <div  class="form-group col-sm-6">
                                        <label> Choose Image :</label><br>
                                        <img src="../organization_image/<?php echo $tota['organization_image'];?>"  style="width: 250px;height: 180px;">
                                        <input type="file" class="form-control" name="organization_image" placeholder=""   style="width: 250px;"  >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Organization Transformation Content</label>
                                            <textarea name="content" ><?php echo $tota['content'] ?></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">

                                        <input type="hidden" name="image1" value="<?php echo $tota['organization_image']; ?>">

                                        <input type="hidden" name="img_id" value="<?php echo $tota['organization_image'];  ?>">

                                        <input type="submit" name="submit" value="Update Organization Transformation" class="btn btn-add">
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

    <script>
        CKEDITOR.replace( 'content' );
    </script>

    <?php include 'footer.php';?>


