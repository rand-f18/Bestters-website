<!--BabysitterPage-->
<?php
session_start();
if(!isset($_SESSION['em'])){
header("Location:homepage.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bestters | Babysitter</title> <!--babysitter homepage-->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width", initial-scale="1">
</head>

<body class="parent_body">
    <img  src="images\welcome.png" id="babysitter_bg" alt="pic" >

    <img  src="images\yellow.png" id="babysitter_bg" alt="pic" width="500" height="500">

    <div class="side_bar">
    <nav>
        <ul>
            <li>
                    <img src="images\lo.png" alt="" width="80" height="45">
                    <span class="nav-item"></span>
                    <br>
                    <br>
                    <br>
                </li>

            <li><a href="EditProfileBabysitter.php">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span><!--Hanin-->
            </a></li>

            <li><a href="babySitterJobList.php">
                <i class="fas fa-file-circle-plus"></i>
                <span class="nav-item">Offer List</span><!--??-->
            </a></li>

            <li><a href="BookingStatus.php">
                <i class="fas fa-file-circle-question"></i>
                <span class="nav-item">Requests Status</span><!--??-->
            </a></li>
            
            <li><a href="CurretJobs.php">
                <i class="fas fa-file"></i>
                <span class="nav-item">Current Booking</span><!--Current Jobs /Reema-->
            </a></li>

            <li><a href="previousBooking.php">
                <i class="fas fa-file-circle-check"></i>
                <span class="nav-item">Previous Booking</span> <!--Prevois Jobs /jana-->
            </a></li>

           <li><a href="RatePage.php">
                <i class="fas fa-solid fa-star"></i>
                <span class="nav-item">Ratings</span>
            </a></li>

            <li><a href="babysitterpage.php">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span><!--DELETE IT ?? already in homepage for <babysitter-->
            </a></li>

            <li><a href="homepage.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <a style="margin:-60px -50px 0px 60px" href="Logout.php" onclick="return confirm('Are you sure you want to logout?') "><span  class="nav-item" >Log Out</span><!--homepage--></a>
            </a></li>
        </ul>
    </nav>
    </div>

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