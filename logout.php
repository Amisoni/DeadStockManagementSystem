<?php

session_start();
session_destroy();
header("LOCATION:login.php");
echo 'you logout';
?>
