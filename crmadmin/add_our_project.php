<?php include_once("../connection.php"); ?>

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
                <h1>Show Our Project</h1>
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
                                    <h4>Show Our Project</h4>
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


                                        <th style="width:30%;text-align: center"> Image</th>

                                        <th style="width:30%;text-align: center"> Name</th>
                                        
                                        <th style="width:20%;text-align: center"> Category</th>
                                        <!-- <th style="width:15%;text-align: center"> Meta Title</th>

                                        <th style="width:15%;text-align: center"> Meta Description</th> -->


                                        <th style="width:10%;text-align: center">Edit</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $sql= mysqli_query($con,"select * from our_project");
                                      while($total=mysqli_fetch_assoc($sql))

                                      {
                                     ?>
                                     
                                        <tr>

                                            <td style="text-align: center"><img src="../our_project/<?php echo $total['image'];?>"  style="width: 200px;height: 200px;"> </td>


                                            <td style="text-align: center"><?php echo $total['name'];?></td>
                                            <?php $desc = $total['name']; ?>

                                            <td style="text-align: center"><a href="<?php echo basename($total['category']) ;?>"><?php echo basename($total['category']);?></td>

                                            <td>
                                                <a href="edit_our_project.php?crtid=<?php echo $total['id'];?>"><button type="button" class="btn btn-add btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: #00bdfd; border-color:#00bdfd "><i class="fa fa-pencil"></i>Edit</button></a>
                                                <div>&nbsp;</div>
                                                <!-- <a href="delete_blog.php?crtid=<?php echo $total['id'];?>&img_id=<?php echo $total['image'];?>"><button type="button" class="btn btn-delete btn-sm" style="width: 50px;height: 25px; color: whitesmoke;background-color: red; border-color:red"><i class="fa fa-trash-o"></i>Delete</button></a> -->
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

        </section>
        <!-- /.content -->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



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
