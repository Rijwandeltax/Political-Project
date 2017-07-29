<?php
if(empty($_POST["data"]) || empty($_POST["about"])){
header("location:index.php?err=1");
}
else{
include("poli.php");
$date=$_POST["data"];
$about=$_POST["about"];
$x=1;

$rs=mysql_query("select * from news where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}

$img=$x.$date.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }
	
	if(mysql_query("insert into news values($x,'news','$date','$about','$photo',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	}
	?>

