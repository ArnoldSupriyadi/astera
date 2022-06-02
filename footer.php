<?php
include "connection.php";
?>

<style>
    .main-footer:before {
        background: #00000085!important;
    }
    .scroll-to-top{
  bottom: 20px;
  right:20px;
  width:50px;
  height:50px!important;   
}
</style>
 <footer class="main-footer" style="background-image: url(images/background/5.jpg);">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <?php
                                    $sql= mysqli_query($con,"select * from  footer");
                                    while($footer=mysqli_fetch_assoc($sql))
                                    {
                                ?>
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index.php">
                                                <img src="footer/<?= $footer['image'];?>" style="width: 48%;" alt="">
                                                <!-- <h2 style="font-size: 36px;">LOGO</h2> -->
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text"><?= $footer['content'];?></div>
                                    </div>
                                </div>
                                 <?php } ?>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                     <!--Footer Column-->
                                      <?php
                                            $sql= mysqli_query($con,"select * from  blog order by id DESC LIMIT 3");
                                            while($total=mysqli_fetch_assoc($sql))
                                            {
                                        ?>
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"><img src="blogimage/<?php echo $total['image'];?>" alt=""></a></div>
                                            <p><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"><?php echo $total['name'];?></a></p>
                                        </div>
                                   
                                    </div>
                                     <?php } ?>
                                    
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <!-- <li><a href="javascript:void(0);">Services</a></li> -->
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="product.php">Products</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                             <?php
                                                $sqlbanner= mysqli_query($con,"select * from  banner order by id DESC LIMIT 3");
                                                while( $banner=mysqli_fetch_assoc($sqlbanner))
                                                {
                                            ?>
                                            <figure class="image">
                                                <a href="bannerimage/<?php echo $banner['image'];?>" class="lightbox-image" title="Image Title Here"><img src="bannerimage/<?php echo $banner['image'];?>" alt=""></a>
                                                </figure>
                                            <?php } ?>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <!-- <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li> -->
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                            <!-- <li><a href="javascript:void(0);"><i class="fa fa-whatsapp"></i></a></li> -->
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p> &copy; Copyright Astera </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <!-- End Main Footer -->


<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <!-- <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div> -->
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="javascript:void(0);" class="purchase-btn">Purchase now $17</a>
</div><!-- End Color Switcher -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/mixitup.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script> 
</body>


</html>