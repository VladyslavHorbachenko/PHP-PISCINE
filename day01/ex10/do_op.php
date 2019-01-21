#!/usr/bin/php
<?php
if($argc != 4)
  {
    print("error");
    exit(0);
  }
$int1 = trim($argv[1]);
$string = trim($argv[2]);
$int2 = trim($argv[3]);
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

print("$res");
?>
