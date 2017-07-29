<!DOCTYPE >
<html>
  <head>
    <title>bkd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
	<link href="css/w3.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).fadeIn(1000);
   if(t=="News"){
   $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
	
   }
   else if(t=="event"){
   $("#News").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
   }
   else if(t=="press"){
  $("#event").hide();
   $("#News").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
   } 
   else if(t=="speech"){
   $("#event").hide();
   $("#press").hide();
    $("#News").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
   }
    else if(t=="mission"){
    $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#News").hide();
	$("#team").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
   }
    else if(t=="team"){
     $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#News").hide();
	$("#carousel").hide();
	$("#notification").hide();
	$("#delete").hide();
   }
   else if(t=="carousel"){
    $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#News").hide();
	$("#notification").hide();
	$("#delete").hide();
	$("#gellery").hide();
	}
	else if(t=="notification"){
    $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#News").hide();
	$("#carousel").hide();
	$("#delete").hide();
	$("#gellery").hide();
	}
	else if(t=="delete"){
    $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#News").hide();
	$("#notification").hide();
	$("#carousel").hide();
	$("#gellery").hide();
	}
	else if(t=="gellery"){
    $("#event").hide();
   $("#press").hide();
    $("#speech").hide();
	$("#mission").hide();
	$("#team").hide();
	$("#News").hide();
	$("#notification").hide();
	$("#carousel").hide();
	$("#delete").hide();
	}
   });   
});
</script>
	<script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		 var m =parseInt(v); 
		$.post(
		"alch.php",
		  {code:v},
		function(data){
	     document.getElementById("s").innerHTML+=data;
		// $("#msg").html(data);
		
              $("button").attr("id",m+3);
                });
              });
         });
</script>	
           <script type="text/javascript">
         $(document).ready(function(){
	      $("#tp").change(function(){
          var d=$("#tp").val();
		  if(d=="OTHER"){
		  $("#missshow").fadeIn(1000);
		  }
		  else{
		  $("#missshow").fadeOut(1000);
		  }
              });
         });
</script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $("#nl").change(function(){
          var d=$("#nl").val();
		  if(d=="OTHER"){
		  $("#postshow").fadeIn(1000);
		  }
		  else{
		   $("#postshow").fadeOut(1000);
		   }
              });
         });
</script>	
	
	
	

<style>
#News,#event,#press,#speech,#mission,#carousel,#team,#notification,#delete,#missshow,#postshow,#gellery{
display:none;
}
</style>
    
  </head>
  
  
  
  <body>
  
  <?php
if(!isset($_COOKIE["user"])){
header("location:404.asp");
}

