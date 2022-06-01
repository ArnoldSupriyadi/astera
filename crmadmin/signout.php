<?php include_once("../connection.php");
?>

<?php
session_unset();
session_destroy();
echo '<script>window.location.assign("index.php");</script>';
?>