<?php  include('view/header.php'); ?>
<h3>You have successfully logged out. !</h3>

<?php
session_start();
session_destroy();
header("Location:login.php");
?>

<?php include('view/footer.php'); ?>
