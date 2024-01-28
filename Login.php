<!--Login out-->
<!--Login-->
<?php
session_start();
if(isset($_SESSION['em'])){
header("Location:parentpage.php");}
else if(isset($_SESSION['em'])){
header("Location:babysitterpage.php");}
else{
?>
<!DOCTYPE html>

<html>
      <head>  <!--HEADER sign up-->
	          <meta charset="utf-8" >
	          <title>Bestters | Login</title >
			  <!--link rel="stylesheet" href="header styke.css"-->  <!--take it from j DONT FORGET--> 
			  <link rel="stylesheet" href="styles.css">
			  <link rel="stylesheet" href="login.css">
			  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
			  <meta name="viewport" content="width=device-width", initial-scale="1">

			  <style type="text/css">
      .alert-alertt-danger-login{text-decoration:blink;
    color:red;
    font-weight:bolder;
    font-size:16px;
    text-align:center;
    margin-right:-9px;
    }
</style>
	  </head> 
	  <body>
		<header>
			<ul> 
				<li>
				<img src="images\lo.png" alt="logo" >
				</li>
				<li id="home"> <a href="homepage.php">Home </a></li>
			</ul>
		</header>
	    <div class="center">
		
	    <p class="titlehead"> Login </p>
		  <form  action="ValidLogin.php"  method="post"> <!--LINK TO PARENT HOMEPAGE-->
		     <div class="txt_field">
			 <?php
if(isset($_GET['errorlogin']))
echo "<div class='alert-alertt-danger-login' role='alert'>".$_GET['errorlogin']."</div>";
?>
			    <label>Email</label>
		        <input type = "email" placeholder="Enter Email" required name="em">
				<span></span>
			     
			 </div>
			 
			 <div class="txt_field">
			    <label>Password</label>
		        <input type = "password" minlength="6" placeholder="Enter Password" required name="pw">
				<span></span> 
			      
			 </div>
			 <input type="submit" value="Login" name="sublogin">

			<!-- <div class="signup_link">
                <a href="forgetPassword.php">Forget Password?</a>
             </div>-->
			 
			 <div class="signup_link">
			  Not a member?<a href= "homepage.php">Join us</a><!--sign up page or home-->
			  <!--
			  <div class="signup_link">
			  Not a member?<a href= "forget_password.php">Rest  Password</a>
			 </div>-->
		  
		  </form>
		  </div>
      </body>
	  </html>
	  <?php
}
?>
	