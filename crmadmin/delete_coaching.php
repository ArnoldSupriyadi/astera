<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
$img_id=$_GET['img_id'];
unlink("../coaching_image/".$img_id);
$sql=mysqli_query($con,"DELETE FROM `coaching` WHERE id='$crid' ");

if($sql)
{
    echo '<script>window.location="show_coaching.php";</script>';
}

?>