#!/usr/bin/php
<?php
 date_default_timezone_set('Europe/Paris');
$month = array("janvier","février","mars","avril", "mai","juin",
      "juillet",
      "août",
      "septembre",
      "octobre",
      "novembre",
      "décembre");

$week = array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");

$argv[1] = strtolower($argv[1]);
$my_tab = explode(" ", $argv[1]);

if(count($my_tab) != 5)//chek total length
{
  print("Wrong Format\n");
        exit(0);
}

if(!(in_array($my_tab[2], $month)) || !(in_array($my_tab[0], $week)))
{
  print("Wrong Format\n");
        exit(0);
}
if (preg_match("/0[1-9]|[1-2][0-9]|3[0-1]/", $my_tab[1]) == 0 || strlen($my_tab[1]) > 2)//day of week
{
  print("Wrong Format\n");
        exit(0);
}
if ((strlen($my_tab[3]) != 4) || (!(is_numeric($my_tab[3]))))//year
{
  print("Wrong Format\n");
        exit(0);
}

if ((strlen($my_tab[4]) != 8)
  || (preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $my_tab[4]) == 0))//hh:mm:ss
  {
    print("Wrong Format\n");
          exit(0);
  }

$timehms = explode(":", $my_tab[4]);

$monthint = array_search($my_tab[2], $month);//get number of month
$monthint++;

$day_of_week = array_search($my_tab[0], $week);//number of day
$day_of_week++;

if ($monthint === false || $day_of_week === false)
{
        echo "Wrong Format\n";
        exit();
}

$time = mktime($timehms[0], $timehms[1], $timehms[2], $monthint, $my_tab[1], $my_tab[3]);

print("$time\n");

 ?>
