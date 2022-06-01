

<?php  require("../connection.php")  ?>


<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
<!--preloader-->
<style>.btn {

        padding: 5px 0px !important;

    }</style>
<!-- Site wrapper -->
<div class="wrapper">
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
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Lobipanel css -->
        <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css" />
        <!-- Pace css -->
        <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Pe-icon -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
        <!-- Themify icons -->
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />
        <!-- End Global Mandatory Style
           =====================================================================-->
        <!--summernote libraries-->

        <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

        <!--summernote libraries-->

        <!-- Emojionearea -->
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css" />
        <!-- End page Label Plugins
           =====================================================================-->
        <!-- Start Theme Layout Style
           =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
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
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
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
                            <ul class="dropdown-menu">
                                <li><a href="signout.php">Signout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
 <?php require("sidebar.php"); ?>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->    <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>



        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="height: 66px;">
                <div class="header-icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="header-title">
                    <h1>Show About us Details</h1>
                    <small>About us</small>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="btn-group" id="buttonexport">
                                    <a href="#">
                                        <h4>Show About us Details</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                <div class="table-responsive">
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr class="info">

                                            <th style="width:25%;text-align: center"> Image1</th>
                                            <th style="width:25%;text-align: center"> Image2</th>
                                            <th style="width:25%;text-align: center"> Image3</th>
                                            <th style="width:25%;text-align: center"> Image4</th>


                                          <!--  <th style="width:15%;text-align: center"> title</th>-->



                                            <th style="width:40%;text-align: center">About</th>

                                            <th style="width:10%;text-align: center">Edit</th>





                                        </tr>
                                        </thead>
                                        <tbody>






                                        <?php
                                        $sql= mysqli_query($con,"select * from about");

                                        while($total=mysqli_fetch_assoc($sql))
                                        {

                                            ?>
                                            <tr>


                                                <td style="text-align: center"><img src="../about_image/<?php echo $total['image1'];?>"  style="width: 150px;height: 120px;"> </td>

                                                <td style="text-align: center"><img src="../about_image/<?php echo $total['image2'];?>"  style="width: 150px;height: 120px;"> </td>

                                                <td style="text-align: center"><img src="../about_image/<?php echo $total['image3'];?>"  style="width: 150px;height: 120px;"> </td>

                                                <td style="text-align: center"><img src="../about_image/<?php echo $total['image4'];?>"  style="width: 150px;height: 120px;"> </td>






<!--
                                                <td style="text-align: center"><?php /*echo $total['title'];*/?></td>-->

                                                <td ><?php echo substr($total['about_details'],5);?></td>



                                                <td>
                                                    <a href="update_about.php?crtid=<?php echo $total['aid'];?>"><button type="button" class="btn btn-add btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: #00bdfd; border-color:#00bdfd "><i class="fa fa-pencil"></i></button></a>
                                                    <div>&nbsp;</div>
                                                    <!-- <a href="delete_butcher.php?crtid=<?php /*echo $total['bid'];*/?>&img_id=<?php /*echo $total['butcher_image'];*/?>"><button type="button" class="btn btn-delete btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: red; border-color:red"><i class="fa fa-trash-o"></i></button></a>
              -->                                  </td>

                                            </tr>

                                        <?php } ?>







                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">

            $('.R1').change(function () {


                var v1=$(this).closest("tr").find('.Q1').val();
                var p1=$(this).attr('id');

                //alert(v1);
                // alert(p1);

                $.ajax({
                    type:'POST',
                    url:'status1.php',

                    data:{status:v1,id:p1},
                    success:function(data){
                        //alert("success");
                        //window.location.href="show_products.php"
                    },
                    error:function(res)
                    {
                        alert("error");
                    }

                });
            });
        </script>


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="footer-bottom">
                <p class="text-center">Copyright © 2019. All Rights Reserved. Design And Developed By <a target="_blank" href="http://www.iwebnext.com" style="color: deepskyblue"><strong>IWebNext</strong></a>.</p>

            </div>
        </footer>


        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
        <!-- FastClick -->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- CRMadmin frame -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins
           =====================================================================-->
        <!-- Start Page Lavel Plugins
           =====================================================================-->
        <!-- ChartJs JavaScript -->
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins
           =====================================================================-->
        <!-- Start Theme label Script
           =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
        <script src="assets/plugins/datatables/dataTables.min.js"></script>
        <!-- End Theme label Script</div>
        <!-- ./wrapper -->
        <!-- Start Core Plugins
           =====================================================================-->
        <!-- jQuery -->

</body>

</html>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTableExample1').DataTable( {
            "pagingType": "full_numbers"
        } );
    } );
</script>
