<?php 
    session_start();

   if(!isset($_SESSION['em']))
       header("Location: homepage.html?error='pleas login and if you are a new user you can sign up'");

     else
    {
        ?>
<!DOCTYPE html>

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
print("<div class='row'>");
$x=$_SESSION['em'];
 $query3="SELECT NationalID FROM BabySitter WHERE Email='$x' ";
if(!$table3=mysqli_query($con,$query3))
 die("failed to query 3");
 if(mysqli_num_rows($table3)==0){
    echo "<br>";
    echo "<p style='color:#FF5A30;font-size:20px;'>There is no Previous bookings yet</p>";
 die();}

while($row3=mysqli_fetch_row($table3))
$nationalid=$row3[0];
$query="SELECT * FROM bookings WHERE BabySitterID='$nationalid' ORDER BY DATE ASC , StartingTime ASC" ;

if(!$table=mysqli_query($con,$query))
die("failed to query");
$count=0;
// print("<div class='row'>");
if(mysqli_num_rows($table)==0){
echo "<br>";
echo "<p style='color:#FF5A30;font-size:20px;'>There is no Current bookings yet</p>";}
else{
while($row=mysqli_fetch_row($table)){
    if($row[3] . " " . $row[5]>=date('Y-m-d H:i:s') && $row[7]=='accepted'){
    $query2="SELECT * FROM jobRequests WHERE '$row[9]'=JobReqID  ";//
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
   <?php /*

       



            <div class="FirstBookingInfo">
                <div class ="kidInfo">
                    <p>Booking Information</p>
                    <ul>
                        <li> Kid's Name| lama</li>
                        <li> Kid's Age| 6 years </li>
                        <li> Service| BabySitting</li>
                        <li>Date| 10/11/2022</li>
                        <li>Time| 5:30pm - 10:30pm  </li>
                        <li>Total Price| 200SR</li>
                        <li>District| Al-nafel</li>
                       <li><a href="https://goo.gl/maps/CSkQUBAZ4LB7hLAK8" > <img class="LocationImg" src ="/images/location.png" height="20" width="15"
                            alt="kid location icon"></a></li>
                       <li><img class="profileImg" src="/images/boy.png" height="45" width="45" alt="kid profile picture"></li>
                    </ul>

                </div>

            </div> 



                <div class="SecondBookingInfo">
                    <div class ="kidInfo">
                        <p>Booking Information</p>
                        <ul>
                            <li> Kid's Name| Sara</li>
                            <li>Kid's Age| 5 years</li>
                            <li> Service| OverNight</li>
                            <li>Date| 15/11/2022</li>
                            <li>Time| 5:30pm - 8:30pm  </li>
                            <li>Total Price| 120SR</li>
                            <li> District| Al-Khozama </li>
                           <li><a href="https://goo.gl/maps/dyBCZCMkSKbKZQEB7" > <img class="LocationImg" src ="/images/location.png" height="20" width="15"
                                alt="kid location icon"></a></li> 
                              <li><img class="profileImg" src="/images/girl.png" height="75" width="75" alt="kid profile picture"></li> 

    
                        </ul>
                    </div>
                </div> 

     </div>
*/?>
<div class="parent_body">
    <div class="side_bar">
        <nav>
            <ul>
                <li>
                        <img src="/images/lo.png" alt="" width="80" height="45">
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