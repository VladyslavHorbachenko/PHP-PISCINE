#!/usr/bin/php
<?PHP
function ft_split($string)
{
  $my_tab = array_filter(explode(" ", $string));
  sort($my_tab);
  return $my_tab;
}
?>
