#!/usr/bin/php
<?PHP
  $my_tab = array_filter(explode(" ", $argv[1]));
  $string = "";
  foreach ($my_tab as $value)
  {
    $string .= $value.' ';
  }
  $string = trim($string);
  print("$string\n");
?>
