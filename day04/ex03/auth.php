<?php
function auth($login, $passwd)
{
  $pass_path = '../private/passwd';
  $hash_algo = 'md5';
  $passwd = hash($hash_algo, $passwd);
  if (!$login || !$passwd)
  {
    //print("test2");
    return false;
  }
  $account = unserialize(file_get_contents($pass_path));
  foreach ($account as $value)
  {
    if ($login === $value['login'] && $passwd === $value['passwd'])
    {
      //print("test-pass");
      return true;
    }
  }
  //print("test3");
  return false;
}
 ?>
