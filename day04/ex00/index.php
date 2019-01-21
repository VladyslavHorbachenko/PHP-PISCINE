<?php

session_start();
  if ($_GET[submit] === "OK" && $_GET[login] && $_GET[passwd]){
    $_SESSION[login] = $_GET[login];
    $_SESSION[passwd] = $_GET[passwd];
  }
  if(!$_GET[login] && $_GET[submit] === "OK")
  {
    print("Sorry, you did not enter login. \n");
  }
  if(!$_GET[passwd] && $_GET[submit] === "OK")
  {
    print("Sorry, you did not enter password.\n");
  }
  //echo $_SESSION[login]."\n";
  //echo $_SESSION[passwd]."\n";

 ?>

 <html><body>
<form action="index.php" method="get">
  Usermane: <input type="text" name="login" value="<?php echo "$_SESSION[login]"; ?>" />
  <br/>
  Password:  <input type="password" name="passwd" style="margin-left: 5px;" value="<?php echo "$_SESSION[passwd]"; ?>" />
  <br/>
  <button type="submit" name="submit" value="OK">Submit</button>
</form>
</body></html>
