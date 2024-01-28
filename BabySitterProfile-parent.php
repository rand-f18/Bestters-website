<?php
          
session_start();
 if(!isset($_SESSION['em'])) {
 header("location: homepage.php");}
                     
?>
<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8" >
	          <title>Bestters | BabySitter Profile</title >
			  <link rel="stylesheet" href="styleBSP.css">
			  <link rel="stylesheet" href="style.css">
              <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
			  <meta name="viewport" content="width=device-width", initial-scale="1">
   </head>
   
   <body>
    
   
        <div class="container">
		
		   <div class="personalInfo">
		      
			  <p class="titlehead">Personal Information</p>
		          <?php 
				         if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                           die( "<p>Could not connect to database</p>" );
                                                          
            if ( !mysqli_select_db( $database, "bestTers") )
                 die( "<p>Could not open URL database</p>" );

            $national=$_GET['NationalID'];
						
			$query="SELECT * From babysitter WHERE nationalID='$national' ";
			
			if(!$table=mysqli_query($database, $query))
			  die('failed to query');
			//  if (mysqli_num_rows($table)==0){
    //echo "<br>";
    //echo "<tr><p style='color:#FF5A30;font-size:20px;'>No profile info</p></tr>";}
     //  else{
//
        if($row=mysqli_fetch_assoc($table)){
			
			
			// ?>
				  
				
				  
				  
				  
				  
				  <img class="profile-photo" src="<?php echo $row['ProfileImage']; ?>" alt="profile-photo"><!--??-->
				  
				  <!--img class="overallrating" src="BSP-img/fullstars.png"  alt="stars"-->
				  
				  <p class="bio"><?php echo $row['Bio']; ?> </p><!--should we remov itfrom ul???++img dont forget-->
				 <div class="babysitterInfo">
			     <ul>
				      
				      <li><?php echo $row['FirstName']; ?> </li>
					  <li> <?php echo $row['Age'];?> years old</li>
					  <li><?php echo $row['Gender']; ?></li>
					
					  <li> <?php echo $row['City']; ?></li>
					  <li>Contact for interview:<ul>
					    <li><span class="contactlist" ><a class="contactinfo" href="tel:"><?php echo $row['PhoneNumber']; ?> </a></span></li>
					    <li><span class="contactlist" ><a class="contactinfo" id="mail" href="mailto:"> <?php echo $row['Email']; ?></a></span></li>
					  	</ul></li>	
				 
				 
				 </ul>
				 </div>
				 
				 <!--div class ="buttonContact"-->
			     <!--input type="submit" value="Contact For interview"> <link for number or email or should we link above-->
			     <!--button class="buttoncontact" type="button" >Contact For interview</button-->
				 <!-- enddiv-->
		  <?php } 
		   
		   ?>
		  
		   </div><!--end pesonal info-->
		   
		   <p class="titlehead">Rating &amp; Reviews</p>
		   <div class="ratingreviews">
		        
<table>
<tbody>
<tr>
<?php
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                           die( "<p>Could not connect to database</p>" );
                                                          
            if ( !mysqli_select_db( $database, "bestTers") )
                 die( "<p>Could not open URL database</p>" );

           // $national2=$row['NationalID'];
						
			$query4="SELECT * From ratings WHERE BabysitterID='$national' ";
			//echo "$national";
			if(!$table4=mysqli_query($database, $query4))
			  die('failed to query8');
			  if (mysqli_num_rows($table4)==0){
    echo "<br>";
    echo "<p style='color:#FF5A30;font-size:20px;'>No ratings & reviews</p>";}
      else{
//
        while($row4=mysqli_fetch_row($table4)){
			
			//if($row4=mysqli_fetch_row($table4)){
            print"<td>";
              print" <div style='width:300px' class='FirstReview'>"; 
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
				   
                  print"<div class ='review'>"; 
                  print"<br>";
                  echo $row4[3];
                  print"</div>";
				  print"</div>";
print"</td>";					
									}//end while 1st review

		}//end else


?>
</tr>

</tbody></table>
               
		   
		   
		   
		   </div><!--rating-->
		   
		   		
		
		
		
		
		</div>
		
		<!--Side bar Parent change it-->
		<div class="parent_body">  <!--for PARENT not babysitter change it-->
            <div class="side_bar">
                <nav>
                    <ul>
                        <li>
                            <br>
                                <img src="images/lo.png" alt="" width="80" height="45">
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
	
	</div>
	<!--end-parentbody-->

   </body>
   
 </html>