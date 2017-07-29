<?php
include("poli.php");
$x=1;

$rs=mysql_query("select * from carousel");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}

$img=$x.'carousel'.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }
	if(mysql_query("insert into carousel values($x,'carousel','$photo',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=2");
	}
	?>

