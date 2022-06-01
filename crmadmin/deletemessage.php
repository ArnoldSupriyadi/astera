<?php
include("../connection.php");
?>

<?php

$crid=$_GET['crtid'];

$sql=mysqli_query($con,"DELETE FROM `contact` WHERE id='$crid' ");

if($sql){

    echo '<script>window.location="showusermessage.php";</script>';

}

?>
