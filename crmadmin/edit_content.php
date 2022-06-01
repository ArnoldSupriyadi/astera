
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit1'])){


    $service = $_POST['editor1'];

    $sql = mysqli_query($con, "UPDATE  service SET service='$service'    WHERE id=1 ");


    if($sql){
        $msg1=" Service Update successfully ";
    }
    else{
        $msg2="Service Not Updated... Plese Try Again";
    }

}



?>

<?php

if(isset($_POST['submit2'])){


    $service = $_POST['editor2'];

    $sql = mysqli_query($con, "UPDATE  service SET service='$service'    WHERE id=2 ");


    if($sql){
        $msg3=" Service Update successfully ";
    }
    else{
        $msg4="Service Not Updated... Plese Try Again";
    }

}



?>

<?php

if(isset($_POST['submit3'])){


    $service = $_POST['editor3'];

    $sql = mysqli_query($con, "UPDATE  service SET service='$service'    WHERE id=3 ");


    if($sql){
        $msg5=" Service Update successfully ";
    }
    else{
        $msg6="Service Not Updated... Plese Try Again";
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
                <h1>  Services</h1>

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
                                <h4> OFFICE CLEANING, JANITORIAL AND OTHER SERVICES</h4>

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
                                if(isset( $msg2))
                                {
                                    echo $msg2;
                                }
                                ?></p>

                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Content</label>
                                            <?php
                                            $sqlqry= mysqli_query($con,"select * from  service WHERE id=1  ");
                                            while($tota=mysqli_fetch_assoc($sqlqry)) {
                                                ?>
                                                <textarea name="editor1"    name="service"   value=""   required><?php echo $tota['service'] ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>


                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit1" value="Update Service" class="btn btn-add">
                                    </div>
                                </div>


                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <h4> WHAT WE DO</h4>

                            </div>
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg3))
                                {
                                    echo $msg3;
                                }
                                ?></p>

                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg4))
                                {
                                    echo $msg4;
                                }
                                ?></p>


                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Content</label>
                                            <?php
                                            $sqlqry= mysqli_query($con,"select * from  service WHERE id=2 ");
                                            while($tota=mysqli_fetch_assoc($sqlqry)) {
                                                ?>
                                                <textarea name="editor2"    name="service"   value=""   required><?php echo $tota['service'] ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>


                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit2" value="Update Service" class="btn btn-add">
                                    </div>
                                </div>


                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <h4>FACILITIES WE CLEAN</h4>

                            </div>
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg5))
                                {
                                    echo $msg5;
                                }
                                ?></p>

                            <p style="font-size: 16px;color: green"><?php
                                if(isset( $msg6))
                                {
                                    echo $msg6;
                                }
                                ?></p>


                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Content</label>
                                            <?php
                                            $sqlqry= mysqli_query($con,"select * from  service WHERE id=3 ");
                                            while($tota=mysqli_fetch_assoc($sqlqry)) {
                                                ?>
                                                <textarea name="editor3"    name="service"   value=""   required><?php echo $tota['service'] ?></textarea>
                                            <?php } ?>
                                        </div>
                                    </div>


                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit3" value="Update Service" class="btn btn-add">
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
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
    </script>

    <?php include 'footer.php';?>


