<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];
$img_id=$_GET['imgid'];
unlink("../testimonialimage/".$img_id);
$sql=mysqli_query($con,"DELETE FROM testimonial WHERE id='$crid' ");

if($sql){

    //header("location:add-to-cart.php?msg:'delete item'");

    echo '<script>window.location="show_testimonial.php";</script>';

}

?>
