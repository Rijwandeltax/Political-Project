<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("poli.php");
	   $x=1;
	   
	   
		$rs=mysql_query("select * from event where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   ?>
	   <table class="w3-table w3-striped">
	<tr>
	<th>DATE</th>
	<th>EVENT NAME</th>
	<th>Leader</th>
	<th>Time</th>
	<th>Venue</th>
	</tr>
	   
	   <?php
	   
	   
	   $rs=mysql_query("select * from event order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-10){
	?>
	<tr>
	<td><?=$r[4]?></td>
	<td><?=$r[2]?></td>
	<td><?=$r[5]?></td>
	<td><?=$r[6]?></td>
	<td><?=$r[3]?></td>
	
	</tr>	 
	<?php  
	  }
	  ?>
	  </table>
	  <?php
	}
}
?>