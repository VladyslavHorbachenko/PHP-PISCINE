<?php
include("auth.php");
session_start();
$login = $_GET['login'];
$password = $_GET['passwd'];
//print("asddas");
if ($login && $password && auth($login,$password))
{
  $_SESSION['loggued_on_user'] = $login;
  print("OK\n");
}
else {
  $_SESSION['loggued_on_user'] = "";
  print("ERROR\n");
}

 ?>
