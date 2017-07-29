<?php
include("log.php");
$email=$_COOKIE["user"];
setcookie("user",$email,time()-1);
  header("location:loginn.php");
  ?>