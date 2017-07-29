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
      <a class="navbar-brand" href="index.html" id="navbar">Bharatiya Krantikari Dal</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li class=""><a  href="about.php">About Us</a></li>
			<li class=""><a  href="media.php">Media</a></li>
            <li class=""><a  href="mission.php">Mission & Vision</a></li>
            <li ><a  href="organization.php">Organization</a></li>
			<li class=""><a  href="contact.php">Contact</a></li>
			<li class=""><a  href="join.php">Join</a></li>
          </ul>
        </div>
	
	</div></nav>
	<div class="container" style="padding-top:35px; padding-bottom:15px; margin-top:110px"> 
	<h2 class="text-center">Resistration Form</h2>
	
<form class="w3-form" method="post" action="set.php">
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Full Name</label></div>
<div class="col-sm-8">
<input type="text" name="fname" placeholder="Enter the name" required="required" class="form-control"/></div></div><br />
<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Email</label></div>
<div class="col-sm-8">
<input type="email" name="email" placeholder="Enter the email" required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">D.O.B.</label></div>
<div class="col-sm-8">
<input type="date" name="dob"  required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Mobile</label></div>
<div class="col-sm-8">
<input type="text" name="mobile" placeholder="Enter the mobile no." required="required" class="form-control"/></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Gender</label></div>
<div class="col-sm-8">
<input type="radio" value="male" name="gender"  checked="checked"/>Male&nbsp; &nbsp; &nbsp;<input type="radio" value="female" name="gender"/>Female<br /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Belongs To</label></div>
<div class="col-sm-8">

<input type="radio" value="gen" name="cast"  checked="checked"/>General<br />
<input type="radio" value="obc" name="cast"/>Other Backward Classe <br />
<input type="radio" value="minority" name="cast"/>Minority  <br />
<input type="radio" value="sc" name="cast"/>Scheduled Caste   <br />
<input type="radio" value="st" name="cast"/>Scheduled Tribe  </div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Highest Educational Qualification</label></div>
<div class="col-sm-8">
<input type="text" name="Qualification" placeholder="Qualifiation" required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Occupation</label></div>
<div class="col-sm-8">
<input type="text" name="occupation" placeholder="occupation" required="required" class="form-control" /></div></div><br />

<h3 class="text-center">Address</h3>

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">H.NO.</label></div>
<div class="col-sm-8">
<input type="text" name="hn"  required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">Locality/Street</label></div>
<div class="col-sm-8">
<input type="text" name="st"  required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">City/Town/Village</label></div>
<div class="col-sm-8">
<input type="text" name="ctv"  required="required" class="form-control" /></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">District</label></div>
<div class="col-sm-8">
<input type="text" name="dist"  required="required" class="form-control" /></div></div><br /><

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">State</label></div>
<div class="col-sm-8">
<select class="form-control" name="state">
<option value="" selected="selected">Select State</option>
<option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar And Nagar Haveli">Dadar And Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat 	">Gujarat 	</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Puducherry">Puducherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></div></div><br />

<div class="row"><div class="col-sm-3"><label class="w3-label" style="color:#251616; font-size:20px">PIN Code</label></div>
<div class="col-sm-8">
<input type="text" name="pin"  required="required" class="form-control" /></div></div><br />

<input type="submit" value="Submit" class="w3-btn"  style="margin-top:10px; margin-left:38%; margin-right:50%; width:150px"/>

</form></div>

	
	
	
	
	
	
	<footer class="footer-section">
	<div class="container">
	<div class="row"><div class="col-sm-4">
	<a href="index.html">
	<h4 style="color:#FFFFFF">Bharatiya Krantikari Dal</h4>
	<hr style="border-color:#36384c"/>
	<img src="pics/photo.jpg" class="img-responsive" style="margin-left:10%; margin-top:10%"></a></div>
	<div class="col-sm-4">
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
