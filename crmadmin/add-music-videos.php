<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


   

    $url= $_POST['url'];
    // $banner_content = $_POST['banner_content'];

$sql = mysqli_query($con, "INSERT INTO music_video (url)VALUES('$url')");


    if($sql){
        $msg=" Music Video Inserted successfully ";
    }
    else{
        $msg1="Music Video Not Inserted... Plese Try Again";
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
                <h1> Add New Music Video</h1>

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
                                <h4>Add Music Video</h4>

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
<p>Ex:Like This is the YouTube Url-https://www.youtube.com/watch?v=<mark><b>LTXD6XZXc3U</b></mark>And you can put only the <b>highlighted</b> part</p>
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-6">
                                            <label> Enter Youtube Url : </label>
                                            <input type="text" class="form-control" placeholder=""  name="url" style="width: 850px;" >
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-12">
                                        <div class="form-group col-sm-6">
                                            <label> Enter Banner Content : </label>
                                            <input type="text" class="form-control" placeholder=""  name="banner_content" style="width: 850px;" >
                                        </div>
                                    </div> -->

                                    <!-- <div class="col-md-6">
                                        <div  class="form-group col-sm-6">
                                            <label> Choose Banner Image :</label>
                                            <input type="file"  id="imgInp" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div> -->



                                </div>
                        </div>

                        <div class="col-md-12">
                            <div class="reset-button" style="padding-left: 390px;">
                                <input type="submit" name="submit" value="Add New Music Video" class="btn btn-add">
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
                    .height(250);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    //testing


</script>

<?php include 'footer.php';?>


