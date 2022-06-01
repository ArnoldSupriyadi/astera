
<!-- <?php error_reporting(0);?> -->
<?php
//session_start();
include_once("../connection.php");

/*if(isset($_SESSION['adminuser']) && $_SESSION['adminuser'] != "")
{
//Task to do
}
else{
    header('Location: index.php');
}*/
?>

<?php

if(isset($_POST['submit'])){


    $aboutus = $_POST['aboutus'];

    $sql = mysqli_query($con, "UPDATE  aboutus SET aboutus='$aboutus'    WHERE id=1 ");


    if($sql){
        $msg=" About Us Update successfully ";
    }
    else{
        $msg1="About Us Not Updated... Plese Try Again";
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
                <h1> Add About Us</h1>

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
                                <h4>Add About Us</h4>

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

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-6">
                                            <label> Enter About Us </label>
                                            <?php
                                            $sqlqry= mysqli_query($con,"select * from  aboutus ");
                                            while($tota=mysqli_fetch_assoc($sqlqry)) {
                                            ?>
                                                <textarea   class="form-control"  name="aboutus"   value=""  style="width: 914px;height: 85px;" required><?php echo $tota['aboutus'] ?></textarea>
                                        <?php } ?>
                                        </div>
                                    </div>


                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update About Us" class="btn btn-add">
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

    <?php include 'footer.php';?>


