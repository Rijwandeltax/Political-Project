<?php
if(empty($_POST["noti"]) || empty($_POST["about"])){
header("location:index.php?err=1");
}
else{
include("poli.php");
$notification=$_POST["noti"];
$about=$_POST["about"];
$x=1;
$rs=mysql_query("select * from notification");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	
	if(mysql_query("insert into notification values($x,'notification','$notification','$about',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	}
	?>

