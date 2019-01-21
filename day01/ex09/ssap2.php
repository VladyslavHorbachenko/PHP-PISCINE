#!/usr/bin/php
<?php
$my_tab = array();
    unset($argv[0]);
    foreach($argv as $value)
    {
      $temp = array_filter(explode(' ', $value));
        foreach ($temp as $value2)
            $final[] = $value2;
    }
  //  sort($final);

  foreach ($final as $value) {
    if (($value[0] >= 'a' && $value[0] <= 'z') || ($value[0] >='A' && $value[0] <= 'Z'))
      $alpha[] = $value;
    else if ($value[0] >= '0' && $value[0] <= '9')
      $number[] = $value;
    else
      $other[] = $value;
  }

natcasesort($alpha);
//for NORMAL prog del from here
$i=0;
foreach ($alpha as $value)
{
  $leter[$i] = $value;
  $i++;
}

$len = count($leter);
$i=0;
$j = $i+1;

while($i < $len - 1)
{
    if (strcmp($leter[$i], $leter[$j]) < 0)
    {
[$leter[$i], $leter[$j]] = [$leter[$j], $leter[$i]];
      $i=0;
    }
    else
      $i++;
}
//to here

sort($number, SORT_STRING);

natcasesort($other);

foreach ($leter as $value) {
  echo $value."\n";
}
foreach ($number as $value) {
  echo $value."\n";
}
foreach ($other as $value) {
  echo $value."\n";
}

 ?>
