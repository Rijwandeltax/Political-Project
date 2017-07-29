<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bharatiya Krantikari Dal</title>
<link href="css/w3.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/web.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		 var m =parseInt(v);
		$.post(
		"moree.php",
		  {code:v},
		function(data){
	    // document.getElementById("show").innerHTML+=data;
		 $("#msg").html(data);
		
		
              $("button").attr("id",m+10);
                });
              });
         });
</script>

</head>

<body style="background-color:#e4dada">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" id="navbar">Bharatiya Krantikari Dal</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="index.php">Home</a></li>
            <li class=""><a  href="about.php">About Us</a></li>
            <li class=""><a  href="mission.php">Mission & Vision</a></li>
			 <li class="active"><a  href="media.php">Media</a></li>
            <li class=""><a  href="organization.php">Organization</a></li>
            <li class=""><a  href="join.php">Join</a></li>
          </ul>
        </div>
	
	</div></nav>
	                                  
	<div class="container" style="padding-top:35px; padding-bottom:15px; margin-top:110px">
	<h2 style="text-align:center">MEDIA</h2>
	<ul id="filter" style="margin-left:26%">
	<li><a href="#" >Press Releases</a></li>
	<li><a href="#">Photo</a></li>
	<li><a href="#">TV</a></li>
	<li><a href="#">Events</a></li>
	<li><a href="#" class="active">Speeches</a></li></ul>
	</div>
	<div class="container" style="padding-right:18%; padding-left:15%; margin-bottom:5%">
	<div id="msg">
	<table class="w3-table w3-striped">
	<tr>
	<th>LEADER</th>
	<th>TITLE</th>
	<th>Date</th>
	<th>VENUE</th>
	</tr>
	
	<?php
		include("poli.php");
		$x=1;
		$num=10;
		$rs=mysql_query("select * from speech where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
		$j=$x-10;
		$rs=mysql_query("select * from speech order by sn DESC");
		while($r=mysql_fetch_array($rs)){
		if($r[0]<=$x && $r[0]>$j){
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
	?>
	</table>
	</div>
	<button type="button" class="w3-btn asd" style="float:right; margin-top:20px" id="<?=$num?>">Load More..</button>
	</div></div>
	
	
	
	
	
	
		
	<footer class="footer-section">
	<div class="container">
	<div class="row"><div class="col-sm-4">
	<a href="index.php">
	<h4 style="color:#FFFFFF">Bharatiya Krantikari Dal</h4>
	<hr style="border-color:#36384c"/>
	<img src="pics/photo.jpg" class="img-responsive" style="margin-left:10%; margin-top:10%"></a></div>
	<div class="col-sm-3">
	<h4 style="color:#FFFFFF">Quick Links</h4>
	<hr style="border-color:#36384c"/>
	<ul >
<li class="" style="line-height:33px;"><a href="index.php" style="color:#6b6e80; font-size:16px;">Home</a></li>
            <li style="line-height:33px"><a  href="about.php" style="color:#6b6e80; font-size:16px"><span></span>About Us</a></li>
            <li class="" style="line-height:33px"><a  href="mission.php" style="color:#6b6e80; font-size:16px">Mission & Vision</a></li>
            <li class="" style="line-height:33px"><a  href="organization.php" style="color:#6b6e80; font-size:16px">Organization</a></li>
            <li class="" style="line-height:33px"><a  href="join.php" style="color:#6b6e80; font-size:16px">Join</a></li>
          </ul>
	
	</div>
	
	
	
	
	<div class="col-sm-4">
	<h4 style="color:#FFFFFF">We are social, You can follow us</h4>
	<hr style="border-color:#36384c"/>
	<div class="social-link">
	<ul class="list-inline" style="margin-left:25%; margin-top:20%">
	<li>
	<a href="http://www.facebook.com/BKD.India">
	<i class="fa fa-facebook-official" style="font-size:28px; color:#3b5998"></i>
	</a></li>
	<li>
	<a href="#">
	<i class="fa fa-twitter" style="font-size:28px; color:#3399CC"></i>
	</a></li>
	<li>
	<a href="#">
	<i class="fa fa-google" style="font-size:28px; color:#db3236"></i>
	</a></li>
	</ul>
	</div>
	</div></div>
	<span class="copyright" style="text-align:center">Bharatiya Krantikari Dal - All rights reserved ©2016</span>
	</div>
	</footer>
</body>
</html>
