<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studentpoint</title>
<link href="css/w3.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/web.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#c7c3c3">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html" id="navbar">Student_Point</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="index.php">Home</a></li>
            <li class=""><a  href="inform.php">Student Information</a></li>
          </ul>
        </div>
	
	</div></nav>
	
	
<div class="container" style="padding-top:35px; padding-bottom:15px; margin-top:110px"> 
<form class="w3-form" method="post" action="join_.php">
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Full Name</label></div>
<div class="col-sm-8">
<input type="text" name="fname" placeholder="Enter the name" required="required" class="form-control"/></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Email</label></div>
<div class="col-sm-8">
<input type="email" name="email" placeholder="Enter the email" required="required" class="form-control" /></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Mobile</label></div>
<div class="col-sm-8">
<input type="text" name="mobile" placeholder="Enter the mobile no." required="required" class="form-control"/></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Father Name</label></div>
<div class="col-sm-8">
<input type="text" name="father" placeholder="Enter the father name" required="required" class="form-control" /></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Gender</label></div>
<div class="col-sm-8">

<input type="radio" value="male" name="gender"  checked="checked"/>Male&nbsp; &nbsp; &nbsp;<input type="radio" value="female" name="gender"/>Female<br /></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Address</label></div>
<div class="col-sm-8">

<textarea name="message" class="form-control" cols="100" rows="4" placeholder="Message"></textarea></div></div>

<input type="submit" value="Submit" class="w3-btn"  style="margin-top:10px; margin-left:38%; margin-right:50%; width:150px"/>

</form>
</div>


 


<footer class="footer-section">
	<div class="container">
	<div class="row"><div class="col-sm-4">
	<a href="index.html">
	<h4 style="color:#FFFFFF">Student point</h4>
	<hr style="border-color:#36384c"/>
	<img src="pics/photo.jpg" class="img-responsive" style="margin-left:10%; margin-top:10%"></a></div>
	<div class="col-sm-4">
	<h4 style="color:#FFFFFF">Quick Links</h4>
	<hr style="border-color:#36384c"/>
	<ul >
	<li class="" style="line-height:33px"><a href="index.php" style="color:#6b6e80; font-size:16px">Home</a></li>
            <li style="line-height:33px"><a  href="inform.php" style="color:#6b6e80; font-size:16px">Student Information</a></li>
          </ul>
	
	</div>
	
	
	
	<div class="col-sm-4">
	<h4 style="color:#FFFFFF">We are social, You can follow us</h4>
	<hr style="border-color:#36384c"/>
	<div class="social-link">
	<ul class="list-inline" style="margin-left:25%; margin-top:20%">
	<li>
	<a href="#">
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
	<span class="copyright" style="text-align:center">Student_Point - All rights reserved ©2017</span>
	</div>
	</footer>
</body>
</html>
