<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <?php
        $cid=$_GET['crtid'];
        $sql= mysqli_query($con,"select * from  fslider where id=$cid");
        $product=mysqli_fetch_assoc($sql);
    ?>
<title><?php echo $product['name'];?></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> -->
<!-- <link rel="icon" href="images/favicon.png" type="image/x-icon"> -->
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

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
    
.page-title h1 {
    margin-bottom: -60px;
}

.clint_slider_div_1 {
    text-align: center;
}

img.clint_slider_img_1 {
    width: 100px;
    height: 50px;
}

.clint_slider_div_2 {
    padding: 50px 0px;
}

img.gallery_img_1 {
    width: 100%;
    height: 200px;
}

.banner-carousel .slide-item {
    padding: 200px 0 100px;
}

p.product_banner_p_1.text-center {
    font-size: 21px;
    color: white;
    letter-spacing: .5px;
    font-weight: 800;
}

span.product_banner_span_2 {
    margin: 0px 10px 0px 10px;
    color: white;
}

.banner-carousel .owl-nav {
    position: absolute;
    right: 30%;
    bottom: 60px;
    z-index: 99;
    right: 45%;
}

img.products_img_1 {
    margin-top: 45px;
    margin-left: 63px;
}

button.products_button_1 {
    margin: auto;
    width: 160px;
    height: 40px;
    border: 2px solid white;
    background: transparent;
    font-size: 13px;
    letter-spacing: 1px;
    color: white;
    font-weight: 700;
    margin-top: 50px;
    margin-left: 65px;
}

.owl-nav {
    display: none;
}

.row{
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
}

img{
    width: 100%;
}

.product_details_div_2 {
    background-color: #f3efe3;
    height: 390px;
    width: 100%;
}

.product_details_div_4 {
    background-color: #c3c5c0;
    height: 390px;
    width: 100%;
}
.product_details_div_5 {
    background-color: #d7cbbb;
    height: 390px;
    width: 100%;
}
.product_details_div_6 {
    background-color: #c2c3bb;
    height: 390px;
    width: 100%;
}

img.product_details_img_1 {
    width: 100%;
    height: 390px;
}

.carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.carousel-indicators {
    top: -45px;
}

.product_details_div_9 {
    padding: 20px;
    border: 1px solid #b1b1b1;
}

.product_details_div_7{
    margin: 50px 0px;
}

p.product_details_p_1 {
    margin-top: 15px;
    font-size: 14px;
    letter-spacing: .5px;
}

p.product_details_p_2 {
    margin-top: 0px;
    font-size: 18px;
    color: black;
    letter-spacing: .5px;
}

p.product_details_p_3 {
    margin-top: 0px;
    font-size: 14px;
    letter-spacing: .5px;
}

