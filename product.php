<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Products</title>
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
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

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
    
body {
    background: white;
    font-family: "Open Sans", sans-serif;
}
h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 60px;
}

.banner-carousel h2 {
    text-align: left;
}
.carousel {
    margin: 50px auto;
    padding: 0 0px;
}
.carousel .item {
    color: #747d89;
    /* min-height: 325px; */
    text-align: center;
    overflow: hidden;
}
.carousel .thumb-wrapper {
    background: #fff;
    border-radius: 3px;
    text-align: center;
    position: relative;
    box-shadow: 0 2px 3px rgb(0 0 0 / 20%);
    width: 100%;
    margin-left: 13px;
    height: 208px;
}
.carousel .item .img-box {
    height: 120px;
    margin-bottom: 8px;
    width: 100%;
    position: relative;
}
.carousel .item img {
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    margin-top: 30px;
}

.carousel .item h4 {
    font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
    margin-bottom: 5px;
}
.carousel .thumb-content .btn {
    color: #7ac400;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #7ac400;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
    color: #fff;
    background: #7ac400;
    box-shadow: none;
}
.carousel .thumb-content .btn i {
    font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .item-price {
    font-size: 13px;
    padding: 2px 0;
}
.carousel .item-price strike {
    opacity: 0.7;
    margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
    height: 40px;
    width: 40px;
    background: white;
    margin: auto 0;
    border-radius: 50%;
    opacity: 0.8;
    top: -58px;
    padding: 10px 11px 10px 8px;
    box-shadow: 0px 4px 11px 0px #9d9292;
}


.carousel-control-prev:hover, .carousel-control-next:hover {
    
    opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
    font-size: 25px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -12px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: black;
    text-shadow: none;
    font-weight: bold;
}
.carousel-control-prev i {
    margin-left: -2px;
}
.carousel-control-next i {
    margin-right: -4px;
}       
.carousel-indicators {
    bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 50%;
    border: none;
}
.carousel-indicators li {   
    background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {    
    background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
    position: absolute;
    right: 10px;
    top: 4px;
    z-index: 99;
    cursor: pointer;
    font-size: 16px;
    color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
    color: #ff6161;
}
.star-rating li {
    padding: 0;
}
.star-rating i {
    font-size: 14px;
    color: #ffc000;
}

.title{
    margin-bottom: 82px;
    padding-top: 80px;
    font-weight: bold;
    color: black;
}

.a{
    margin-top: 34px;
    margin-left: 0px;
    color: black;
}
.c{
    margin-top: 10px;
    margin-left: 0px;
    color: green;
    margin-bottom: 50px;
}
.b{
    margin-top: 12px;
    margin-left: 0px;
    color: black;
}

.bc{
    margin-top: 12px;
    margin-left: 0px;
    color: black;
}

.bb{
    margin-top: 12px;
    margin-left: 0px;
    color: black;
}

.btn{
    background-color: rgb(1, 120, 101);
    border: 2px solid rgb(1, 120, 101);
    color: rgb(255, 255, 255);
    margin-top: 26px;
    width: 130px;
    border-radius: 4px;
}

.page-title {
    position: relative;
    padding: 180px 0 100px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
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
    max-width: 139px;
}

button.products_button_1 {
    min-width: 176px;
    padding-left: 16px;
    padding-right: 16px;
    font-weight: 700;
    font-size: 16px;
    text-align: center;
    text-transform: capitalize;
    box-sizing: border-box;
    padding-top: 6px;
    padding-bottom: 6px;
    background: none;
    color: white;
    border: 2px solid white;
    border-radius: 5px;
    margin-top: 55px;
}

button.products_button_1:hover {
    background-color: white;
    color: black;
}

.owl-nav {
    display: none;
}

.row{
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
}

.products_div_2 {
    text-align: center;
    margin-top: 95px;
}
.content-box {
    position: relative;
    top: 390px;
}

.content-box p {
    font-size: 24px;
    color: #fff;
}
.content-box h2 {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    border-radius: 1px;
    background: #7ac400;
    left: 0;
    bottom: 120px;
    font-size: 40px;
    font-weight: 700;
    color: #fff;
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

                        <img src="image/ASTERA LOGO_INDO_2022.png" alt="" style="width: 100%; height: 54px!important;" title="">
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
    <section class="banner-section">
        <div class="row">
            <?php
                $sqlqry= mysqli_query($con,"select * from  product_banner_image where id=1 ");
                $tota=mysqli_fetch_assoc($sqlqry);
                {
            ?>
                <div class="col-md-12 slide-item" style="background-image: url(cover_banner/<?php echo $tota['banner_image'];?>); background-size: cover; height: 520px;">
                    <div class="auto-container">
                    <div class="content-box">
                        <h2>Products</h2>
                        <p>The buildings speak for themselves</p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <!-- End Bnner Section -->

<style>
    @media only screen and (max-width: 600px) {
        img.products_img_1 {
            display: none;
        }

        .carousel {
            margin: 0px;
            padding: 0 0px;
            margin-left: 0px!important;
        }

        .products_div_2 {
            display: none;
        }

        .products_div_002 {
            display: none;
        }

        #product_main {
            height: 270px!important;
        }

        .carousel .thumb-wrapper {
            margin-left: 0px;
        }

        .title {
            margin-bottom: 20px;
            padding-top: 20px;
        }

        .a {
            margin-top: 0px;
            font-size: 16px;
        }

        .bb {
            display: none;
        }

        .bc {
            display: none;
        }

        .b {
            display: none;
        }

        .c {
            color: green;
            margin-bottom: 15px;
            font-size: 12px;
            line-height: 30px;
        }

        img.icon {
            height: 90px!important;
        }

    }

    .carousel {
        margin-left: 0px;
    }
    #product_main{
        margin-top: 10px; 
        height: 361px;
    }
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url(image/testbgupdate3.jpg); margin-top: 10px; padding: 0px;">
            <div class="products_div_1">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="products_div_2">
                            <img src="image/Logo IndoQuartz.png" class="products_img_1">
                            <a href="http://www.indoquartz.co.id/" class="btn btn-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        
                        <div class="products_div_3">
                            
                            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
                                
                                <div class="carousel-inner">
                                
                                    <div class="item carousel-item active">
                                        <div class="row" style="margin-top: 30px;">
                                        
                                            <div class="owl-carousel owl-theme">
                                                <?php
                                                    $sql= mysqli_query($con,"select * from  fslider ");
                                                    while($total=mysqli_fetch_assoc($sql))
                                                    {
                                                ?>

                                                <div class="col-md-12" style="padding: 10px 5px;">
                                                    <a href="product_detailsfirst.php?crtid=<?php echo $total['id']; ?>">
                                                        <div class="thumb-wrapper" >
                                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                            <div class="img-box">
                                                                <img src="productimage/<?php echo $total['image'];?>" class="img-fluid" alt="">                      
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4><?php echo $total['name'];?></h4>
                                                                <p class="item-price"><strike>Rp<?php echo $total['price'];?></strike> <b>Rp<?php echo $total['sale_price'];?></b></p>
                                                            </div>                  
                                                        </div>
                                                    </a>
                                                </div>
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
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url(image/bgindocabinet.jpg); margin-top: 10px;padding: 0px;">
			<div class="products_div_1"> 
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="products_div_2">
                            <img src="image/Logo IndoCabinets.png" class="products_img_1">
                            <a href="https://www.indocabinets.com/"class="products_button_1 btn btn-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="products_div_3">
                            <div id="myCarousel3" class="carousel slide" data-ride="carousel"  data-interval="0">
                                    <div class="carousel-inner">
                                    <div class="item carousel-item active">
                                        <div class="row" style="margin-top: 30px;">
                                        
                                            <div class="owl-carousel owl-theme">
                                                <?php
                                                    $sql= mysqli_query($con,"select * from  sslider ");
                                                    while($total=mysqli_fetch_assoc($sql))
                                                    {
                                                ?>

                                                <div class="col-md-12" style="padding: 10px 5px;">
                                                    <a href="product_detailssecond.php?crtid=<?php echo $total['id']; ?>">
                                                        <div class="thumb-wrapper" >
                                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                            <div class="img-box">
                                                                <img src="productimage/<?php echo $total['image'];?>" class="img-fluid" alt="">                      
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h4><?php echo $total['name'];?></h4>
                                                                <p class="item-price"><strike>Rp<?php echo $total['price'];?></strike> <b>Rp<?php echo $total['sale_price'];?></b></p>
                                                            </div>                  
                                                        </div>
                                                    </a>
                                                </div>
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
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url(image/bgindowood.jpg); margin-top: 10px;padding: 0px;" >
			<div class="products_div_1">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="products_div_2">
                            <img src="image/Logo IndoWood.png" class="products_img_1">
                            <a href="http://www.indowood.net/" class="products_button_1 btn btn-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="products_div_3">
                            <div id="myCarousel4" class="carousel slide" data-ride="carousel"  data-interval="0">
                                <div class="carousel-inner">

                                    <div class="item carousel-item active">
                                            <div class="row" style="margin-top: 30px;">
                                            
                                                <div class="owl-carousel owl-theme">
                                                    <?php
                                                        $sql= mysqli_query($con,"select * from  tslider ");
                                                        while($total=mysqli_fetch_assoc($sql))
                                                        {
                                                    ?>

                                                    <div class="col-md-12" style="padding: 10px 5px;">
                                                        <a href="product_detailsthird.php?crtid=<?php echo $total['id']; ?>">
                                                            <div class="thumb-wrapper" >
                                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                                <div class="img-box">
                                                                    <img src="productimage/<?php echo $total['image'];?>" class="img-fluid" alt="">                      
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h4><?php echo $total['name'];?></h4>
                                                                    <p class="item-price"><strike>Rp<?php echo $total['price'];?></strike> <b>Rp<?php echo $total['sale_price'];?></b></p>
                                                                </div>                  
                                                            </div>
                                                        </a>
                                                    </div>
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
		</div>
	</div>
</div>


		<div class="container-fluid" style="background-color: #eee; margin-bottom: 0px;">
			<center><h3 class="title">Why Shop at Here ?</h3></center>
			<div class="row" style="background-color: #eee;">
				<div class="col-lg-1 col-md-1 col-sm-1"></div>
				<div class="col-lg-10">
					<div class="row">
                            <?php
                                $sql= mysqli_query($con,"select * from  superiority ");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                <div class="text-center">
                                    <div class="img-box">
                                        <img class="icon" src="superiority/<?= $row['image']  ?>" style="width: 128px; height: 128px;">
                                    </div>
                                    <div class="img-content">
                                        <h3 class="a"><?= $row['title'] ?></h3>
                                        <p class="b"><?= $row['sub_title'] ?></p>
                                        <a href="<?= $row['link'] ?>" class="c">Learn More</a>
                                    </div>
                                </div>
    								
							</div>
                               <?php } ?>
					</div>
				</div>	
				<div class="col-lg-1 col-md-1 col-sm-1"></div>	
			</div>
		</div>
			<!-- <div class="container-fluid" style="background-color: skyblue; ">
				<div class="row">
					<div class="col-lg-6" style=" margin-top: 30px;">
						<img class="com" src="image/ban.png">
					</div>
					<div class="col-lg-6" style="    margin-left: -6px;margin-top: 107px;">
						<h3 style="color: black; font-weight: 800;">Ask, find out and shop through virtual<br> Assistant</h3>
						<p style="margin-top: 30px; color: #000;">Contact our furniture experts via the live chat or Whatsapp feature for easier and<br>more relible shopping.</p>
						<button style="margin-bottom: 10px;"type="button" class="btn"><i class="fab fa-whatsapp"></i> VIA WHATSAPP</button>
					</div>
				</div>
			</div> -->
<!--

<div class="clint_slider_div_2">
-->
<!--
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/1.1.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/1.png" class="clint_slider_img_1">
                        </div>
                    </div>
-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">-->
<!--
                        <div class="clint_slider_div_1">
                            <img src="images/clients/2.2.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/2.png" class="clint_slider_img_1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/3.3.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/3.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
-->
<!--
                            <img src="images/clients/4.4.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/4.png" class="clint_slider_img_1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/5.5.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/4.5.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/5.png" class="clint_slider_img_1">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="clint_slider_div_1">
                            <img src="images/clients/1.1.png" class="clint_slider_img_1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
-->


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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>
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