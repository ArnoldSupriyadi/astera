<?php
$today = date("F Y");

$date=date("Y-m-d");?>


<?php
//session_start();
include_once("../connection.php");
?>




<?php

if(isset($_POST['submit'])){


    $pid=$_POST['pid'];
    $content1=$_POST['content1'];
    $content2=$_POST['content2'];
    $content3=$_POST['content3'];
    $content4=$_POST['content4'];
    $content5=$_POST['content5'];
    $content6=$_POST['content6'];
    $content7=$_POST['content7'];
    $content8=$_POST['content8'];

    // $title = $_POST['title'];
    // $description = $_POST['description'];
    // $b_id=$_POST['b_id'];


    $sql = mysqli_query($con, "UPDATE experience SET number_title_one='$content1', title_one='$content2', number_title_two='$content3', title_two='$content4', number_title_three='$content5', title_three='$content6', number_title_four='$content7', title_four='$content8'  WHERE id=$pid ");

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
                <h1>Edit Experience</h1>

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
                            $sql= mysqli_query($con,"select * from experience where id='$crid'  ");

                            $row=mysqli_fetch_assoc($sql);
                            

                        ?>
                        <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                        <div class="col-md-12">
                            
                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Number </label>
                                    <textarea type="text" name="content1" style="width: 515px;"><?php echo $row['number_title_one'];?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Title</label>
                                    <textarea type="text" name="content2" style="width: 515px;"><?php echo $row['title_one'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Number</label>
                                    <textarea type="text" name="content3" style="width: 515px;"><?php echo $row['number_title_two'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Title </label>
                                    <textarea type="text" name="content4" style="width: 515px;"><?php echo $row['title_two'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Number </label>
                                    <textarea type="text" name="content5" style="width: 515px;"><?php echo $row['number_title_three'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Title </label>
                                    <textarea type="text" name="content6" style="width: 515px;"><?php echo $row['title_three'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Number  </label>
                                    <textarea type="text" name="content7" style="width: 515px;"><?php echo $row['number_title_four'];?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-sm-12">
                                    <label> Enter Title </label>
                                    <textarea type="text" name="content8" style="width: 515px;"><?php echo $row['title_four'];?></textarea>
                                </div>
                            </div>


                        </div>

                        <input type="hidden" name="pid" value="<?php echo $crid; ?>">


                        <div class="col-md-12">
                            <div class="reset-button" style="padding-left: 390px;">
                                <input type="submit" name="submit" value="Update Experience" class="btn btn-add">
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

