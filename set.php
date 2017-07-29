<?php

if(empty($_POST["fname"])||empty($_POST["gender"])|| empty($_POST["email"]) || empty($_POST["mobile"]) || empty($_POST["Qualification"])){
header("location:join.php?errr=5");
}
else{
include("poli.php");
$fname=$_POST["fname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$cast=$_POST["cast"];
$mobile=$_POST["mobile"];
$Qualification=$_POST["Qualification"];
$occupation=$_POST["occupation"];
$hn=$_POST["hn"];
$st=$_POST["st"];
$ctv=$_POST["ctv"];
$dist=$_POST["dist"];
$state=$_POST["state"];
$address=$hn.", ".$st.", ".$ctv.", ".$dist.", ".$state;


$rs=mysql_query("select * from resis");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
$x=$x+1;
if(mysql_query("insert into resis values($x,'$fname','$gender','$dob','$email','$cast','$mobile','$address','$Qualification','$occupation')")){
header("location:index.php?succ=1");
 }
 else{
      header("location:join.php?err=2");
	  }
	  }
	  ?>