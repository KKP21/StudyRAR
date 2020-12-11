<?php 

session_start();
unset($_SESSION['email']);
unset($_SESSION['login']);
session_destroy();
header('location:login.php');

 ?>