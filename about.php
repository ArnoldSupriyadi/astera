
<?php

include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>About</title>
<?php
    include "header.php";
?>
    <!--End Main Header -->

    <style type="text/css">
    .main-footer:before {
    background: #00000085!important;
}
        *,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #ffffff;
}

.scroll-to-top{
  bottom: 20px;
  right:20px;
  width:50px;
  height:50px!important;   
}

.timeline {
  position: relative;
  width: 100%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 15px 0;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 2px;
    background: #006E51;
    top: 0;
    bottom: 0;
    left: 75%;
    margin-left: -1px;
}


.container {
  padding: 15px 30px;
  position: relative;
  background: inherit;
  width: 50%;
}

.container.left {
  left: 0;
}

.container.right {
  left: 50%;
}

.container::after {
  content: '';
  position: absolute;
  width: 16px;
  height: 16px;
  top: calc(50% - 8px);
  right: -8px;
  background: #ffffff;
  /* border: 2px solid #006E51; */
  border-radius: 16px;
  z-index: 1;
}

.container.right::after {
  left: -8px;
}

.container::before {
  content: '';
  position: absolute;
  width: 50px;
  height: 2px;
  top: calc(50% - 1px);
  right: 8px;
  /* background: #006E51; */
  z-index: 1;
}

.container.right::before {
  left: 8px;
}

.container .date {
  position: absolute;
  display: inline-block;
  top: calc(50% - 8px);
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  color: #006E51;
  text-transform: uppercase;
  letter-spacing: 1px;
  z-index: 1;
}

.container.left .date {
  right: -75px;
}

.container.right .date {
  left: -75px;
}

.container .icon {
  position: absolute;
  display: inline-block;
  width: 40px;
  height: 40px;
  padding: 9px 0;
  top: calc(50% - 20px);
  background: #F6D155;
  border: 2px solid #006E51;
  border-radius: 40px;
  text-align: center;
  font-size: 18px;
  color: #006E51;
  z-index: 1;
}

.container.left .icon {
  right: 56px;
}

.container.right .icon {
  left: 56px;
}

.container .content {
  padding: 20px 80px 20px 20px;
  background: #F6D155;
  position: relative;
  border-radius: 0 500px 500px 0;
}

.container.right .content {
  padding: 30px 30px 30px 90px;
  border-radius: 500px 0 0 500px;
}

.container .content h2 {
  margin: 0 0 10px 0;
  font-size: 18px;
  font-weight: normal;
  color: #006E51;
}

.container .content p {
  margin: 0;
  font-size: 14px;
  line-height: 20px;
  color: #000000;
}

.youngphilip {
  width: 320px;
  z-index: 9;
}

@media (max-width: 767.98px) {
  .logo {
    width: 50px !important;
  }
  .content-column {
    margin-top: 60px;;
  }
  .about-section .image-column {
    top: -60px;
  }

  .about-section {
    height: 1200px;
  }
  .youngphilip {
    width: 180px !important;
    margin: 0px 0px 0px 0px;
  }
  .col-indowood {
    display: flex;
    justify-content: center;
  }

  .indowood {
    width: 138px;
  }

  .timeline {
    margin-left: 0px !important;
  }

  .container .content h2 {
    font-size: 16px;
  }

  .timeline::after {
    left: 90px;
  }

  .container {
    width: 100%;
    /* padding-left: 120px;
    padding-right: 30px; */
  }

  .container.right {
    left: 0%;
  }

  .container.left::after, 
  .container.right::after {
    left: 82px;
  }

  .container.left::before,
  .container.right::before {
    left: 100px;
    border-color: transparent #006E51 transparent transparent;
  }

  .container.left .date,
  .container.right .date {
    right: auto;
    left: 15px;
  }

  .container.left .icon,
  .container.right .icon {
    right: auto;
    left: 146px;
  }

  .container.left .content,
  .container.right .content {
    padding: 30px 30px 30px 90px;
    border-radius: 500px 0 0 500px;
  }
}
    .main-footer .widgets-section {
        position: relative;
        padding: 100px 0 20px;
         margin-top: 0px!important; 
    }

.page-title{
  padding: 180px 0 180px!important;
}

.about-section .image-column .title-box {
    top: -75px;
    left: 345px;
    display: none;
}




</style>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/BANNER-ABOUT-US.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>About Us</h1>
                    <span class="title">Astera Shaping the Future</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row no-gutters">

                <?php
                      $sqlqry= mysqli_query($con,"select * from  about where id=1 ");
                      $tota=mysqli_fetch_assoc($sqlqry);
                ?>


                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>ABOUT <br> US</h2>
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight youngphilip"><img src="image/youngphillip-cropped.png" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="imageabout/<?php echo $tota['image'];?>" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2><?php echo $tota['title'];?></h2>
                            </div>
                            <div class="text"><?php echo $tota['content'];?></div>
<!--                            <div class="link-box"><a href="about.php" class="theme-btn btn-style-one">About Us</a></div>-->
                          <div class="row">
                            <div class="col-md-4 col mt-md-2 mt-2" style="padding-top: 5px;">
                              <img src="image/Logo IndoQuartz.png" alt="indoquartz" class="img-fluid indo-logo">
                            </div>
                            <div class="col-md-4 mt-4 md-mt-2 col" style="position: relative; top: -12px;">
                                <img src="image/Logo IndoWood.png" alt="indocabinet" class="img-fluid indo-logo">
                            </div>
                            <div class="col-md-4 mt-md-2 col-indowood">
                              <img src="image/Logo IndoCabinets.png"alt="indowood" class="img-fluid indowood">
                            </div>
                          </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features alternate"  style="background-image: url(images/background/3.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="7">0</span></div>
                                <h4 class="counter-title">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="89">0</span></div>
                                <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="360">0</span>K</div>
                                <h4 class="counter-title">Exports <br> container / year</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="3">0</span></div>
                                <h4 class="counter-title">Smart Brand<br>established</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                <h3><a href="javascript:void(0);">Perfect Design</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="javascript:void(0);">Read More</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                <h3><a href="javascript:void(0);">Carefully Planned</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="javascript:void(0);">Read More</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                <h3><a href="javascript:void(0);">Smartly Execute</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="javascript:void(0);">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="milestone-astera">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="images/background/Milestone_astera.jpg" alt="milestone astera" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


    <!--End Fun Fact Section -->

    <!-- Testimonial Section Two-->
   
    <!--End Team Section -->

    <!-- Offer Section -->
    
    <!--End Offer Section -->

    <!-- Video Section -->
   
    <!--End Video Section -->
    <div>&nbsp;</div>

    <?php
        include "footer.php";
    ?>