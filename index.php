
<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home</title>
<?php
    include "header.php";
?>

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

    .row{
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
}

.banner-carousel .slide-item {
    position: relative;
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
    padding: 125px 0 305px 0px;
    /* padding: 110px 0 305px 0px; */
    overflow: hidden;
}

.text p {
    font-size: 14px;
}

</style>
    <!--End Main Header -->
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">


            <?php
                $counter = 1;
                $sqlbanner= mysqli_query($con,"select * from  banner order by id ");
               while( $banner=mysqli_fetch_assoc($sqlbanner))
            {
            ?>


            <div class="slide-item item<?php if($counter <=1){ echo " active ";} ?>" style="background-image: url(bannerimage/<?php echo $banner['image'];?>);">
                <div class="auto-container">
                    <div class="content-box">
                        <!-- <h2><?php echo $banner['banner_title'];?></h2>
                        <div class="text"><?php echo $banner['content'];?></div> -->
                        <!-- <div class="link-box">
                            <a href="product.php" class="theme-btn btn-style-one">Learn More</a>
                        </div> -->
                    </div>
                </div>
                 <div class="bottom-box">
                    <div class="auto-container clearfix">
                        <ul class="contact-info">
                        
                        </ul>
                    </div>
                </div>
            </div>
                
        <?php $counter++; } ?>

        </div>
    </section>
    <!-- End Bnner Section -->

     

    <!-- About Section -->
    <section class="about-section" style="background-image: url(images/background/1.jpg);">

        <?php
            $sqlqry= mysqli_query($con,"select * from  aboutus where id=1 ");
            $tota=mysqli_fetch_assoc($sqlqry);
        ?>

        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <!-- <h2>ABOUT <br> US</h2> -->
                        </div>
                        <!-- image wow fadeInRight -->
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src="images/PabrikIndoquartz.jpg" alt="indoquartz"></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="aboutimage/<?php echo $tota['image'];?>" alt=""></figure>
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
                            <div class="text"><?php echo  $tota['content']; ?></div>
                            <div class="link-box"><a href="about.php" class="theme-btn btn-style-one">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients-section">
        <!-- <div class="inner-container">
            <div class="sponsors-outer">

                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0);"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul> 

            </div>
        </div> -->
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="upper-box">
            <div class="auto-container">    
                <div class="sec-title text-center light">
                    <span class="float-text">Specialization</span>
                    <h2>Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <?php
                        $sql= mysqli_query($con,"select * from our_specialization");
                        while($total=mysqli_fetch_assoc($sql))

                        {
                       
                    ?>
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="javascript:void(0);"><img src="our_specialization/<?php echo $total['image'];?>" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <!-- <h3><a href="javascript:void(0);">Architectural Design</a></h3> -->
                                <div class="text">
                                        <?php echo $total['content'];?>
                                </div>
                                <div class="link-box">
                                    <a href="<?php echo ($total['link']) ?>" target="_blank"><?php echo $total['link'];?><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Project</span>
                <h2>Our Project</h2>
            </div>
        </div>
        
        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                   <?php
                        $sql= mysqli_query($con,"select * from our_project");
                        while($project=mysqli_fetch_assoc($sql))

                        {
                       
                    ?>
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="our_project/<?php echo $project['image']?>" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="javascript:void(0);"><?= $project['name'] ?><br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/<?php echo $project['image']?>"class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="<?= $project['link'] ?>" target="_blank"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag"><?= $project['name'] ?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!--End Project Section -->

<br>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>News & Articles</h2>
            </div>
            <div class="row">
                <?php
                  $sql= mysqli_query($con,"select * from  blog ");
                  while($total=mysqli_fetch_assoc($sql))
                  {
               ?>
                <!-- News Block -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="artical.php">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="blogimage/<?php echo $total['image'];?>" alt=""></figure>
                                <div class="overlay-box"><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"></a></div>
                            </div>
                            <div class="caption-box">
                                <a href="artical.php">
                                    <p><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"><?php echo $total['name'];?></a></p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                    <?php } ?>
            </div>
        </div>
    </section>
    <div>&nbsp;</div>
    <!--End News Section -->

    <!--Clients Section-->
    
    <!--End Clients Section-->


    <!-- Main Footer -->

   <?php
    include "footer.php";
   ?>