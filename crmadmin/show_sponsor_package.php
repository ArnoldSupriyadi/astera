<?php
$today = date("F Y");

$date=date("Y-m-d");?>


<?php
//session_start();
include_once("../connection.php");

if(isset($_SESSION['adminuser']) && $_SESSION['password'] != "")
{
//Task to do
}
else{
    echo '<script>window.location.assign("index.php");</script>';

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
                <h1>Show Sponsor Package</h1>
                <small>Show Sponsor Package List</small>
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
                                    <h4>Show Sponsor Package Details</h4>
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
                                        <th style="width:40%;text-align: center">Sponsor Package Image</th>

                                        <th style="width:40%;text-align: center"> Sponsor Package Name</th>

                                        <th style="width:10%;text-align: center">Edit|Delete</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql= mysqli_query($con,"select * from sponsor_package");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>
                                            <td style="text-align: center"><img src="../imagesforsponsor/<?php echo $total['sponsor_package_image'];?>"  style="width: 250px;height: 130px;"> </td>

                                            <td style="text-align: center"><?php echo $total['sponsor_package_name'];?></td>


                                            <td>
                                                <a href="edit_sponsor_package.php?crtid=<?php echo $total['id'];?>"><button type="button" class="btn btn-add btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: #00bdfd; border-color:#00bdfd "><i class="fa fa-pencil"></i>Edit</button></a>
                                                <div>&nbsp;</div>
                                                <a href="deletesponsorpackage.php?crtid=<?php echo $total['id'];?>&img_id=<?php echo $total['sponsor_package_image'];?>"><button type="button" class="btn btn-delete btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: red; border-color:red"><i class="fa fa-trash-o"></i>Delete</button></a>
                                            </td>

                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customer Modal1 -->
            <!-- <style>
                 .btn {
                     background-color: DodgerBlue;
                     border: none;
                     color: white;
                     padding: 12px 30px;
                     cursor: pointer;
                     font-size: 20px;
                 }

                 /* Darker background on mouse-over */
                 .btn:hover {
                     background-color: RoyalBlue;
                 }
             </style>
            <a href="ExportExcel1"> <button class="btn"><i class="fa fa-download"></i> Export To Excel</button></a-->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
</div>
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
