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
			<li class=""><a  href="media.php">Media</a></li>
            <li class=""><a  href="mission.php">Mission & Vision</a></li>
            <li class="active"><a  href="organization.php">Organization</a></li>
			<li class=""><a  href="contact.php">Contact</a></li>
			<li class=""><a  href="join.php">Join</a></li>
			
            <li class=""><a  href="http://www.emailmeform.com/builder/form/817xr2p17ePtJ7UZadXlBLES">Join</a></li>
          </ul>
        </div>
	
	</div></nav>
	<div class="container" style="padding-top:35px; padding-bottom:15px; margin-top:110px">
	<div style="padding-left:2%">
	<h2 class="text-center" style="margin-bottom:27px">RESPONSIBLE TEAM</h2><hr  style="margin-left:34%; margin-right:34%; border-color:#FF0000; margin-bottom:45px;"/>
	<p class="text-center" style="padding-left:15%; padding-right:15%">Collaboratively disseminate wireless innovation with standards compliant e-business.
Phosfluorescently expedite functional products via premium action items.</p>
	

		<?php
		include("poli.php");
		$rs=mysql_query("select * from team where flag=1");
		while($r=mysql_fetch_array($rs)){
		?>
	
	<div class="col-sm-3">
	<div class="w3-card-4" style="width:220px; height:350px; background-color:#f1e4e4; padding:5px 5px 5px 5px">
	
	<a href="full_story.php?id=<?=$r[1]?>&event_id=<?=$r[0]?>"><img src="images/<?=$r[0]?><?=$r[1]?>.jpg" class="img-responsive" height="120px" style="margin:1px 1px 1px 1px; padding-bottom:5px;" />
	<div class="text-center" style="color:#000000"><?=$r[2]?>: <?=$r[4]?></div></a>
	
	<div class="social-link">
	<ul class="list-inline" style="margin-left:12%; margin-top:2%">
	<li class="text-center" style="font-size:20px"><b>Follow</b></li>
	<li>
	<a href="<?=$r[5]?>">
	<i class="fa fa-facebook-official" style="font-size:28px; color:#3b5998"></i>
	</a></li>
	<li>
	<a href="<?=$r[6]?>">
	<i class="fa fa-twitter" style="font-size:28px; color:#3399CC"></i>
	</a></li>
	</ul>
	</div>
	<hr  style="border-color:#FF0000; margin-top:36px"/>
	</div>
	</div>
	
	<?php
	}
	?>	
</div></div><br /><br /><br />



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
	<span class="copyright" style="text-align:center">Bharatiya Krantikari Dal - All rights reserved �2016</span>
	</div>
	</footer>
</body>
</html>
