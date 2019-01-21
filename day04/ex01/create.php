<?php

$dir_path = '../private';
$pass_path = '../private/passwd';
$hash_algo = 'md5';

if ($_POST[login] && $_POST[passwd] && $_POST[submit] === "OK")
{

if (!file_exists($dir_path))
{
  mkdir($dir_path);
}
if(!file_exists($pass_path))
{
  file_put_contents($pass_path);
}

$account = unserialize(file_get_contents($pass_path));
//print_r($account);
//print("\n");

foreach ($account as $value)
{
  if ($value[login] === $_POST[login])
  {
    $taken = 1;
    break;
  }
  else {
    $taken = 0;
  }
}

if ($taken)
{
  print("ERROR\n");
}
else {
  $new[login] = $_POST[login];
  $new_nothash[passwd] = $_POST[passwd];
  $new[passwd] = hash($hash_algo, $new_nothash[passwd]);
  //print($new[login]);
  //print($new[passwd]);
  $account[] = $new;
  //print_r($account);
  file_put_contents($pass_path, serialize($account));
  print("OK\n");
}
}
else {
  print("ERROR\n");
}
 ?>
