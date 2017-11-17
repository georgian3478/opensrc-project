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
			<li><a href="#" data-toggle="modal" data-target="#modal1">Our Projects</a></li>
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
<header style="background: url('images/4.jpg');">
<div class="text-center">
	<h1>Home Builders</h1>
	<p>Let&apos;s build What you want</p>


	<div class="container-fluid">
	<!--<div class="page-header">-->
	
	
	<form class="col-md-6 col-md-offset-3">
		
		<div class="form-group">
		<label style="color: black">E-mail*</label>
		<input type="email" class="form-control" name="email" required placeholder="Enter Your E-mail">
		</div>

		<div class="form-group">
		<label style="color: black">Password*</label>
		<input type="Password" class="form-control" name="password" required placeholder="Enter Password">
			</div>
       <div class="form-group">
		<input type="Submit"  value="Submit" name="login_submit" class="btn btn-danger btn-block " required>
			
		</div>
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
	<div class="modal fade" id="modal1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background:#ffebee;border-radius:4px;">Home Builder
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-footer">
				<div style="text-align:left;">For seeing Our projects First Login please<br>Thanks You</div>
					
					<button class="btn btn-danger" onclick="location.href = 'login.php';">Login</button>
				</div>
			</div>
		</div>
	</div>
</body>
	</html>

	<?php 
	if(isset($_GET["login_submit"]))
	{
	
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
				$emai = $_GET['email'];
				$query = "SELECT email,name,password FROM sign_up WHERE email ='$emai'";
				$run = mysql_query($query,$conn);
				$result = mysql_fetch_assoc($run);
			    if(($_GET['email'] == $result['email']) && ( $_GET['password']==$result['password'])) {
				session_start();
				$_SESSION['message1'] = $result['email'];
				$_SESSION['message2'] = $result['name'];				
				//header('Location: builder.php?');
				echo'<script> window.location="builder.php"; </script> ';
				echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('login successfully!!')	</SCRIPT>");
				}
				else{
					echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Email or password is incorrect!!')	</SCRIPT>");
				}
				
			
			
		
		}
			
}		
?>
