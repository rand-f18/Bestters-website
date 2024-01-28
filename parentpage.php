<?php
session_start();
if(!isset($_SESSION['em']))
header("Location:homepage.php");
else{

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bestters | Parent</title>
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
                <br>
                
                    <img src="images\lo.png" alt="" width="80" height="45">
                    <span class="nav-item"></span>
                    <br>
                    <br>
                    <br>
                </li>

            <li><a href="EditProfile.php">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span><!--hanin-->
            </a></li>

            <li><a href="JobRequest-parent.php">
                <i class="fas fa-file-circle-plus"></i>
                <span class="nav-item">Job Requests</span><!--Abeer-->
            </a></li>
            
            <li><a href="ParentCurrentBooking.php">
                <i class="fas fa-file"></i>
                <span class="nav-item">Current Booking</span><!--Reema-->
            </a></li>

            <li><a href="parentPreviousBookings.php">
                <i class="fas fa-file-circle-check"></i>
                <span class="nav-item">Previous Booking</span><!--Reema-->
            </a></li>

            <li><a href="parentpage.php">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
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