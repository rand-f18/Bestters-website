<?php
	session_start();
	
	if(!isset($_SESSION['em'])) {
	 header("location: homepage.php");}
		
	
?>


<!DOCTYPE html>

<html>

   <head>

   <meta charset="utf-8" >

                     <title>Bestters | Edit Job Request</title >

                                   <link rel="stylesheet" href="styleNj.css">

                                   <link rel="stylesheet" href="style.css">

              <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>

                                   <meta name="viewport" content="width=device-width", initial-scale="1">

   </head>

  

   <body>

    <div class="container">

             <div class="title">Edit Job Request</div>
     
	   
	   <?php
     
	   if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );

     if(isset($_POST['JobReqID'])){
		$reqID=$_POST['JobReqID'];

       if($table=mysqli_query($database,"SELECT * FROM jobrequests WHERE JobReqID='$reqID'")){
         //die(mysqli_error());
		
		while($row=mysqli_fetch_assoc($table)){
		//print_r($row);
		?>
		
		<form method='post' action='updateJobReq.php?JobReqID=<?php echo $row['JobReqID']; ?> '>
		
		
               <div class= "user-details">

                <!--div class ='input-box'>

                                    
                                      

                                   </div--> 
								    <input name='JobReqID'type='hidden' value="<?php echo $row['JobReqID']; ?>" >

                                  <div class ="input-box">

                                      <span class="details">Kid/s Name:</span>
                                      
 <input type="text" placeholder="ex:sara-leen" value="<?php echo $row['KidName']; ?> " name="kidName"  pattern="[a-z-A-Z']{2,80}" required>

                                   </div>

                  <div class ="input-box">
			     <span class="details">Kid/s age:</span>
				 <input type="number" max='15' placeholder="ex:3-8" name="kidAge" value="<?php echo $row['KidAge']; ?>" pattern="[0-9]+([-\,][0-9]+)?" required>
			    </div>
                              

                                   <div class ="input-box">

                                      <label class="details">Service:</label>

                                            <select name="service"  required>

                                            <option hidden >Select the type of service</option>

                                            <option value="<?php echo $row['Service']; ?>">Infant baby-sitting</option>

                                            <option>Special needs </option>

                                            <option>Day care </option>

                                            <option>Overnight baby-sitting</option>

                                            <option>Helping homeworks</option></select>

                                    </div>

                                   

                                   <div class ="input-box">

                                      <span class="details">District:</span>

                                             <input type="text" placeholder="Enter district" value="<?php echo $row['District']; ?>" name="district" pattern="[a-z-A-Z']{2,80}" required>

                                 </div>

                                  

                                   <div class ="input-box">

                                      <span class="details">Date:</span> <!--THERE'S ERROR on place holder should-->

                                            <input type="date" min="2022-11-09" value="<?php echo $row['Date']; ?>" name="date" required>

                                   </div>

                                  

                                   <div class ="input-box">

                                      <span class="details">From Hour:</span>

                                            <input type="Time" value="<?php echo $row['StartingTime']; ?>" name="startTime" required>

                                   </div>

                                  

                                   <div class ="input-box">

                                      <span class="details">To Hour:</span>

                                            <input type="Time" value="<?php echo $row['EndingTime']; ?>" name="endTime" required>

                                   </div>

                                  

                                   

                                  

                        </div>

                       

                           <div class ="button">

                                    <input type="submit" class="button1" name="submit" value="Save changes"><!--links-->

                                 </div>

       </form>
	    <div class ="button">
			   <button onclick="window.location.href='JobRequest-parent.php'" class="button1" type="button" value="Cancel">Cancel</button><!--links??-->
			 </div>
    </div>
	
	
		
		<?php
		
		}
	   }
	   }   
	    ?>
	   
	    
             

    </div>


 
    <!----------------------------------------------- side bar and footer ------------------------------------------->




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