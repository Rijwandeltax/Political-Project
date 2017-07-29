<?php
  if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("poli.php");
	   $x=1;
	   
	   
		$rs=mysql_query("select * from speech where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   ?>
	   <table class="w3-table w3-striped">
	<tr>
	<th>LEADER</th>
	<th>TITLE</th>
	<th>Date</th>
	<th>VENUE</th>
	</tr>
	   
	   <?php
	   
	   
	   $rs=mysql_query("select * from speech order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-10){
	?>
	<tr>
	<td><a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>" style="color:#000000"><?=$r[4]?></a></td>
	<td><a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>" style="color:#000000"><?=$r[8]?></a></td>
	<td><a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>" style="color:#000000"><?=$r[2]?></a></td>
	<td><a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>" style="color:#000000"><?=$r[6]?></a></td>
	</tr>
	<?php  
	  }
	}
}
?>