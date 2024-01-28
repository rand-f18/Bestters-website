
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
        <title>Bestters | Previous Booking</title>
        <link rel="stylesheet" href="parentPrev.css">
        <link rel="stylesheet" href="s.css">
        <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script> 
        <meta name="viewport" content="width=device-width,initial-scale=1">   

    </head>


    <body>
    <div class="AllBookingInfo">
            <p class="titlehead">Previous Bookings<p>
            <?php
 
 if (!$con= mysqli_connect("localhost","root",""))
 die("failed to connect to connection");
 if(!$db=mysqli_select_db($con,"bestTers"))
 die("failed to connect to data base");
 $query='SELECT * FROM bookings ORDER BY DATE DESC , StartingTime DESC';
 
 if(!$table=mysqli_query($con,$query))
 die("failed to query");
 $count=0;
 print("<div class='row'>");
 if(mysqli_num_rows($table)==0){
 echo "<br>";
 echo "<p style='color:#FF5A30;font-size:20px;'>There is no previous bookings yet</p>";}
 else{
 while($row=mysqli_fetch_row($table)){
    $query5="SELECT * FROM babysitter WHERE '$row[8]'=NationalID";//
    if(!$table5=mysqli_query($con,$query5))
    die("failed query5");
 
 
     if($row[3] . " " . $row[5]<=date('Y-m-d H:i:s') && $row[7]=='accepted'){
        $x=$_SESSION['em'];
     $query2="SELECT * FROM jobRequests WHERE ParentEmail='$x' AND '$row[9]'=JobReqID ORDER BY DATE DESC , StartingTime DESC"; //NOT SURE FOE ASCand parentEmail='$_SESSION['em']'
     if(!$table2=mysqli_query($con,$query2))
     die("failed to query 2");
 
/*if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");
print("<div class='row'>");
$query3="SELECT NationalID FROM BabySitter    ";//WHERE Email='$_SESSION['em']'
if(!$table3=mysqli_query($con,$query3))
 die("failed to query 3");

 if(mysqli_num_rows($table3)==0){
    echo "<br>";
    echo "<p style='color:#FF5A30;font-size:20px;'>There is no Previous bookings yet</p>";

 die();}

while($row3=mysqli_fetch_row($table3))
$nationalid=$row3[0];
$query="SELECT * FROM bookings WHERE BabySitterID='$nationalid' ORDER BY DATE DESC , StartingTime DESC";

if(!$table=mysqli_query($con,$query))
die("failed to query");
$count=0;
//print("<div class='row'>");
if(mysqli_num_rows($table)==0){
echo "<br>";
echo "<p style='color:#FF5A30;font-size:20px;'>There is no Current bookings yet</p>";}
else{
while($row=mysqli_fetch_row($table)){

    if($row[3] ." " . $row[5]<date('Y-m-d H:i:s') && $row[7]=='accepted'){
    $query2="SELECT * FROM jobRequests WHERE $row[9]=JobReqID  ";//
    if(!$table2=mysqli_query($con,$query2))
    die("failed to query 2");

*/
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
    $e=$_SESSION['em'];
          $query4="SELECT * FROM Ratings WHERE  ParentEmail='$e' and bookingID=$row[0]";//
          if(!$table4=mysqli_query($con,$query4))
          die("failed query 4");
          if($row4=mysqli_num_rows($table4)==0) {
            print"<Form  action='starRatingRadio.php' method='post'>
            <input style='margin:10px 30px 0px 10px'class='reviewButton' type='submit' value='Review BabySitter'>
            <input type='hidden' value='$row[8]' name='babySitterId'>
            <input type='hidden' value='$row[0]' name='bookingId'>
            <input type='hidden' value='$row5[11]' name='sitterImage'>
        </Form>";            // <input type='hidden' value='$row4[2]' name='parentEmail'>
            
          }
          else{
            if($row4=mysqli_fetch_row($table4)){
            
                if($row4[4]==0){
                  
               echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
               echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
               echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
               echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
               echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                }
                if($row4[4]==1){


                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 0px'> ";

                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px -10px 0px 30px '> ";
                   print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 60px '> ";
                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 90px'> ";
                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 120px'> ";
     }  if($row4[4]==2){
                     

                        print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 0px'> ";
                        print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px -10px 0px 30px '> ";
                       print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 60px '> ";
                        print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 90px'> ";
                        print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 120px'> ";
             }  if($row4[4]==3){
                          
                            print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 0px'> ";

                            print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px -10px 0px 30px '> ";
                           print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 60px '> ";
                            print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 90px'> ";
                            print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 120px'> ";
                     }
                             if($row4[4]==4){
                           
                                print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 0px'> ";

                                print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px -10px 0px 30px '> ";
                               print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 60px '> ";
                                print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 90px'> ";
                                print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;margin:-5px 0px 0px 120px'> ";
                             }  if($row4[4]==5){

                                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 0px'> ";

                                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px -10px 0px 30px '> ";
                                   print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 60px '> ";
                                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 90px'> ";
                                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;margin:-5px 0px 0px 120px'> ";
                                    }


//                 for ($i=0;$i<$row4[4];$i++){
//                     echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1'> ";
//               }
//                 for($j=0;$j<5-$row4[4];$j++){
//                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
//    echo "essa";                }

            }
          
          }

    print(" </ul>");

    print("  </div>");
    

    print("</div> ");
    $count++;}


         }}
         if($count==0){
           echo" <br>";
           echo "<p style='color:#FF5A30;font-size:20px;'>There is no Previous bookings yet</p>";
         }}
         print("</div >");

          print("</div >");

  
