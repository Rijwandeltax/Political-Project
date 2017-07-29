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
			 <li ><a  href="media.html">Media</a></li>
            <li class=""><a  href="organization.php">Organization</a></li>
            <li class=""><a  href="join.php">Join</a></li>
          </ul>
        </div>
	
	</div></nav>

	
	    <!--Navbar-->
		
		
<!-- full story-->
<div class="container" style="padding-top:35px; padding-bottom:15px; margin-top:110px">
	<?php
	 if($_REQUEST["id"]){
	   $v=$_REQUEST["id"];
	   $l=$_REQUEST["event_id"];
	   
	   if($v=="press"){
	   
	   
	include("poli.php");
	$rs=mysql_query("select * from press where flag=1 AND sn='$l'");
	if($r=mysql_fetch_array($rs)){
	?>
	<div class="banner-grid" style="padding-top:5%;">
	  <h3><?=$r[5]?></h3>
	  <div class="banner-grid-sec">
	  <div class="news-grid">
	  <p><?=$r[3]?></p>
	  </div></div></div>
	 <?php
	 }
	 }
	 else if($v=="speech"){
	 
	 include("poli.php");
	$rs=mysql_query("select * from speech where flag=1 AND sn='$l'");
	if($r=mysql_fetch_array($rs)){
	?>
	<div class="banner-grid" style="padding-top:5%;">
	  <h3><?=$r[8]?></h3>
	  <div class="banner-grid-sec">
	  <div class="news-grid">
	  <iframe width="100%" height="315" src="<?=$r[7]?>"></iframe>
	  
	  </div></div>
	  <div class="banner-grid-sec">
	  <div class="news-grid">
	  <p><?=$r[3]?></p>
	  </div></div></div>
	 <?php
	 }
	 }
	 else if($v=="team"){
	 include("poli.php");
	$rs=mysql_query("select * from team where flag=1 AND sn='$l'");
	if($r=mysql_fetch_array($rs)){
	?>
	<div class="col-sm-3">
	<div class="w3-card-2">
	<img src="images/<?=$r[0]?><?=$r[1]?>.jpg" class="img-responsive" />
	</div>
	 <div class="banner-grid" style="padding-top:5%;">
	  <h3 style="font-size:18px"><?=$r[2]?>: <?=$r[4]?></h3>
	  
	  </div></div>

	  <div class="col-sm-9">
	  <div class="banner-grid-sec" style="margin-top:5%; border-width:1px;">
	  <div class="news-grid">
	  <p><?=$r[3]?></p>
	  
	  </div></div></div>
	  <?php
	 }
	 }
	 else if($v=="notification"){
	 
	 include("poli.php");
	$rs=mysql_query("select * from notification where flag=1 AND sn='$l'");
	if($r=mysql_fetch_array($rs)){
	?>
	<div class="banner-grid" style="padding-top:5%;">
	  <h3><?=$r[2]?></h3>
	  <div class="banner-grid-sec">
	  <div class="news-grid">
	  <p><?=$r[3]?></p>
	  </div></div></div>
	 <?php
	 }
	 }
	 }
	 ?>
	 </div>
<!--================================Scripts================================-->
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
