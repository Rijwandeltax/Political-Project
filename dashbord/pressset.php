<?php
if(empty($_POST["data"]) || empty($_POST["about"])){
header("location:index.php?err=1");
}
else{
include("poli.php");
$date=$_POST["data"];
$about=$_POST["about"];
$title=$_POST["title"];
$person=$_POST["person"];
$x=1;

$rs=mysql_query("select * from press where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into press values($x,'press','$date','$about','$person','$title',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	}
	?>