if(isset($_GET['msg']))
print"<script> window.alert('Rating Have Been Done Successfully!')</script>";






   ?>
   

       <?php
    }
       /*
      if (!$con= mysqli_connect("localhost","root",""))
      die("failed to connect");
      if(!$db=mysqli_select_db($con,"Example"))
      die("failed to connect");
      $query="SELECT * FROM employee";
      if(!$table=mysqli_query($con,$query))
      die("failed to connect");
      $count=0;
      $margup=
      while($row=mysqli_fetch_row($table)){
        if($count==0){
        print("<div class='FirstBookingInfo'>");

        print("  <div class ='kidInfo'>");
                  print("<p>Booking Information</p>");
                   print("<ul>");
                   print(" <li> Kid's Name| $row[0]</li>");
                   print(" <li>Kid's Age| $row[1]</li>");
                   print(" <li> Service| $row[2]</li>");
                   print(" <li>Date| $row[3]</li>");
                   print(" <li>Time|$row[4] </li>");
                   print(" <li>Total Price| 250SR</li>");
                   print("</ul>");
                   print("</div>");

                   print(" <div class='SitterInfo'>");
                   print("  <a href='BabySitterProfile-parent.html'> <img class='profileImg' src ='/images/babysitterPic.png'height='90' width='90' alt='baby Sitter profile icon'></a>");
                   print(" <ul>");
                   print(" <li>Sitter Name| Lara </li>");
                   print(" </ul>");
                   print(" <Form  action='parentRateandReview.html'>"); 
                   //<!--i remove the method="post so it move to the anothe page"-->
                   print(" <input class='reviewButton' type='submit' value='Review BabySitter'>");
                   print("</Form>");

                   print(" </div>");

                   print(" </div> ");
                   $count++; }
 
      else{
        print(
            "<span style='
            
                background-color:rgba(230, 133, 7, 0.276);
                width:180px;
                height: 250px;
                position: absolute;
                margin: 120px 110px 110px 440px;
                border: none;
                border-radius: 40px;
                padding: 10px 50px 50px 20px;
                font-size: 13px;
             
         
                padding: 5px ;
                list-style: none;
            
            }'
           
            >");

            print("<div class=$count>");

            print("  <div class ='kidInfo'>");
                      print("<p>Booking Information</p>");
                       print("<ul>");
                       print(" <li> Kid's Name| $row[0]</li>");
                       print(" <li>Kid's Age| $row[1]</li>");
                       print(" <li> Service| $row[2]</li>");
                       print(" <li>Date| $row[3]</li>");
                       print(" <li>Time|$row[4] </li>");
                       print(" <li>Total Price| 250SR</li>");
                       print("</ul>");
                       print("</div>");
    
                       print(" <div class=$count>");
                       print("  <a href='BabySitterProfile-parent.html'> <img class='profileImg' src ='/images/babysitterPic.png'height='90' width='90' alt='baby Sitter profile icon'></a>");
                       print(" <ul>");
                       print(" <li>Sitter Name| Lara </li>");
                       print(" </ul>");
                       print(" <Form  action='parentRateandReview.html'>"); 
                       //<!--i remove the method="post so it move to the anothe page"-->
                       print(" <input class='reviewButton' type='submit' value='Review BabySitter'>");
                       print("</Form>");
    
                       print(" </div>");
    
                       print(" </div> ");

                      print("</span>");

      }}
*/?>




