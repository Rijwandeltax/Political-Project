<?php

include("poli.php");
if($_POST["type"]=="OTHER"){
$postt=$_POST["typee"];
}
else{
$postt=$_POST["type"];
}

$about=$_POST["about"];
$funame=$_POST["funame"];
$fbname=$_POST["fbname"];
$twname=$_POST["twname"];
$x=1;


$rs=mysql_query("select * from team");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	
	$img=$x.'team'.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }
	
	
	
	if(mysql_query("insert into team values($x,'team','$postt','$about','$funame','$fbname','$twname','$photo',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	
	?>

