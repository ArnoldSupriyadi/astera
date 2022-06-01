<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


  
    

    $project=$_POST['project'];
    $properties = $_POST['properties'];
    $opportunities = $_POST['opportunities'];

    $sql = mysqli_query($con, "UPDATE  home_content SET project='$project', properties='$properties', opportunities='$opportunities'   WHERE id=1 ");


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
                <h1>Edit Home Content</h1>

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
                                <h4>Home Content</h4>

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

                                <?php
                                $sqlqry= mysqli_query($con,"select * from  home_content WHERE id=1 ");
                                $tota=mysqli_fetch_assoc($sqlqry);
                                ?>

                              

                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Edit Attract Project</label>
                                            <textarea name="project" ><?php echo $tota['project'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Edit Find Off-Market Properties</label>
                                            <textarea name="properties" ><?php echo $tota['properties'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Edit Financial Opportunities</label>
                                            <textarea name="opportunities" ><?php echo $tota['opportunities'] ?></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update Home Content" class="btn btn-add">
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
        CKEDITOR.replace( 'project' );
    </script>
     <script>
        CKEDITOR.replace( 'properties' );
    </script>
     <script>
        CKEDITOR.replace( 'opportunities' );
    </script>

    <?php include 'footer.php';?>


