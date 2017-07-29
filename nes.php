<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("poli.php");
	   $x=1;
		$rs=mysql_query("select * from news where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   
	   $rs=mysql_query("select * from news order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-3){
	?>
	<div class="w3-card-2" style="background-color:#d6e2d0; padding:10px 10px 10px 10px">
	<h4>date:- <?=$r[2]?></h4> <br />
	<img src="images/<?=$r[0]?><?=$r[2]?>.jpg" class="img-responsive" /><br /><br />
	<h4>About This:-</h4><p><?=$r[3]?></p></div>
	<hr style="border-color:#660033" />
	 
	<?php  
	  }
	}
}
?>