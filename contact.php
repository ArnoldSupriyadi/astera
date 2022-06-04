
<?php
include "connection.php";
?>

<?php


if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $date = date( 'd.m.Y ' );

$sql = mysqli_query($con, "INSERT INTO  contactform (date,name,email,phone,company,message)VALUES('$date','$name','$email','$phone','$company', '$message')");


    if($sql){
        $msg="  Inserted successfully ";
    }
    else{
        $msg1=" Not Inserted... Please Try Again";
    }


   

}





?>

<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Contact</title>
<?php
    include "header.php";
?>
    <!--End Main Header -->

<style>
.scroll-to-top{
  bottom: 20px;
  right:20px;
  width:50px;
  height:50px!important;   
}
.main-footer:before {
    background: #00000085!important;
}
    .main-footer .widgets-section {
        position: relative;
        padding: 100px 0 20px;
         margin-top: 0px!important; 
    }
</style>
    
    <!--Page Title-->
    <?php
        $sqlqry= mysqli_query($con,"select * from  contact_banner_image where id=1 ");
        $tota=mysqli_fetch_assoc($sqlqry);
        {
    ?>
    <section class="page-title" style="background-image:url(cover_banner/<?php echo $tota['banner_image'];?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">informaer</span>
                            <h2>Contact Us</h2>
                        </div>

                        <div class="contact-form">
                            <form method="post" action="" >
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="company" placeholder="Company">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 100px;">
                    <div class="inner-column">
                      <div class="contact-info">
                            <div class="row">

                                <?php
                                    $sqlqry= mysqli_query($con,"select * from  contactus ");
                                    $tota=mysqli_fetch_assoc($sqlqry);
                                    
                                ?>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Call Us</h4>
                                        <p><?php echo $tota['phone1'];?></p>
                                        <p><?php echo $tota['phone2'];?></p>
                                    </div>

                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Email</h4>
                                        <p><a href="mailto:<?php echo $tota['email1'];?>"><?php echo $tota['email1'];?></a></p>
                                        <p><a href="mailto:<?php echo $tota['email2'];?>"><?php echo $tota['email2'];?></a></p>
                                    </div>
                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Location list</h4>
                                        <?php
                                    $sql= mysqli_query($con,"select * from  location_list ");
                                    while($row=mysqli_fetch_assoc($sql))
                                    {
                                ?>
                                        <p class="mt-4"><?php echo $row['location'];?></p>
                                        <a href="<?= $row['link'] ?>" target="_blank">Go to Maps</a>
                                                                        <?php
                                    }
                                ?>
                                    </div>
                                </div>
                            </div>
                      </div>
                        <!-- <div class="location-list">
                            <h4>Location List</h4>
                            <p style="font-size: 14px;"><?php echo $tota['address'];?></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>&nbsp;</div>
    <!--End Contact Page Section -->

    <!--Clients Section-->
   
    <!--End Clients Section-->

    <!-- Main Footer -->
   <?php
    include "footer.php";
   ?>