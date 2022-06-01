
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
    <section class="page-title" style="background-image:url(images/background/CONTACT_US_ASTERA.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
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

                        <div class="contact-info">
                            <div class="row">

                                <?php
                                    $sqlqry= mysqli_query($con,"select * from  contactus ");
                                    $tota=mysqli_fetch_assoc($sqlqry);
                                ?>


                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>Location</h4>
                                        <p><?php echo $tota['address'];?>

                                        </p>
                                    </div>
                                </div>

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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                         <div class="map-outer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014937.4166634362!2d105.94000581415897!3d-6.4454662690111135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9c82e75f991%3A0x60cc66e2865a65f8!2sAstera%20Kitchen%20Cabinet!5e0!3m2!1sen!2sid!4v1640404422527!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
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