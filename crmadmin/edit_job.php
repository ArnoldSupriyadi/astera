<?php include_once("../connection.php"); ?>



<?php

if(isset($_POST['submit'])){







    $pid=$_POST['pid'];
    $job_title=$_POST['job_title'];
    $job_type=$_POST['job_type'];
    $job_description=$_POST['editor1'];


    $sql = mysqli_query($con, "UPDATE   job SET job_title='$job_title' ,job_type='$job_type', job_description='$job_description'  WHERE id=$pid ");

    if($sql){
        $msg="Job Updated Successfully...";
    }
    else{
        $msg1="Job Does not Updated...Try Again.";
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
                <h1>Edit Testimonial Details</h1>

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
                                    <h4>Edit Testimonial Details</h4>
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
                                        <th style="width:20%;text-align: center">Job Tittle</th>

                                        <th style="width:20%;text-align: center">Job Type</th>

                                        <th style="width:50%;text-align: center">Job Description</th>

                                        <th style="width:10%;text-align: center">Update</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $crid=$_GET['crtid'];
                                    $sql= mysqli_query($con,"select * from job where id='$crid'  ");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>
                                            <form action="" method="post" enctype="multipart/form-data">



                                                <td><input type="text" name="job_title" value="<?php echo $total['job_title'];?>" ></td>

                                                <td>
                                                    <select name="job_type" class="dropdown-select form-control required">
                                                        <option value=""><?php echo $total['job_type'];?></option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Full Time">Full Time</option>
                                                    </select>
                                                </td>

                                                <td><textarea type="text" name="editor1" value=""  style="width: 515px;height: 160px;"><?php echo $total['job_description'];?></textarea></td>


                                                <td>
                                                    <input type="hidden" name="pid" value="<?php echo $crid; ?>">

                                                    <input type="submit" name="submit" value="update Job" class="btn btn-add">
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
