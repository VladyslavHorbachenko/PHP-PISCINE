<?php

$dir_path = '../private';
$pass_path = '../private/passwd';
$hash_algo = 'md5';

if ($_POST[login] && $_POST[oldpw] && $_POST[newpw] && $_POST[submit] === "OK")
{
  $chek[login] = $_POST[login];
  $chek[oldpw] = $_POST[oldpw];
  $chek[oldpw] = hash($hash_algo, $chek[oldpw]);
  $new_pass = $_POST[newpw];
  $new_pass = hash($hash_algo, $new_pass);
  // print($new_pass);
  // print("    ");
  // print($chek[oldpw]);

  $account = unserialize(file_get_contents($pass_path));

  foreach ($account as $k => $value)
  {
    if($value[login] == $chek[login] && $chek[oldpw] == $value[passwd])
    {
      $exist = 1;
      $account[$k][passwd] = $new_pass;
      // print($value[passwd]);
      // print("\n");
       //print($new_pass);

      break;
    }
    else
      $exist = 0;
  }

if ($exist)
{
  file_put_contents($pass_path, serialize($account));

  print("OK\n");

}
else
{
  print("ERROR\n");
}

}
else {
  print("ERROR\n");
}

 ?>
