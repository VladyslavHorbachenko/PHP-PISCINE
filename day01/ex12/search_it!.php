#!/usr/bin/php
<?php
$find = $argv[1];
unset($argv[0],$argv[1]);
foreach ($argv as $value) {
  $temp = explode(":",$value);
  if ($find == $temp[0]){
    $val = $temp[1];// have ? for printing 1 or all values
    //print("$temp[1]\n");
  }
}
print("$val\n");// have ? for printing 1 or all values
 ?>