<?php /*
        <div class="AllBookingInfo">
            <p class="titlehead">Previous Bookings<p>

           
            <div class="FirstBookingInfo">

                <div class ="kidInfo">
                    <p>Booking Information</p>
                    <ul>
                        <li> Kid's Name| Ahmad</li>
                        <li>Kid's Age| 6 years</li>
                        <li> Service| Day Care</li>
                        <li>Date| 10/10/2022</li>
                        <li>Time| 5:30pm - 11:30pm </li>
                        <li>Total Price| 250SR</li>
                    </ul>
                </div>

                <div class="SitterInfo">
                   <a href="BabySitterProfile-parent.html"> <img class="profileImg" src ="/images/babysitterPic.png" height="90" width="90" alt="baby Sitter profile icon"></a>
                    <ul>
                        <li>Sitter Name| Lara </li>
                    </ul>
                    <Form  action="parentRateandReview.html"><!--i remove the method="post so it move to the anothe page"-->
                    <input class="reviewButton" type="submit" value="Review BabySitter">
                </Form>

                </div>

            </div> 



                <div class="SecondBookingInfo">
                    <div class ="kidInfo">
                        <p>Booking Information</p>
                        <ul>
                            <li> Kid's Name| Sara</li>
                            <li>Kid's Age| 8 years</li>
                            <li> Service| Day Care</li>
                            <li>Date| 23/09/2022</li>
                            <li>Time| 5:30pm - 8:00pm  </li>
                            <li>Total Price| 100SR</li>
                        </ul>
                    </div>

                    <div class="SitterInfo">
                        <a href="sitterNora.html"><img class="profileImg" src ="/images/profileIcon.png" height="35" width="35" alt="baby Sitter profile icon"></a>
                        
                        <ul>
                            <li>Sitter Name| Nora</li>
                            <Li><img class="ratingStars" src="/images/halffilledstars.png" alt="rating stars" height="40"></Li>

                        </ul>

                    </div>
                          
                </div> 
           
           
            </div> 
   
            <div class="parent_body"><!--for PARENT not babysitter change it-->
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
                
                            <li><a href="EditProfile.html">
                                <i class="fas fa-user"></i>
                                <span class="nav-item">Profile</span><!--hanin-->
                            </a></li>
                
                            <li><a href="/JobReq-parent.html">
                                <i class="fas fa-file-circle-plus"></i>
                                <span class="nav-item">Job Requests</span><!--Abeer-->
                            </a></li>
                            
                            <li><a href="parentCurrentBooking.html">
                                <i class="fas fa-file"></i>
                                <span class="nav-item">Current Booking</span><!--Reema-->
                            </a></li>
                
                            <li><a href="parentPreviousBookings.html">
                                <i class="fas fa-file-circle-check"></i>
                                <span class="nav-item">Previous Booking</span><!--Reema-->
                            </a></li>
                
                            <li><a href="parentpage.html">
                                <i class="fas fa-home"></i>
                                <span class="nav-item">Home</span>
                            </a></li>
                
                            <li><a href="homepage.html" class="logout">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-item">Log Out</span><!--homepage-->
                            </a></li>
                        </ul>
                    </nav>
                    </div>
                    </div> */?>
                    <div class="parent_body"><!--for PARENT not babysitter change it-->
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