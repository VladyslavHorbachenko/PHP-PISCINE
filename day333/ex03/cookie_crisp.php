<?php

if($_GET['action'] == "set")
{
  setcookie($_GET['name'], $_GET['value']);
//  echo "1";
}

if($_GET['action'] == "get")
{
 echo $_COOKIE[$_GET['name']]."\n";
 //echo "2";
}

if($_GET['action'] == "del")
{
  //echo "3";
  setcookie($_GET['name'], '', 1);
}

 ?>
