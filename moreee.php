<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("poli.php");
	   $x=1;
	   
	   
		$rs=mysql_query("select * from gellary where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   ?>
	   <div class="row">
	   
	   <?php
	   
	   
	   $rs=mysql_query("select * from gellary order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-10){
	?>
	<div class="col-sm-3">
	<div class="w3-card-2" style="padding:10px 10px 10px 10px; width:250px; height:200px; background-color:#FFFFFF ">
	<img src="images/<?=$r[0]?><?=$r[1]?>.jpg" class="img-responsive"/ style="height:180px">
	</div></div> 
	<?php  
	  }
	}
}
?>