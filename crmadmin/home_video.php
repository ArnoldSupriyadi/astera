<?php include_once("../connection.php"); ?>



<?php

if(isset($_POST['submit'])){

     $file_name = $_FILES['image']['name'];

     if($file_name=='')
     {
         $file_name = $_POST['image1'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_id']);
      }

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

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name);

     }




      $file_name1 = $_FILES['image1']['name'];

     if($file_name1=='')
     {
         $file_name1 = $_POST['image2'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_idd']);
      }

     $file_size =$_FILES['image1']['size'];
     $file_tmp =$_FILES['image1']['tmp_name'];
     $file_type=$_FILES['image1']['type'];

     $array = explode('.', $_FILES['image1']['name']);
     $file_ext=strtolower(end($array));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
     }

     if($file_size > 12097152){
         $errors='File size must be excately 11 MB';
     }
     if(empty($errors)==true) {

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name1);

     }





      $file_name2 = $_FILES['image2']['name'];

     if($file_name2=='')
     {
         $file_name2 = $_POST['image3'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_idt']);
      }

     $file_size =$_FILES['image2']['size'];
     $file_tmp =$_FILES['image2']['tmp_name'];
     $file_type=$_FILES['image2']['type'];

     $array = explode('.', $_FILES['image2']['name']);
     $file_ext=strtolower(end($array));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
     }

     if($file_size > 12097152){
         $errors='File size must be excately 11 MB';
     }
     if(empty($errors)==true) {

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name2);

     }





       $file_name3 = $_FILES['image3']['name'];

     if($file_name3=='')
     {
         $file_name3 = $_POST['image4'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_idt']);
      }

     $file_size =$_FILES['image3']['size'];
     $file_tmp =$_FILES['image3']['tmp_name'];
     $file_type=$_FILES['image3']['type'];

     $array = explode('.', $_FILES['image3']['name']);
     $file_ext=strtolower(end($array));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
     }

     if($file_size > 12097152){
         $errors='File size must be excately 11 MB';
     }
     if(empty($errors)==true) {

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name3);

     }



       $file_name4 = $_FILES['image4']['name'];

     if($file_name4=='')
     {
         $file_name4 = $_POST['image5'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_idt']);
      }

     $file_size =$_FILES['image4']['size'];
     $file_tmp =$_FILES['image4']['tmp_name'];
     $file_type=$_FILES['image4']['type'];

     $array = explode('.', $_FILES['image4']['name']);
     $file_ext=strtolower(end($array));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
     }

     if($file_size > 12097152){
         $errors='File size must be excately 11 MB';
     }
     if(empty($errors)==true) {

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name4);

     }





       $file_name5 = $_FILES['image5']['name'];

     if($file_name5=='')
     {
         $file_name5 = $_POST['image6'];
     }
      else{
          unlink("../serviceimage/".$_POST['img_idt']);
      }

     $file_size =$_FILES['image5']['size'];
     $file_tmp =$_FILES['image5']['tmp_name'];
     $file_type=$_FILES['image5']['type'];

     $array = explode('.', $_FILES['image5']['name']);
     $file_ext=strtolower(end($array));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
     }

     if($file_size > 12097152){
         $errors='File size must be excately 11 MB';
     }
     if(empty($errors)==true) {

         move_uploaded_file($file_tmp, "../serviceimage/" . $file_name5);

     }




    
    $title1=$_POST['title1'];
    $title2=$_POST['title2'];
    $title3=$_POST['title3'];
    $title4=$_POST['title4'];
    $title5=$_POST['title5'];
    $title6=$_POST['title6'];
    

    $sql = mysqli_query($con, "UPDATE   service SET title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5',title6='$title6',image='$file_name',image1='$file_name1',image2='$file_name2',image3='$file_name3',image4='$file_name4',image5='$file_name5' WHERE id=1 ");

    if($sql){
        $msg="Home Videos And Images Updated Successfully...";
    }
    else{
        $msg1="Home Videos And Images Does not Updated...Try Again.";
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
                <h1>Edit Home Videos</h1>

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
                                    <h4>Edit Home Videos</h4>
                                </a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                                <?php
                                $sqlqry= mysqli_query($con,"select * from  service where id=1 ");
                                $total=mysqli_fetch_assoc($sqlqry);
                                ?>

                                <div class="col-md-12">
                                    <div class="row">
                                       <!--  <p>Ex:Like This is the YouTube Url-https://www.youtube.com/watch?v=<mark><b>LTXD6XZXc3U</b></mark>And you can put only the <b>highlighted</b> part</p> -->

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video1'];?>"  name="video1" style="width: 426px;" >
                                            </div>
                                        </div>

                                     <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                            <label> Choose First Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title: </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video2'];?>"  name="video2" style="width: 426px;" >
                                            </div>
                                        </div>

                                    <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                        <label> Choose Second Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image1" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video3'];?>"  name="video3" style="width: 426px;" >
                                            </div>
                                        </div>



                                    <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                        <label> Choose Third Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image2" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video1'];?>"  name="video1" style="width: 426px;" >
                                            </div>
                                        </div>

                                     <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                            <label> Choose First Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video1'];?>"  name="video1" style="width: 426px;" >
                                            </div>
                                        </div>

                                     <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                            <label> Choose First Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group col-sm-12">
                                                <label> Enter First Title : </label><br>
                                                <input type="text" class="form-control" placeholder="" value="<?php echo $total['video1'];?>"  name="video1" style="width: 426px;" >
                                            </div>
                                        </div>

                                     <div class="col-md-6">
                                        <div  class="form-group col-sm-12">
                                            <label> Choose First Thumbnel Image :</label>
                                            <input type="file"  id="img_id" class="form-control" name="image" placeholder=""   style="width: 426px;"  required>
                                        </div>
                                    </div>

                                        


                                        <!-- <div class="col-md-12">
                                            <div class="form-group col-sm-12">
                                                <label> Choose Customer Comment : </label><br>
                                                <img src="../bannerimage/<?php echo $total['image'];?>"  style="width: 200px;height: 150px;">
                                                <input type="file" class="form-control" name="image" placeholder=""   style="width: 250px;">
                                           
                                            </div>
                                        </div> -->

                                        

                                        <!-- <div class="col-md-12">
                                            <div class="form-group col-sm-12">
                                                <label> Enter Customer Comment : </label><br>
                                                <textarea name="editor1" ><?php echo $total['comment'] ?></textarea>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="reset-button" style="padding-left: 390px;">

                                        <input type="hidden" name="pid" value="<?php echo $crid; ?>">
                                        
                                        <input type="hidden" name="image1" value="<?php echo $total['image']; ?>">

                                        <input type="hidden" name="img_id" value="<?php echo $total['image'];  ?>">



                                        <input type="hidden" name="image2" value="<?php echo $total['image1']; ?>">

                                        <input type="hidden" name="img_idd" value="<?php echo $total['image1'];  ?>">


                                        <input type="hidden" name="image3" value="<?php echo $total['image2']; ?>">

                                        <input type="hidden" name="img_idt" value="<?php echo $total['image2'];  ?>">


                                        <input type="submit" name="submit" value="Update Home Videos" class="btn btn-add">
                                    </div>
                                </div>


                            </form>


                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script>
    CKEDITOR.replace( 'editor1' );
</script> -->

<?php include 'footer.php';?>
