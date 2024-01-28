<!DOCTYPE html>
<?php 
    session_start();

   if(!isset($_SESSION['em']))
      header("Location: homepage.php?error='please login and if you are a new user you can sign up'");

    else
    {
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bestters | Current Booking</title>
        <link rel="stylesheet" href="parentPrev.css">
        <link rel="stylesheet" href="s.css">
    <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>


    <body>
        <div class="AllBookingInfo">
            <p class="titlehead">Current Bookings<p>
                
<?php

     
if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");
$query='SELECT * FROM bookings ORDER BY DATE ASC , StartingTime ASC';

if(!$table=mysqli_query($con,$query))
die("failed to query");
$count=0;
print("<div class='row'>");
if(mysqli_num_rows($table)==0){
echo "<br>";
echo "<p style='color:#FF5A30;font-size:20px;'>There is no Current bookings yet</p>";}
else{
while($row=mysqli_fetch_row($table)){
    $query5="SELECT * FROM babysitter WHERE '$row[8]'=NationalID";///
   if(!$table5=mysqli_query($con,$query5))
   die("failed query5");

    if($row[3] . " " . $row[5]>=date('Y-m-d H:i:s') && $row[7]=='accepted'){
    $x=$_SESSION["em"];
    $query2="SELECT * FROM jobRequests WHERE '$row[9]'=JobReqID and parentEmail='$x' ORDER BY DATE ASC , StartingTime ASC";//NOT SURE FOE ASC
    if(!$table2=mysqli_query($con,$query2))
    die("failed to query 2");


   if($row2=mysqli_fetch_row($table2)){
    print("<div class='FirstBookingInfo'>");
    print("<div class ='kidInfo'>");
    print(" <p>Booking Information</p>");
    print("<ul>");
    print(" <li> Kid's Name| $row2[1]</li> "); //<!--must be same style&order&labels(name,age,..) all -->
    print(" <li>Kid's Age| $row2[2] years</li>");
    print(" <li> Service| $row2[3]</li>");
    print(" <li>Date| $row2[4]</li>");
    print(" <li>Time| $row2[5] -  $row2[6]  </li>");
    print("<li>District| $row2[7]</li>");
    print("  <li>Total Price|$row[6]SR</li>");
    print("</ul>");
    print(" </div>");

    print("<div class='SitterInfo'>");
    if($row5=mysqli_fetch_row($table5))
    print(" <a href='BabySitterProfile-parent.php?NationalID=$row5[0]' ><img src ='$row5[11]' height='35' width='35' alt='baby Sitter profile icon'></a>");
    print(" <ul>");
    print("    <li>Sitter Name|$row5[1] </li>");//should it be noura ahmad?
           
    print(" </ul>");

    print("  </div>");

    print("</div> ");
    $count++;}}


         }
         if($count==0){
           echo" <br>";
           echo "<p style='color:#FF5A30;font-size:20px;'>There is no Current bookings yet</p>";
         }}
         print("</div >");

          print("</div >");

  

   ?>

 <?php
 }
    ?> 
<?php ?>
        
<div class="parent_body">  <!--for PARENT not babysitter change it-->
    <div class="side_bar">
        <nav>
            <ul>
                <li>
                    <br>
                        <img src="/images/lo.png" alt="" width="80" height="45">
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
                
                <li><a href="parentCurrentBooking.php">
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