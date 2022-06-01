<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
unlink("../imagesforsponsor/".$_REQUEST['img_id']);
$sql=mysqli_query($con,"DELETE FROM `sponsor_package` WHERE id='$crid' ");

if($sql){

    //header("location:add-to-cart.php?msg:'delete item'");

    echo '<script>window.location="show_sponsor_package.php";</script>';

}

?>