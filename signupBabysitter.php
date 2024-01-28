<!--SignUp BabySitter-->
<?php
session_start();
//if User already logged
if(isset($_SESSION['em'])){
header("Location:babysitterpage.php");}
//elseif(isset($_SESSION['pn'])){
//header("Location:babysitterpage.php");
//}
//elseif(isset($_SESSION['nid'])){
  //  header("Location:babysitterpage.php");
  //  }
else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<title>Bestters | SignUp(BabySitter)</title>
<link rel="stylesheet" href="StyleSignup.css">
<link rel="stylesheet" href="Style.css">
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
    .alert-alertt-danger-id{text-decoration: blink;
    color:red;
    font-weight:bolder;
    font-size:14px;
    text-align:center;
    margin-right:-59px;
    }
    .alert-alertt-danger-age{text-decoration: blink;
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
<h2> Hello BabySitter !</h2>
<h2>Please fill the following:</h2>

<div id="backg">
<form action="SignupBabysitterValidtion.php"  method="post">
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
if(isset($_GET['errorid']))
echo "<div class='alert-alertt-danger-id' role='alert'>".$_GET['errorid']."</div>";
?>
    <label>ID:</label>
    <input type="text" required placeholder="Enter your ID" name="nid">
    <br>
    <br>
    <?php
if(isset($_GET['errorage']))
echo "<div class='alert-alertt-danger-age' role='alert'>".$_GET['errorage']."</div>";
?>
    <label>Age(+20):</label>
    <input type="number" required min="20" value="20" max='50' name="age" >
    <br>
    <br>
    <?php
    if(isset($_GET['errorpass']))
echo "<div class='alert-alertt-danger-pass' role='alert'>".$_GET['errorpass']."</div>";
?>
    <label>PassWord:</label>
    <input type="password" minlength="6" required placeholder="Enter your password" name="pw" >
    <br>
    <br>
    <label>Re-Enter PassWord:</label>
    <input type="password" minlength="6" required placeholder="Re-Enter your password" name="rpw">
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
    <input type="text" required placeholder="Enter your Address" name="add">
    <p>Gender:</p>
    <input type="radio" id="male"  name="Gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="Female" name="Gender" value="Female">
    <label for="Female">Female</label><br>
    <br>
    <label>Upload yor picture or cv (Optinal):</label>
    <input type="file" name="pic">
    <br>
    <p><strong> Bio(talk about your self ,experinces ,education,skills and languge !)</strong></p>
<textarea name="bio" cols="37" rows="10" placeholder="Text area"></textarea>
    <br>
    <label></label>
    <form action="#"><!-- Maybe it will be deleted because the big form will have action to validate-->
    <input type="submit" value="Submit" name="SignupSubmit">
    <label></label>
    <input type="reset">
</form>
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