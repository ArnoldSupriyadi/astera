<?php
session_start();
?>
<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ronak');
?>
<?php

if(!isset($_SESSION["uid"]))
{

    $_SESSION["uid"] =  uniqid();
}

?>



