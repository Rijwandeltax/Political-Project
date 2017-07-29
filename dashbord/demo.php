<?php
if(empty($_POST["email"]) || empty($_POST["pass"])){
header("location:loginn.php?err=1");
}
else{
    include("poli.php");
    $email=$_POST["email"];
	$pass=$_POST["pass"];
	$email=mysql_real_escape_string($email);
	$pass=mysql_real_escape_string($pass);
	$p=1;
	$rs=mysql_query("select * from lng where el='$email' AND pd='$pass'");
	if($r=mysql_fetch_array($rs)){
	setcookie("user",$email,time()+2000);
	header("location:index.php"); 
	}
	else{
	header("location:loginn.php?err=2");
 }
}
?>	