#!/usr/bin/php
<?php
$my_tab = explode(" ", $argv[1]);
$len = count($my_tab);

$my_tab[$len] = $my_tab[0];

unset($my_tab[0]);

$my_tab = array_filter($my_tab);

$string = "";
foreach ($my_tab as $value)
{
  $string .= $value.' ';
}
$string = trim($string);
print("$string\n");

?>
