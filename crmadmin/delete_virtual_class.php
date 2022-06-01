<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
$img_id=$_GET['img_id'];
unlink("../virtual_class_image/".$img_id);
$sql=mysqli_query($con,"DELETE FROM `virtual_class` WHERE id='$crid' ");

if($sql)
{
    echo '<script>window.location="show_virtual_classes.php";</script>';
}

?>