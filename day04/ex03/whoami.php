<?php

session_start();
if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != NULL)
	print($_SESSION['loggued_on_user']."\n");
else
	print("ERROR\n");

 ?>
