

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM Admin Panel</title>
    <!-- Favicon and touch icons -->

    <!-- Start Global Mandatory Style
       =====================================================================-->
    <!-- jquery-ui css -->
    <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
    <!-- End Global Mandatory Style
       =====================================================================-->
    <!--summernote libraries-->

    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

    <!--summernote libraries-->

    <!-- Emojionearea -->
    <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
    <!-- Monthly css -->
    <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
    <!-- End page Label Plugins 
       =====================================================================-->
    <!-- Start Theme Layout Style
       =====================================================================-->
    <!-- Theme style -->
    <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
       =====================================================================-->
</head>

<div class="wrapper">
    <header class="main-header">
        <a href="dashboard.php" class="logo">
            <!-- Logo -->
            <span class="logo-mini">
               <img src="logo/admin-button-icon-hi.png" alt="">
               </span>
            <span class="logo-lg">
               <img src="logo/admin-button-icon-hi.png" alt="">
               </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="pe-7s-angle-left-circle"></span>
            </a>
            <!-- searchbar-->
            <!--<a href="#search"><span class="pe-7s-search"></span></a>-->
            <!--<div id="search">
              <button type="button" class="close">×</button>
              <form>
                <input type="search" value="" placeholder="Search.." />
                <button type="submit" class="btn btn-add">Search...</button>
             </form>
          </div>-->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- Help -->

                    <!-- user -->
                    <li class="dropdown dropdown-user">
                        <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/dist/img/avatar5.png" class="img-circle" width="50" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >


                            <li><a href="index.php">
                                    <i class="fa fa-sign-out"></i><a href="signout.php">Signout</a></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="dashboard.php"><i class="fa fa-tachometer"></i>
                        <span>ASTERA</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="admin.php">
                        <i class="fa fa-users"></i><span>Admin</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                </li>

               <li class="treeview">
                    <a href="#">
                        <i class="fa fa-home"></i><span>Home</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>

                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i><span>Banner</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_home_banner.php">Add Banner</a></li>
                                <li><a href="show_home_banner.php">Show Banner</a></li>
                                <li><a href="add_our_specialization.php">Our Specialization</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="aboutus.php">
                                <i class="fa fa-users"></i><span>Astera as Company</span>
                                <span class="pull-right-container">
                            </span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="aboutus.php">
                                <li><a href="add_our_specialization.php">Our Specialization</a></li>
                                <span class="pull-right-container">
                            </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="aboutus.php">
                                <li><a href="add_our_project.php">Our Projects</a></li>
                                <span class="pull-right-container">
                            </span>
                            </a>
                        </li>
                        
                    </ul>

                </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i><span>About Us</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="edit_cover_about.php">Edit Cover About</a></li>
                                <li><a href="update_aboutus.php">Update Blog</a></li>
                                <li><a href="add_milestone.php">Update Milestone</a></li>
                                <li><a href="add_experience.php">Experience</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-rss"></i><span>Blog</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="edit_cover_blog.php">Edit Cover Blog</a></li>
                                <li><a href="add_blog.php">Add Blog</a></li>
                                <li><a href="show_blog.php">Show Blog</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-product-hunt"></i><span>Product</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="edit_cover_product.php">Edit Cover Product</a></li>
                                <li><a href="firstslider.php">First Slider Product</a></li>
                                <li><a href="show_firstproduct.php"> Show First Slider</a></li>
                                <li><a href="secondslider.php">Second Slider Product</a></li>
                                <li><a href="show_secondproduct.php"> Show Second Slider</a></li>
                                <li><a href="thirdslider.php">Third Slider Product</a></li>
                                <li><a href="show_thirdproduct.php"> Show Third Slider</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-address-card"></i><span>Contact</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="edit_cover_contact.php">Edit Cover Contact</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="show_contact_form.php">Show Contact Form</a></li>
                            </ul>
                        </li> 

                        <li class="treeview">
                            <a href="add_footer.php">
                                <i class="fa fa-rocket"></i><span>Footer</span>
                            </a>
                        </li> 

            </ul>
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
         
         