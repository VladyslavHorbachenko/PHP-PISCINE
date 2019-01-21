#!/usr/bin/php
<?php
    $buffsize = 628;
    date_default_timezone_set('America/Los_Angeles');
    $file = fopen('/var/run/utmpx', 'r');
    while ($my_tab = fread($file, $buffsize)){
        $unpack = unpack("a256a/a4b/a32c/i/ie/I2f/a256g/i16h", $my_tab); //Unpack data from binary string
        $array[] = $unpack;
        //print_r($unpack);
    }
    fclose($file);
    ksort($array);
    //print_r($array);
    //print("\n");
    foreach ($array as $v){
        if ($v['e'] == 7) {
            print(str_pad(substr(trim($v['a']), 0, 8), 8, " ")." ");
            print(str_pad(substr(trim($v['c']), 0, 7), 8, " ")." ");
            print(date("M", $v["f1"])." ");//M A short textual representation of a month, three letters	Jan through Dec
            print(str_pad(date("j", $v["f1"]), 1, " ")." ".date("H:i", $v["f1"])); //j	Day of the month without leading zeros	1 to 31 **** i	Minutes with leading zeros	00 to 59
            print("\n");
        }
    }
?>
