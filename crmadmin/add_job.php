
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $job_title = $_POST['job_title'];
    $job_type = $_POST['job_type'];
    $job_description = $_POST['job_description'];
    $job_postdate = date( 'd.m.Y ' );


    $sql = mysqli_query($con, "INSERT INTO  job (job_title,job_type,job_description,job_postdate)VALUES('$job_title','$job_type','$job_description','$job_postdate')");

    if($sql){
        $msg=" Job Posted Successfully ";
    }
    else{
        $msg1="Job Doesn't Posted ... Plese Try Again";
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
                <h1> Post Job</h1>

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
                                <h4>Post New Job</h4>

                            </div>
                        </div>
                        <div class="panel-body">
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

                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Enter Job Title  </label>
                                                <input type="Text" class="form-control" placeholder=""  name="job_title" style="width: 400px;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-6">
                                                <label> Select Job Type </label>
                                                <select name="job_type" class="dropdown-select form-control required" style="width: 400px;"  required>
                                                    <option value="">Select Job Type</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Full Time">Full Time</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <div class="col-md-12">
                                                <label> Enter Job Description </label>
                                                <input type="Text" class="form-control" placeholder=""  name="job_description" style="    width: 914px;height: 85px;" required>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Post Job" class="btn btn-add">
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
    <script type="text/javascript">

        //testing
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        //testing


    </script>

    <?php include 'footer.php';?>


