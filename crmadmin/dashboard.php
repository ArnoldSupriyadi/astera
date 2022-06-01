<?php include('../connection.php'); ?>


<?php
//session_start();
// include_once("../connection.php");

if(isset($_SESSION['user_name']) && $_SESSION['password'] != "")
{
//Task to do
}
else{
    echo '<script>window.location.assign("index.php");</script>';

}
?>




<body class="hold-transition sidebar-mini">
<!--preloader-->
<!--<div id="preloader">
   <div id="status"></div>
</div>-->
<!-- Site wrapper -->
<?php include('header.php'); ?>
<!-- /.wrapper -->
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>CRM Admin Dashboard</h1>
                <small>Very detailed & featured admin.</small>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">


            </div>

            <div class="row">


            </div>




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
</div>
<!-- Start Core Plugins
   =====================================================================-->


<script>
    function dash() {
        // single bar chart

        //monthly calender
        $('#m_calendar').monthly({
            mode: 'event',
            //jsonUrl: 'events.json',
            //dataType: 'json'
            xmlUrl: 'events.xml'
        });

        //bar chart
        var ctx = document.getElementById("barChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["<?php echo $month; ?>"],
                datasets: [
                    {
                        label: "Total Visitor",
                        data: [<?php echo $total_count; ?>],
                        borderColor: "rgba(0, 150, 136, 0.8)",
                        width: "1",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 150, 136, 0.8)"
                    },

                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //counter
        $('.count-number').counterUp({
            delay: 10,
            time: 5000
        });
    }
    dash();
</script>
</body>

</html>

