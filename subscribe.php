<?php
if(empty($_POST["email"])){
header("location:contact.php?err=4");
}
else{
include("poli.php");
$emai=$_POST["email"];
$x=1;


$rs=mysql_query("select * from newsletter where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	if($emai==$r[1]){
	header("location:contact.php?err=1");
	}
	}
	
	
	if(mysql_query("insert into newsletter values($x,'$email',1)")){
		header("location:contact.php?succ=1");
		}
		else{
		header("location:contact.php?err=2");
	}
	}
	
	?>