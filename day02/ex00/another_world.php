#!/usr/bin/php
<?php
$string = preg_replace("/[ \t\r]+/", " ", $argv[1]);
$string = trim($string);
print("$string\n");

 ?>
