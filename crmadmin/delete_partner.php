<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
$img_id=$_GET['img_id'];
unlink("../partner_image/".$img_id);
$sql=mysqli_query($con,"DELETE FROM `partner` WHERE id='$crid' ");

if($sql){

    //header("location:add-to-cart.php?msg:'delete item'");

    echo '<script>window.location="show_partner.php";</script>';

}

?>