
<?php include_once("../connection.php"); ?>

<?php

if(isset($_POST['submit'])){

  
    


    $our_mission = $_POST['editor1'];
    $url = $_POST['url'];
   // $buy_a_home = $_POST['editor3'];
    //$sell_your_home = $_POST['editor4'];
    $testimonial = $_POST['editor5'];

     $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


    $array = explode('.', $_FILES['image']['name']);
    $file_ext=strtolower(end($array));


    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../bannerimage/" . $file_name);



    }

    $sql = mysqli_query($con, "UPDATE  sell_your_home SET our_mission='$our_mission',testimonial='$testimonial',image='$file_name',url='$url'  WHERE id=1 ");


    if($sql){
        $msg="Our Mission Content Update successfully ";
    }
    else{
        $msg1="Our Mission Content Not Updated... Plese Try Again";
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
                <h1>Edit Our Mission Content</h1>

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

                                <?php
                                $sqlqry= mysqli_query($con,"select * from  sell_your_home ");
                                $tota=mysqli_fetch_assoc($sqlqry);
                                ?>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit Our Mission Content</label>
                                            <textarea name="editor1" ><?php echo $tota['our_mission'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                 
                                 <div class="col-md-12">
                                        <div  class="form-group col-sm-6">
                                            <label> Choose Our Mission Image :</label>
                                            <input type="file"  id="imgInp" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                     
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label>Enter YouTube URL</label>
                                            <input type="text"  id="imgInp" class="form-control" name="url" placeholder=""   style="width: 426px;"  required>
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


                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group col-sm-12">
                                            <label> Edit Testimonial Content</label>
                                            <textarea name="editor5" ><?php echo $tota['testimonial'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                
                        
                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">
                                        <input type="submit" name="submit" value="Update Our Mission Content" class="btn btn-add">
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
    <script>
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
    </script>


    <?php include 'footer.php';?>


