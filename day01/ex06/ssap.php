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
    sort($final);
    foreach ($final as $value)
        print("$value\n");
    //  $i = 0;
    //  while ($final[$i])
    //   {
    //    print("$final[$i]\n");
    //    $i++;
    //  }
?>
