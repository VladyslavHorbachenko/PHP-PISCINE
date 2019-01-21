#!/usr/bin/php
<?php
if ($argc != 2)
{
  print("Incorrect Parameters\n");
  exit();
}
$str = str_replace(" ", "", $argv[1]);
$int1 = intval($str);
$string = substr(substr($str, strlen($int1)), 0, 1);
$int2 = substr(substr($str, strlen($int1)), 1);
if (!is_numeric($int1) || !is_numeric($int2))
{
    print("Syntax Error\n");
    exit();
}

$res = 0;
if ($string == '*')
  $res = $int1 * $int2;
if ($string == "/")
  $res = $int1 / $int2;
if ($string == "+")
  $res = $int1 + $int2;
if ($string == "-")
  $res = $int1 - $int2;
if ($string == "%")
  $res = $int1 % $int2;

print("$res\n");
 ?>
