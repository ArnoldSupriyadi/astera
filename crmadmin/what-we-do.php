
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){

  
    


    $content= $_POST['editor1'];
    $youtube1= $_POST['youtube1'];
    $youtube2= $_POST['youtube2'];
   // $buy_a_home = $_POST['editor3'];
    //$sell_your_home = $_POST['editor4'];
    // $testimonial = $_POST['editor5'];

    



    

    $sql = mysqli_query($con, "INSERT INTO what-we-do (content,youtube1,youtube2)VALUES('$content','$youtube1','$youtube2')");


    if($sql){
        $msg="What We Do Content Update successfully ";
    }
    else{
        $msg1="What We Do Content Not Updated... Plese Try Again";
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
                <h1>Edit What We Do Content</h1>

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
                                <h4>Edit Content</h4>

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

                                <!-- <?php
                                $sqlwhat= mysqli_query($con,"select * from  what-we-do order by id");
                                $total=mysqli_fetch_assoc($sqlwhat);
                                ?> -->
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit What We Do Content</label>
                                            <textarea name="editor1" ><!-- <?php echo $total['content'] ?> --></textarea>
                                        </div>
                                    </div>
                                </div>
                                 
                                 <!-- <div class="col-md-12">
                                        <div  class="form-group col-sm-6">
                                            <label> Choose Our Mission Image :</label>
                                            <input type="file"  id="imgInp" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div> -->

                                     
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Enter Music Video YouTube URL</label>
                                            <input type="text"  id="imgInp" class="form-control" name="youtube1" placeholder=""   style="width: 426px;"   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Enter Business Promos YouTube URL</label>
                                            <input type="text"  id="imgInp" class="form-control" name="youtube2" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit Buy a Home Content</label>
                                            <textarea name="editor3" ><?php echo $tota['buy_a_home'] ?></textarea>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit Sell Your Home Content</label>
                                            <textarea name="editor4" ><?php echo $tota['sell_your_home'] ?></textarea>
                                        </div>
                                    </div>
                                </div> -->


                                <!-- <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit Testimonial Content</label>
                                            <textarea name="editor5" ><?php echo $tota['testimonial'] ?></textarea>
                                        </div>
                                    </div>
                                </div> -->
                                
                                
                        
                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update What We Do Content" class="btn btn-add">
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
    <!-- <script>
        CKEDITOR.replace( 'editor2' );
    </script>
    <script>
        CKEDITOR.replace( 'editor3' );
    </script>
    <script>
        CKEDITOR.replace( 'editor4' );
    </script>
    <script>
        CKEDITOR.replace( 'editor5' );
    </script> -->


    <?php include 'footer.php';?>


