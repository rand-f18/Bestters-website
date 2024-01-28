<!--SignUp Parent-->
<?php
session_start();
//if User already logged
if(isset($_SESSION['em'])){
header("Location:parentpage.php");}
//elseif(isset($_SESSION['pn'])){
//header("Location:parentpage.php");

else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<title>Bestters | SignUp(Parent)</title>
<link rel="stylesheet" href="StyleSignup.css">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width", initial-scale="1">


<style type="text/css">
      .alert-alertt-danger-fname{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-59px;
    }
     .alert-alertt-danger-lname{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-59px;
    }
    .alert-alertt-danger-pass{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-88px;
    }
    .alert-alertt-danger-email{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-62px;
    }
    .alert-alertt-danger-phone{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-62px;
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
<br>
<h2> Hello Parent !</h2>
<h2>Please fill the following:</h2>

<div id="backg">
<form action="signupParentValidtion.php" method="post" >
    <br>
<br>
<br>
<br>
<br>
<br>
<?php
if(isset($_GET['errorfname']))
echo "<div class='alert-alertt-danger-fname' role='alert'>".$_GET['errorfname']."</div>";
?>
     <label>First Name:</label>
    <input type="text" required placeholder="Enter your First Name" name="fname">
    <br>
    <br>
    <?php
if(isset($_GET['errorlname']))
echo "<div class='alert-alertt-danger-lname' role='alert'>".$_GET['errorlname']."</div>";
?>
    <label>Last Name:</label>
    <input type="text" required placeholder="Enter your Last Name" name="lname">
    <br>
    <br>
    <?php
    if(isset($_GET['errorpass']))
echo "<div class='alert-alertt-danger-pass' role='alert'>".$_GET['errorpass']."</div>";
?>
    <label>PassWord:</label>
    <input type="password" minlength="6" required placeholder="Enter your password" name="pw">
    <br>
    <br>
    <label>Re-Enter PassWord:</label>
    <input type="password"  minlength="6"required placeholder="Re-Enter your password" name="rpw">
    <br>
    <br>
    <?php
    if(isset($_GET['erroremail']))
echo "<div class='alert-alertt-danger-email' role='alert'>".$_GET['erroremail']."</div>";
?>
    <label>Email:</label>
    <input type="email" required placeholder="Email" name="em">
    <br>
    <br>
    <?php
    if(isset($_GET['errorphonenumber']))
echo "<div class='alert-alertt-danger-phone' role='alert'>".$_GET['errorphonenumber']."</div>";
?>
    <label>Phone number:</label>
    <input type="text" required placeholder="+966" name="pn">
    <br>
    <br>
<label for="city"> Choose your city:</label>
<select name="city" id="city">
    <option value="Riyadh">Riyadh</option>
    <option value="Tabok">Tabok</option>
    <option value="Umlaj">Umlaj</option>
    <option value="At Taif">At Taif</option>
    <option value="Makkah Al Mukarramah">Makkah Al Mukarramah</option>
    <option value="Hail">Hail</option>
    <option value="Buraydah">Buraydah</option>
    <option value="Al Hafuf">Al Hafuf</option>
    <option value="Dammam">Dammam</option>
    <option value="Al Madinah Al Munawwarah">Al Madinah Al Munawwarah</option>
    <option value="Abha">Abha</option>
    <option value="Uniza">Uniza</option>
    <option value="Jazan">Jazan</option>
    <option value="Jeddah">Jeddah</option>
</select>

    <br>
    <br>
    <label>Address:</label>
    <input type="text" required placeholder="Enter your address" name="add">
    <br>
   <!-- <labael>Neighborhood name:</label>
    <input type="text" required placeholder="Enter your Neighborhood name" name="neighborhood">
    <labael>Street name:</label>
    <input type="text" required placeholder="Enter your Street name" name="street">
    <labael>Home number:</label>
    <input type="text" required placeholder="Enter your Home number" name="hnum">
    <br>-->
    <p>Gender:</p>
    <input type="radio" id="male"  name="Gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="Female" name="Gender" value="Female">
    <label for="Female">Female</label><br>
    <br>
    <label>Upload yor child's picture or cv (Optinal):</label>
    <input type="file" name="pic">
    <br>
   <!-- <p><strong> Write your important notes such as: Child's allergy to a specific food, phobia etc...</strong></p>
<textarea name="subject" cols="37" rows="10" placeholder="Text area"></textarea>-->
    <br>
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <label></label>
   <form action="#"><!--additional by zoom-->
    <input class="submitButton"  type="submit" value="Submit" name="SignupSubmit">
    <label></label>
    <input class="submitButton" type="reset">
</form>
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</form>
</div>
<!--Footer-->
<footer class="footer">

    <div class="footer-content">

        <h3>contact us</h3>

        <ul class="socials">

            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

            <li><a href="#"><i class="fa fa-youtube"></i></a></li>

            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>

        </ul>

    </div>

    <div class="footer-bottom">

        <P>copyright &copy;2022 codeOpacity. designed by <span>Bestters</span></P>

    </div>


</footer>
    </body>
</html>
<?php
}
?>