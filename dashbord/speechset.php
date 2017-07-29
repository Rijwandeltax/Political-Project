<?php
if(empty($_POST["data"]) || empty($_POST["lname"]) || empty($_POST["about"]) || empty($_POST["time"]) || empty($_POST["venue"])|| empty($_POST["link"])){
header("location:index.php?err=1");
}
else{
include("poli.php");
$date=$_POST["data"];
$about=$_POST["about"];
$lname=$_POST["lname"];
$time=$_POST["time"];
$venue=$_POST["venue"];
$link=$_POST["link"];
$title=$_POST["title"];
$x=1;


$rs=mysql_query("select * from speech where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into speech values($x,'speech','$date','$about','$lname','$time','$venue','$link','$title',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	}
	?>

