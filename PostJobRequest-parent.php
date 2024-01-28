<!--PostJobRequest-->

<!DOCTYPE html>
<?php
	session_start();
if(!isset($_SESSION['em'])) {
	header("location: homepage.html");}
		
		
?>
<html>
   <head>
   <meta charset="utf-8" >
	          <title>Bestters | New Job Requests</title >
			  <link rel="stylesheet" href="styleNj.css">
			  <link rel="stylesheet" href="style.css">
              <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
			  <meta name="viewport" content="width=device-width", initial-scale="1">
   </head>
   
   <body>
    <div class="container">
	  
	  <div class="title">Post New Job Request</div>
	  
	  
	     
	   
	    <form method="post" action="PostJobRequest-parent.php"><!--link to job request"JobReq-parent.php"  PostJobRequest-parent.php??--> 
		  
		  <div class= "user-details">
		  
		      <div class ="input-box">
			     <span class="details">Number of kids:</span>
				 <input type="number" min="1" name="numKid" placeholder="Enter number of kid/s " required>
			  </div>
		 
			 <div class ="input-box">
			     <span class="details">Kid/s Name:</span>
				 <input type="text" name="kidName" placeholder="ex:sara-leen" pattern="[a-z-A-Z']{2,80}" required>
			  </div>
			  
			  <div class ="input-box">
			     <span class="details">Kid/s age:</span>
				 <input type="number"  min='1'  name="kidAge" placeholder="ex:3-8" pattern="[9-0]+([-\,][0-9]+)?" required>
			  </div>
			  
			  <!--div class ="input-box">
			     <span class="details">Service:</span>
				 <input type="text" placeholder="Enter the type of service " required>
			 </div-->
			 
			  <div class ="input-box">
			     <label class="details">Service:</label>
				 <select name="service" required>
				 <option hidden>Select the type of service</option>
				 <option>Infant baby-sitting</option>
				 <option>Special needs </option>
				 <option>Day care </option>
				 <option>Overnight baby-sitting</option>
				 <option>Helping homeworks</option></select>
			   </div>
			   
			  <div class ="input-box">
			     <span class="details">District:</span> 
				 <input type="text" name="district" placeholder="Enter district" pattern="[a-z-A-Z']{2,80}" required>
			 </div>
			  
			  <div class ="input-box">
			     <span class="details">Date:</span> <!--THERE'S ERROR on place holder should-->
				 <input type="date" name="date" min="2022-11-09" required>
			  </div>
			  
			  <div class ="input-box">
			     <span class="details">From Hour:</span>
				 <input type="Time" name="startTime"  required><!--min="11:30:00"-->
			  </div>
			  
			  <div class ="input-box">
			     <span class="details">To Hour:</span>
				 <input type="Time" name="endTime"  required><!--min="11:30:00"-->
			  </div>
			  
			  
			 
		  </div>
		  
		     <div class ="button">
			   <input class="button1" type="submit" value="Submit" name="done"><!--links-->
			 </div> 
			 
			    
       </form>
	          <div class ="button">
			   <button onclick="window.location.href='JobRequest-parent.php'" class="button1" type="button" value="Cancel">Cancel</button><!--links??-->
			 </div>
    </div>
	<?php  //correct date not past, check not empty , time at least start after one hour if now is 1pm starting time from2pm
            /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "bestters") )
                    die( "<p>Could not open URL database</p>" );
				
                 //$numKid = isset($_POST['kidName'])?$_POST['kidName']:"" ;*/
				 
				 
                  if(isset($_POST["done"])) {
                 if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );

                 if ( !mysqli_select_db( $database, "bestters") )
                    die( "<p>Could not open URL database</p>" );
				
                 //$numKid = $_POST['numKid'] ;
                 $kidName =  $_POST['kidName'] ;
                 $kidAge =  $_POST['kidAge']  ;
                 $service = $_POST['service']  ;
				 $district =  $_POST['district']  ;
                 $date =  $_POST['date']  ;
                 $startTime = $_POST['startTime'] ;
				 $endTime = $_POST['endTime'];  
				 $x=$_SESSION['em'];
				
                 $query="INSERT INTO jobrequests (KidName,KidAge,Service,Date,StartingTime,EndingTime,District,ParentEmail,reqStatus) 

				 VALUES ('$kidName','$kidAge','$service','$date','$startTime','$endTime','$district','$x','pending')";
				 ////PUT thissss >>> $_SESSION['em']
				 
				 //important put parentid here >> where parentemail==$_SESSION['em']>>used id not emails
				 
                 				 
				 if(! $result=mysqli_query($database, $query) )
				die("</body></html>");
			 header("location: JobRequest-parent.php");
			
			}

                // header("location: JobReq-parent.php");

                 /*if($result)
                     header("location: JobReq-parent.php");
        
                 else
                     echo "An error occured while inserting into the branch table.";*/
             
			 //}
        
		?>

  
	<div class="parent_body"><!--for PARENT not babysitter change it-->
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

	<!--end-parentbody-->
   </body>


</html>