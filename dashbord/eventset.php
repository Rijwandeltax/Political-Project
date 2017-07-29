<?php
if(empty($_POST["ename"]) || empty($_POST["venue"]) || empty($_POST["data"]) || empty($_POST["leader"])){
header("location:index.php?err=1");
}
else{
include("poli.php");
$ename=$_POST["ename"];
$venue=$_POST["venue"];
$data=$_POST["data"];
$leader=$_POST["leader"];
$time=$_POST["time"];
$x=1;
$rs=mysql_query("select * from event where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into event values($x,'event','$ename','$venue','$data','$leader','$time',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}

}
?>