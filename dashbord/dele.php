<?php
if($_REQUEST["id"]){
	   $v=$_REQUEST["id"];
	   $t=(int)$v;
	
	include("pro.php");
	mysql_query("update tutorial set flag=0 where sn=$t");
	header("location:index.php?succ=1");
	}
	else{
	header("location:index.php?err=1");
	}
	?>