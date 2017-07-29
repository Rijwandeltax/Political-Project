<?php
include("poli.php");


if($_POST["type"]=="OTHER"){
$vision=$_POST["typee"];
}
else{
$vision=$_POST["type"];
}
$x=1;
$rs=mysql_query("select * from mission");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}

$img=$x.$vision.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            
			header("location:index.php?err=3");
			$photo="no";
    }
	
	if(mysql_query("insert into mission values($x,'mission','$vision','$photo',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	?>

