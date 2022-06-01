<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){


    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $address = $_POST['address'];


    // $sql = mysqli_query($con, "UPDATE  contactus SET email1='$email1',email2='$email2',phone1='$phone1',phone2='$phone2' address='$address'   WHERE id=1 ");


    $sql = mysqli_query($con,"UPDATE `contactus` SET `email1`='$email1',`email2`='$email2',`phone1`='$phone1',`phone2`='$phone2',`address`='$address' WHERE id=1");


    if($sql){
        $msg=" Contact Us Update successfully ";
    }
    else{
        $msg1="Contact Us Not Updated... Plese Try Again";
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
                <h1>  Contact Us</h1>

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
                                <h4> Contact Us</h4>

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
                                    <?php
                                    $sqlqry= mysqli_query($con,"select * from  contactus ");
                                    while($tota=mysqli_fetch_assoc($sqlqry)) {
                                    ?>

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Address  </label><br>
                                                <input type="text"   name="address"   value="<?php echo $tota['address'] ?>" style="height: 35px;width: 500px;" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Phone1</label><br>
                                            <input type="text"   name="phone1"   value="<?php echo $tota['phone1'] ?>" style="height: 35px;width: 500px;" >
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Enter Phone2</label><br>
                                            <input type="text"   name="phone2"   value="<?php echo $tota['phone2'] ?>" style="height: 35px;width: 500px;" >
                                        </div>
                                    </div>

                                     <div class="col-md-12">
                                         <div class="form-group col-sm-12">
                                             <label> Enter Email1</label><br>
                                             <input type="email"   name="email1"   value="<?php echo $tota['email1'] ?>" style="height: 35px;width: 500px;" >
                                         </div>
                                     </div>


                                      <div class="col-md-12">
                                         <div class="form-group col-sm-12">
                                             <label> Enter Email2</label><br>
                                             <input type="email"   name="email2"   value="<?php echo $tota['email2'] ?>" style="height: 35px;width: 500px;" >
                                         </div>
                                     </div>






                                    <?php } ?>

                                </div>





                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update Contact Us" class="btn btn-add">
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
    </script>

    <?php include 'footer.php';?>