</style>
<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>
</head>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-three">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="logo-box">

                    <div class="logo"><a href="index.php">

                        <img src="image/ASTERA LOGO_INDO_2022.png" alt="" style="width: 100%; height: 40px!important;" title="">
                        <!-- <h2>LOGO</h2> -->

                    </a></div>

                </div>

                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
                                    <!-- <ul>
                                        <li class="dropdown"><a href="javascript:void(0);">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                                <li><a href="index-4.html">Header Style Three</a></li>
                                                <li><a href="index-5.html">Header Style Four</a></li>
                                                <li><a href="index-6.html">Header Style Five</a></li>
                                                <li><a href="index-7.html">Header Style Six</a></li>
                                                <li><a href="about.html">Header Style Seven</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-2.html">Home page 01</a></li>
                                        <li><a href="index-3.html">Home page 02</a></li>
                                        <li><a href="index-4.html">Home page 03</a></li>
                                        <li><a href="index-5.html">Home page 04</a></li>
                                        <li><a href="index-6.html">Home page 05</a></li>
                                        <li><a href="index-7.html">Home page 06</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="about.php">About</a>
                                    <!-- <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul> -->
                                </li>
                               <!--  <li class="dropdown"><a href="javascript:void(0);">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="service-detail.html">Commercial Design</a></li>
                                        <li><a href="service-detail.html">Landescape Design</a></li>
                                        <li><a href="service-detail.html">Interior Design</a></li>
                                        <li><a href="service-detail.html">Complete Interior</a></li>
                                        <li><a href="service-detail.html">House Interior</a></li>
                                        <li><a href="service-detail.html">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0);">Projects</a>
                                    <ul>
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="project-detail.html">Project Detail</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="blog.php">Blogs</a>
                                    <!-- <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                        <li><a href="blog-detail-2.html">Blog Detail 02</a></li>
                                        <li><a href="error-page.html">Error Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="product.php">Products</a>
                                    <!-- <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Product Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="login.html">Registration Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <!-- <li class="dropdown has-mega-menu"><a href="javascript:void(0);">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>About</h3>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Services</h3>
                                                <ul>
                                                    <li><a href="services.html">All Services</a></li>
                                                    <li><a href="service-detail.html">Commercial Design</a></li>
                                                    <li><a href="service-detail.html">Landescape Design</a></li>
                                                    <li><a href="service-detail.html">Complete Interior</a></li>
                                                    <li><a href="service-detail.html">Service Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Projects</h3>
                                                <ul>
                                                    <li><a href="projects.html">Projects</a></li>
                                                    <li><a href="projects.html">Commercial Projects</a></li>
                                                    <li><a href="projects.html">Landescape Projects</a></li>
                                                    <li><a href="project-detail.html">Project Detail</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="blog.html">Blog Grid</a></li>
                                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                                    <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                                    <li><a href="blog-detail-2.html">Blog Detail 01</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->                        
                    
                    <!-- Main Menu End-->
                    <!-- <div class="outer-box clearfix">
                        <button class="nav-toggler"><span class="fa fa-bars"></span></button>
                    </div> -->

                </div>
            </div>
        </div>

                <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title="">
                        <img src="image/ASTERA LOGO_INDO_2022.png" alt="" style="width: 100%; height: 50px;" title="">
                    </a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
                                   <!--  <ul>
                                        <li class="dropdown"><a href="javascript:void(0);">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                                <li><a href="index-4.html">Header Style Three</a></li>
                                                <li><a href="index-5.html">Header Style Four</a></li>
                                                <li><a href="index-6.html">Header Style Five</a></li>
                                                <li><a href="index-7.html">Header Style Six</a></li>
                                                <li><a href="about.html">Header Style Seven</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-2.html">Home page 01</a></li>
                                        <li><a href="index-3.html">Home page 02</a></li>
                                        <li><a href="index-4.html">Home page 03</a></li>
                                        <li><a href="index-5.html">Home page 04</a></li>
                                        <li><a href="index-6.html">Home page 05</a></li>
                                        <li><a href="index-7.html">Home page 06</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="about.php">About</a>
                                   <!--  <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown"><a href="javascript:void(0);">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="service-detail.html">Commercial Design</a></li>
                                        <li><a href="service-detail.html">Landescape Design</a></li>
                                        <li><a href="service-detail.html">Interior Design</a></li>
                                        <li><a href="service-detail.html">Complete Interior</a></li>
                                        <li><a href="service-detail.html">House Interior</a></li>
                                        <li><a href="service-detail.html">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0);">Projects</a>
                                    <ul>
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="project-detail.html">Project Detail</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="blog.php">Blogs</a>
                                    <!-- <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                        <li><a href="blog-detail-2.html">Blog Detail 02</a></li>
                                        <li><a href="error-page.html">Error Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="product.php">Products</a>
                                    <!-- <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Product Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="login.html">Registration Page</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <!-- <li class="dropdown has-mega-menu"><a href="javascript:void(0);">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>About</h3>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Services</h3>
                                                <ul>
                                                    <li><a href="services.html">All Services</a></li>
                                                    <li><a href="service-detail.html">Commercial Design</a></li>
                                                    <li><a href="service-detail.html">Landescape Design</a></li>
                                                    <li><a href="service-detail.html">Complete Interior</a></li>
                                                    <li><a href="service-detail.html">Service Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Projects</h3>
                                                <ul>
                                                    <li><a href="projects.html">Projects</a></li>
                                                    <li><a href="projects.html">Commercial Projects</a></li>
                                                    <li><a href="projects.html">Landescape Projects</a></li>
                                                    <li><a href="project-detail.html">Project Detail</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="blog.html">Blog Grid</a></li>
                                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                                    <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                                    <li><a href="blog-detail-2.html">Blog Detail 01</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>

    
    <!-- Bnner Section -->
     <?php
        $cid=$_GET['crtid'];
        $sql= mysqli_query($con,"select * from  sslider where id=$cid");
        $product=mysqli_fetch_assoc($sql);
    ?>
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url(productimage/<?php echo $product['banner_image'];?>);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2 class=""><?php echo $product['name'];?></h2>
                        <div class="text">Luxury meets necesity</div>
                        <p class="product_banner_p_1 ">
                            <span class="product_banner_span_1">
                                <a href="index.php">Home</a>
                            </span>
                            <span class="product_banner_span_2">
                                -
                            </span>
                            <span class="product_banner_span_3">
                                Products
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- product details -->

        <section>
            <div class="product_details_div_1">
                <div class="row" style="margin-top:10px; padding-left:10px; padding-right:10px">
                    <div class="col-lg-12 col-md-12 col-12" style="padding:0px"> 
                        <div class="product_details_div_2">
                            <img src="productimage/<?php echo $product['image_detail1'];?>" class="product_details_img_1">
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:10px; padding-left:10px; padding-right:10px">
                    <div class="col-lg-7 col-md-7 col-12" style="padding: 0px"> 
                        <div class="product_details_div_5">
                            <img src="productimage/<?php echo $product['image_detail2'];?>" class="product_details_img_1">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12" style="padding: 0px"> 
                        <div class="product_details_div_3">
                            <img src="productimage/<?php echo $product['image_detail3'];?>" class="product_details_img_1">
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:10px; padding-left:10px; padding-right:10px">
                    <div class="col-lg-5 col-md-5 col-12" style="padding: 0px"> 
                        <div class="product_details_div_3">
                            <img src="productimage/<?php echo $product['image_detail4'];?>" class="product_details_img_1">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12" style="padding: 0px"> 
                        <div class="product_details_div_6">
                            <img src="productimage/<?php echo $product['image_detail5'];?>" class="product_details_img_1">
                        </div>
                    </div>
                </div>
            </div>

        </section>

    <!-- /product details -->

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
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index.php">
                                                <img src="image/ASTERA_LOGO_FOOTER.jpg" style="width: 48%;" alt="">
                                                <!-- <h2 style="font-size: 36px;">LOGO</h2> -->
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Astera is the first manufacture of quartz slab in Indonesia. We produce the high quality of quartz slab and distribution around the globe. We regulary export to many country such as United State of America, Canada, and United Kingdom.</div>
                                    </div>
                                </div>
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

</div>

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
<!-----------------footer end----------->
</body>
</html> 