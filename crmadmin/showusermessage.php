<?php include_once("../connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini">
<!--preloader-->
<style>
    .btn {
        padding: 5px 0px !important;
    }
</style>
<!-- Site wrapper -->
<div class="wrapper">
    <?php include('header.php'); ?>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" />

    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>User Messages</h1>
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
                                    <h4>Show Message Details</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">



                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr class="info">


                                        <th style="width:15%;text-align: center">Date</th>

                                        <th style="width:15%;text-align: center">User Name</th>

                                        <th style="width:15%;text-align: center">User Email</th>

                                        <th style="width:25%;text-align: center">User Message</th>

                                        <th style="width:5%;text-align: center">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql= mysqli_query($con,"select * from contact");

                                    while($total=mysqli_fetch_assoc($sql))
                                    {

                                        ?>
                                        <tr>

                                            <td style="text-align: center">
                                                <?php echo $total['date'];?>
                                            </td>


                                            <td style="text-align: center">
                                                <?php echo $total['fname'];?> <?php echo $total['lname'];?>
                                            </td>

                                            <td style="text-align: center">
                                                <?php echo $total['email'];?>
                                            </td>

                                        

                                            <td style="text-align: center">
                                                <?php echo $total['comment'];?>
                                            </td>

                                            <td style="text-align: center">
                                                <a href="deletemessage.php?crtid=<?php echo $total['id'];?>"><button type="button" class="btn btn-add btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: red; border-color:red "><i class="fa fa-trash"></i>Delete</button></a>

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
        $('#dataTableExample1').DataTable({
            "pagingType": "full_numbers"
        });
    });
</script>