else{
?>
  
  
  
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="in.php">Edutainment</a></h1>
	              </div>
	           </div>
			   <div class="col-md-5">	        </div>
			    <div class="col-md-2">
	             <h4 style="color:#FFFFFF"><a href="logout.php">Logout</a></h4> 
	        </div>
	           
           </div>
	           <div class="col-md-2">	        </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  <div class="w3-card-4">
		  	<div class="sidebar content-box">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"> Home</a></li>
                    <li><a href="#" class="News">News</a></li>
					<li><a href="#" class="event">Event</a></li>
					<li><a href="#" class="press"> Press</a></li>
					<li><a href="#" class="gellery">Gellery</a></li>
					
			        <li><a href="#" class="speech">Speech</a></li>
					<li><a href="#" class="mission"> Mission & vision</a></li>
					<li><a href="#" class="carousel">Carousel pic</a></li>
                    <li><a href="#" class="notification">Notification</a></li>
                    <li><a href="#" class="team"> Team</a></li>
					<li><a href="#" class="delete">Delete Last 10</a></li>
		  </ul></div></div></div>
		  
		  
		  <div class="col-md-8">
		  
		  
		  <div id="News">
		  <div class="w3-card-8" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="newsset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Date</label></div>
					<div class="col-sm-7">
					<input type="date" name="data" class="form-control" placeholder="chapter name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Photo</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="event">
		  <div class="w3-card-8" style="height:520px">
					<form method="post" enctype="multipart/form-data" action="eventset.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Date</label></div>
					<div class="col-sm-7">
					<input type="date" name="data" class="form-control" placeholder="chapter name"></div></div><br>
					
                     <div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">time</label></div>
					<div class="col-sm-7">
					<input type="text" name="time" class="form-control" placeholder="time"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Event Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="ename" class="form-control" placeholder="event name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Event Leaders</label></div>
					<div class="col-sm-7">
					<textarea name="leader" class="form-control" cols="10" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Event Venue</label></div>
					<div class="col-sm-7">
					<input type="text" name="venue" class="form-control" placeholder="venue"></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					
					
					<div id="press">
		  <div class="w3-card-8" style="height:400px">
					<form method="post" enctype="multipart/form-data" action="pressset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Published Date</label></div>
					<div class="col-sm-7">
					<input type="date" name="data" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Title oF News</label></div>
					<div class="col-sm-7">
					<input type="text" name="title" class="form-control" placeholder="Headline"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Leader Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="person" class="form-control" placeholder="spoke person"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="gellery">
		  <div class="w3-card-8" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="gellaryset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Photo</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="speech">
		  <div class="w3-card-8" style="height:550px">
					<form method="post" enctype="multipart/form-data" action="speechset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Leader Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="lname" class="form-control" placeholder="Leader name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Title</label></div>
					<div class="col-sm-7">
					<input type="text" name="title" class="form-control" placeholder="title"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Published Date</label></div>
					<div class="col-sm-7">
					<input type="date" name="data" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">venue</label></div>
					<div class="col-sm-7">
					<input type="text" name="venue" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">time</label></div>
					<div class="col-sm-7">
					<input type="text" name="time" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Discription</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">youtube video link</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control"></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="mission">
		  <div class="w3-card-8" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="missionset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Type Vision<label></div>
					<div class="col-sm-7">
					<select name="type" class="form-control" id="tp" >
					<option>Type under</option>
					<option value="ECONOMICAL">ECONOMICAL</option>
					<option value="EDUCATION">EDUCATION</option>
					<option value="SOCIAL">SOCIAL</option>
					<option value="FOERGION">FOERGION</option>
					<option value="MEDICAL">MEDICAL</option>
					<option value="OTHER">OTHER</option>
					</select></div></div><br>
					<div id=missshow>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Other Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="typee" class="form-control" placeholder="chapter name"></div></div><br>
					</div>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pdf</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
                    <div id="team">
		  <div class="w3-card-8" style="height:550px">
					<form method="post" enctype="multipart/form-data" action="teamset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Type Of post<label></div>
					<div class="col-sm-7">
					<select name="type" class="form-control" id="nl" >
					<option>Type under</option>
					<option value="President">President</option>
					<option value="Vice President">Vice President</option>
					<option value="OTHER">OTHER</option>
					</select></div></div><br>
					<div id=postshow>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Other Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="typee" class="form-control" placeholder="other"></div></div><br>
					</div>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Leader Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="funame" class="form-control" placeholder="Name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Photo</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Fb Page Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="fbname" class="form-control" placeholder="Fb link"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Tweter Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="twname" class="form-control" placeholder="tweeter"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>

					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="carousel">
		  <div class="w3-card-8" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="carouselset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Photo</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					
					<div id="notification">
		  <div class="w3-card-8" style="height:300px">
					<form method="post" enctype="multipart/form-data" action="notificationset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Notofication</label></div>
					<div class="col-sm-7">
					<input type="text" class="form-control" name="noti" placeholder="Notification"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>

					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>





					
					
					
										
					<div id="delete" class="w3-card-4">
					
					<table class="w3-table table-responsive" style="background-color:#CCCCCC">
					<tr>
					<th>Type Containt</th>
					<th>Containt</th>
					<th>Delete</th>
					</tr>
					
					<?php
					include("poli.php");
	               $x=1;
	        	$rs=mysql_query("select * from tutorial where flag=1");
		         while($r=mysql_fetch_array($rs)){
		         $x=$x+1;
		          }
		         $x=$x-1;
		         $j=$x-3;
				 $num=3;
				
					
					$rs=mysql_query("select * from tutorial where flag=1 order by sn DESC");
					while($r=mysql_fetch_array($rs)){
					if($r[0]<=$x && $r[0]>$j){
                      ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td><?=$r[2]?></td>
					  <td ><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[2]?>" class="w3-hover-blue-grey">Delete</a></td>
					  </tr>
					  <?php
					 }
					 }
					  ?>
					  </table> <div id="s"></div>
					  <button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:70px; margin-bottom:100px;">Load more</button></div>
</div>
    	</div></div>
		  
	<?php
	}
	?>	  
		  
		  
		  
		  
		  
		  </body></html>