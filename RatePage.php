<?php
          
session_start();
 //if(!isset($_SESSION['em'])) {
  //header("location: homepage.php");}
                     
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bestters | My Ratings</title> <!--babysitter-->
        <link rel="stylesheet" href="StylyRating.css">
        <link rel="stylesheet" href="Style.css">

        <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width", initial-scale="1">
       
    </head>
    <body>
    
       <!-- <header>
            <ul> 
                <li>
                <img src="images/logo.png" alt="logo" >
                </li>
                <li id="home"> <a href="#">Home </a></li>
            </ul>
        </header>-->
        <br>
        <div class="BigSpace">
            <p class="titleOverBigSpace">My Ratings &amp; Reviews! </p>
			
			<table>
			<tbody>
			
			<?php 
				   if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                           die( "<p>Could not connect to database</p>" );
                                                          
            if ( !mysqli_select_db( $database, "bestTers") )
                 die( "<p>Could not open URL database</p>" );

            $email=$_SESSION['em'];
				// $email=$_S;		
			$query="SELECT NationalID From babysitter WHERE Email='$email' ";
							
			if(!$table=mysqli_query($database, $query))
			  die('failed to query');
			  
			  if(!$row1=mysqli_fetch_assoc($table))
			   die('failed to query');
		   
		  // echo $row1['NationalID'];
		  $nID=$row1['NationalID'];
		  
		  
		
	$query2="SELECT * From ratings WHERE BabysitterID='$nID' ";
			
			
			if(!$table2=mysqli_query($database, $query2))
			  die('failed to query8');
			  if (mysqli_num_rows($table2)==0){
    echo "<br>";
    echo "<p style='color:#FF5A30;font-size:20px;'>No ratings & reviews</p>";}
      else{
//
        while($row4=mysqli_fetch_row($table2)){
			print("<tr>");
			print("<div style='margin:100px -100px 0px -370px' class='forpic2'>");
            print(" <div class='SmallForRating1' >");
                   
			if($row4[4]==0){
                  
                echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                echo"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5'> ";
                 }
                 if($row4[4]==1){
 
 
                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
 
                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5; '> ";
                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
      }  if($row4[4]==2){
                      
 
                         print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                         print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1; '> ";
                        print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5; '> ";
                         print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                         print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
              }  if($row4[4]==3){
                           
                             print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
 
                             print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1; '> ";
                            print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                             print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                             print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                      }
                              if($row4[4]==4){
                            
                                 print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
 
                                 print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1; '> ";
                                print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1; '> ";
                                 print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                                 print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:0.5;'> ";
                              }  if($row4[4]==5){
                                
                                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
 
                                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                                    print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1; '> ";
                                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                                     print"<img src='/images/fullstars.png' height='30' width='30' alt='rating stars' style='opacity:1;'> ";
                                      }
 
                                      
				 // <!-- end div-->
                 print("<p class='Parent1Rate'>$row4[3]</p>");
			
		

       print(" </div>");
				   
                
              print"<br>";
                //   print"<br>"; print"<br>"; 

                  
             print(" </div>");
			
			
		print("</tr>");
		}
	  }
		
			// ?>
			
			
			
			
			
			
			
			
			
			
			
			
			</table>
			</tbody>
        </div><!--BigSpaceEnd-->
		
		
		
		
		
        <!--sidebar-->
 <div class="parent_body">

    <div class="side_bar">
        <nav>
            <ul>
                <li>
                        <img src="images/lo.png" alt="" width="80" height="45">
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