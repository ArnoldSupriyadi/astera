<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
$img_id=$_GET['img_id'];
// unlink("../bannerimage/".$img_id);
$sql=mysqli_query($con,"DELETE FROM business_promos_video WHERE id='$crid' ");

if($sql){

    //header("location:add-to-cart.php?msg:'delete item'");

    echo '<script>window.location="show_business_promos.php";</script>';

}

?>