<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="UTF-8">
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
		"nes.php",
		  {code:v},
		function(data){
	     document.getElementById("show").innerHTML+=data;
		// $("#msg").html(data);
		
              $("button").attr("id",m+3);
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
            <li class="active"><a href="index.php">Home</a></li>
            <li class=""><a  href="about.php">About Us</a></li>
			<li class=""><a  href="media.php">Media</a></li>
            <li class=""><a  href="mission.php">Mission & Vision</a></li>
            <li ><a  href="organization.php">Organization</a></li>
			<li class=""><a  href="contact.php">Contact</a></li>
			<li class=""><a  href="http://www.emailmeform.com/builder/form/817xr2p17ePtJ7UZadXlBLES">Join</a></li>
          </ul>
        </div>
	
	</div></nav>
	
	<div style="background-color:#333333; padding-top:35px; padding-bottom:10px; margin-top:110px; height:550px">
	<div class="container">
	<div class="row">
	<div class="col-sm-8">
	     <div style="padding:10px 10px 10px 10px">
        <div class="carousel slide" data-ride="carousel" id="demo">
		<div style="border:4px solid #1A1A1A" class="rj">
		<ol class="carousel-indicators">
				      <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
						  <li data-target="#demo" data-slide-to="2"></li>
						    <li data-target="#demo" data-slide-to="3"></li>
				</ol>
	  	<div class="carousel-inner rj" role="listbox">
			<div class="item active" align="center">
	  			<img src="images/1gellery.jpg" class="img-responsive"></div>
				<div class="item" align="center">
	  			<img src="images/1gellery.jpg" class="img-responsive"></div>
				<div class="item" align="center">
	  			<img src="images/1gellery.jpg" class="img-responsive"></div>
				<div class="item" align="center">
	  			<img src="images/1gellery.jpg" class="img-responsive"></div>
	  </div></div></div></div></div>

	  
	  <div class="col-sm-4 banner-grid" style="padding-top:5%;">
	  <h3>News Feed</h3>
	  <div class="banner-grid-sec">
	  <div class="news-grid">
	  <marquee direction="up" scrolldelay="500" onmouseover="stop()" onmouseout="start()">

		<?php
		include("poli.php");
		$rs=mysql_query("select * from notification where flag=1");
		while($r=mysql_fetch_array($rs)){
		if($r[0]<6){
		?>
	  <p><a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>" style="color:#000000; font-size:18px"><?=$r[2]?></a></p>
	  <?php
	  }
	  }
	  ?> 
	  </marquee>
	  </div></div></div></div></div></div>
	  
	  
	  
		<div class="container-fluid" style="background-color:#333333; margin-top:5%; padding:20px 20px 20px 20px; text-align:center ">
		<h3 class="text-center" style="color:#FFFFFF">JOIN THE VOLUNTEERS!</h3>
		<p class="text-center" style="color:#FFFFFF" >Conveniently disseminate quality niche markets after just in time results. Seamlessly exploit synergistic technologies whereas customer directed "outside the box" thinking. Conveniently revolutionize resource sucking schemas vis-a-vis equity invested sources. technologies whereas customer directed invested sources.</p>
		<a href="join.php"><button type="button" class="w3-btn" style="width:200px; height:70px; background-color:#a03c3c">JOIN US..</button></a>
		</div>
		
		
		
	
	
	
	<div class="row" style="margin-left:5%; margin-top:4%; margin-right:2%">
	
	<div class="col-sm-5" style="background:#fff5f5;  padding:20px 20px 20px 20px;">
	<div id="show">
		<?php
		include("poli.php");
	    $x=1;
		$rs=mysql_query("select * from news where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
		$j=$x-3;
	$rs=mysql_query("select * from news order by sn DESC");
	$num=3;
	while($r=mysql_fetch_array($rs)){
	if($r[0]<=$x && $r[0]>$j){
	?>
	
	<div class="w3-card-2" style="background-color:#d6e2d0; padding:10px 10px 10px 10px">
	<h4>date:- <?=$r[2]?></h4> <br />
	<img src="images/<?=$r[0]?><?=$r[2]?>.jpg" class="img-responsive" /><br /><br />
	<h4>About This:-</h4><p><?=$r[3]?></p></div>
	<hr style="border-color:#660033" />
	
	<?php
	}
	}
	?></div>
	<button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:17%; margin-bottom:30px;">Load more</button>
	</div>
	
	<div class="col-sm-1"></div>
	<div class="col-sm-6" style="background:#fff5f5; margin-bottom:2%; padding:5px 40px 0px 40px; float:right">
	<h3 class="text-center" style="padding-top:3%">PRESS</h3>
	<hr style="margin-left:30%; margin-right:30%; border-color:#660033" />
	<div class="col-sm-6 media">
	<h4 class="text-center">MEDIA PRESS</h4>
	
	<hr style="border-color:#660033"/>
	
		<?php
		include("poli.php");
		$x=1;
		$rs=mysql_query("select * from press where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
		$j=$x-4;
		$rs=mysql_query("select * from press order by sn DESC");
		while($r=mysql_fetch_array($rs)){
		if($r[0]<=$x && $r[0]>$j){
		?>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Published : <?=$r[2]?></p><br />
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">HEADLINE:<?=$r[4]?></p>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">SPOKEPERSON:<?=$r[5]?></p>
	<a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>">Read More...</a>
	<hr style="border-color:#660033"/>
	
	<?php
	}
	}
	?>
	</div>
	
	<div class="col-sm-6 media" style="height:1000px">
	<h4 class="text-center">Events</h4>
	<hr style="border-color:#660033" />
	
	
		<?php
		include("poli.php");
		$x=1;
		
		$rs=mysql_query("select * from event where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
		$j=$x-4;
		$rs=mysql_query("select * from event order by sn DESC");
		while($r=mysql_fetch_array($rs)){
		if($r[0]<=$x && $r[0]>$j){
		?>
	
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Date :-<?=$r[4]?></p>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Venue :-<?=$r[3]?></p>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Time:-<?=$r[6]?></p>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Event Name:-<?=$r[2]?></p>
	<p style="color:#000000; font-size:16px; font-family:Geneva, Arial, Helvetica, sans-serif">Leader Name:-<?=$r[5]?></p>
	<br />
	<hr style="border-color:#660033" />
	
	<?php
	}
	}
	?>
	
	</div>
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
