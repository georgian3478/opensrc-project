<!DOCTYPE html>
<html>
<head>
	<title>The Builder Contact Us Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom ">
		<div class="container-fluid">
      <div class="navbar-header">
       <a href="builder.html"><img src="images/Homelogo.png" class="navbar-left" style="margin-top: 0px;  " ></a>
      	
      </div>
		<ul class="nav navbar-nav">
		 <li><a href="builder.html">Home Builder</a></li>
			<li><a href="builder.html">Home</a></li>
			<li><a href="builderproject.html">Our Projects</a></li>
			<li><a href="About.html">About Us</a></li>
			<li><a href="Contact.html">Contact Us</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">Login</a></li>
			<li><a href="sign.php">sign up</a></li>
			
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">shiva
			<span class="caret"></span></a>

<ul class="dropdown-menu">
	<li><a href="#">My profile</a></li>
		<li><a href="#">delete account</a></li>
			<li><a href="#">logout</a></li>
</ul>
</li>
</ul>

</div>
</nav>
<header style="background: url('images/12.jpg');">
<div class="text-center">
	<h1>Home Builders</h1>
	<p>Let&apos;s build What you want</p></div>


	<div class="container-fluid">
	<!--<div class="page-header">-->
	
	
	<form class="col-md-6 col-md-offset-3">
		<div class="form-group">
		<label style="color: white;text-shadow: 0 0 10px black;">Name*</label>
		<input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
			
		</div>
		<div class="form-group">
		<label style="color: white;text-shadow: 0 0 10px black;">E-mail*</label>
		<input type="email" name="email" class="form-control" required placeholder="Enter Your E-mail">

		<div class="form-group">
		<label style="color: white;text-shadow: 0 0 10px black;">Password*</label>
		<input type="Password" name="password" class="form-control" required placeholder="Enter Password">
			
		</div>
			
		</div>
		<div class="form-group">
		<label style="color: white;text-shadow: 0 0 10px black;">Contact Number*</label>
		<input type="text" name="contact" class="form-control" required placeholder="Enter Your Contact Number">
			
			
		</div>
		<div class="form-group">
		<input type="Submit"  value="Submit" name="sign_submit" class="btn btn-danger btn-block " required>
			
		</div>
		</div>

	</form>
	</header>
	
	

	
	</div>
	<div class="footer text-center col-md-12">
	<div class="col-md-3 col-md-offset-1">
		<a href="https://www.facebook.com/" title="Website name"><i class="fa fa-facebook-official fa-2x navbar-left ";  aria-hidden="true";></i></a>
		<a href="https://www.linkedin.com" title="Website name"><i class="fa fa-linkedin-square fa-2x navbar-left "; aria-hidden="true";></i></a>
		<a href="https://www.instagram.com/?hl=en" title="Website name"><i class="fa fa-instagram fa-2x navbar-left "; aria-hidden="true";></i></a>
		<a href="https://www.youtube.com/?hl=en" title="Website name"><i class="fa fa-youtube-play fa-2x navbar-left "; aria-hidden="true";></i></a>


	</div>
	<div class=" col-md-6 col-md-offset-2" style="text-align: left;">
		Copyright &copy;reserved,2017 

	</div>
	</div>
</body>
	</html>


	<?php 

	if(isset($_GET["sign_submit"]))
	{
	
	echo "fgdsvdvk";
		$server = "localhost";
		$username = "shankarshiv097";
		$db = "home_builder";
		$conn = mysql_connect($server,$username,"Shiva@12");
		if(!$conn)
		{
			echo "plz try again";
		}
		else
		{
			$conn2 = mysql_select_db($db,$conn);
			echo "dfbhfdbv";
		}
		
		  $users_name = $_GET['name'];
		  $users_email = $_GET['email'];
		  $users_password = $_GET['password'];
		  $users_contact = $_GET['contact'];
		 
		  

		  $users_name = mysql_real_escape_string($users_name);
		  $users_email = mysql_real_escape_string($users_email);
		  $users_password = mysql_real_escape_string($users_password);
		  $users_contact = mysql_real_escape_string($users_contact);
		
		
		  $sql="select email from sign_up where email='".$users_email."'";
			$result=mysql_query($sql);
		$number=mysql_num_rows($result);
		if($number ==0 ){
			echo "fgfyhvuyjgbjgvgh";
			$sqlwrite = "INSERT INTO  `sign_up` (`name` ,`email` ,`password` ,`contact`)
							VALUES ('$users_name ',  '$users_email','$users_password',' $users_contact');";
		$run2 = mysql_query($sqlwrite);
		//echo ("<SCRIPT LANGUAGE='JavaScript'>
				//window.alert('registerd successfully')
				//		</SCRIPT>");
		echo'<script> window.location="login.php"; </script> ';
		//header('Location: /login.php');
		}	
		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Email is already registerd')
						</SCRIPT>");
		}
				 /* Redirect browser */
		exit();		
}		
?>
