<?php
session_start();
if(!isset($_SESSION['em']))
header("Location:homepage.php");

?>

 <!DOCTYPE html>
 <html> 
     <head lang="">
         <meta name="UTF-8" >
         <title>Bestters | Profile</title>
         <!-- <link rel="stylesheet" href="BookingStylesheet.css"> -->
           <link rel="stylesheet" href="EditProfileStylesheet.css" type="text/css">  
         <!-- <link rel="stylesheet" href="style.css"> -->
         <!-- <link rel="stylesheet" href="SignUpStylesheet.css" type="text/css"> -->
            <link rel="stylesheet" href="style.css" type="text/css">  
         
            <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>

 
     </head>
 
     <body> 

     <?php
     include 'connection.php';
      //  session_start();
        $email=$_SESSION['em']; 
      // $email= '' ;
       if(!$query=mysqli_query($dbConnection,"SELECT * FROM parent WHERE Email='$email'"))
         die(mysqli_error());
         
       if($row=mysqli_fetch_array($query)){
     ?>
 
         <div class="container">
              <!-- leftBox -->
             <div class="leftBox">
                 <nav>
                   <!-- left side menu -->
                 </nav>
             </div>

             <!-- rightBox INFO-->
             <div class="rightBox">
                 <div class="profile tabShow">

                    <form method="post" action="#">
                    <h1>Personal Information</h1>
  
         
                     <h2>First Name</h2>
                       <input type="text" name="updateFirstName" class="input" value="<?php echo $row['FirstName']; ?>" > <!-- Shahad -->
 
                     <h2>Last Name</h2>
                     <input type="text" name="updateLastName" class="input" value="<?php echo $row['LastName']; ?> "> <!-- Abdullah -->
 
                     <h2>Email</h2>
                     <input type="email" name="updateEmail" class="input" value="<?php echo $row['Email']; ?> ">  <!-- Shahad87@gmail.com -->
 
                     <h2>Password</h2>
                     <input type="password" name="updatePass" class="input" value="<?php echo $row['Pass']; ?> "> <!--Shahad1234 -->
 
                     <h2>City</h2>
                     <!-- <input type="text"  name="updateCity" class="input" value=" "> Riyadh -->
                     <select name="city" id="city" value="<?php echo $row['City']; ?>">
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
 
                     <h2>Location</h2>
                     <input type="text"  name="updateLoc" class="input" value="<?php echo 'hitten'; ?> "> <!--District : AL RAED -->
 
                     <h2>Photo</h2>
                      <input type="file"  name="updatePhoto" class="input"  alt="Profile image" value=" " > 
                         
                     <br>
                     
                     <input type="submit" name="editUpadte" class="button" value="Edit" onclick="return confirm('Do you want to save changes?') "> 

                
                       </form>

                       <form action = "#" method = "POST">
                     <button id="deleteButton" name="deleteProfileButton" class="deleteButton" onclick="return confirm('Are you sure you want to delet your account?') " >Delete Profile</button> 
                     <!-- onclick="myFunction()" -->
                      </form>

 
                        
                      
 
             </div>
         </div>
 
         <div class="parent_body">   
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
 
 

 <?php
      if(isset($_POST['editUpadte'])){

        //    $fName = isset($_POST['updateFirstName']) ? $_POST['updateFirstName'] : '';
           $fName = $_POST['updateFirstName'];

        //    $lName = isset($_POST['updateLastName']) ? $_POST['updateLastName'] : ''; 
           $lName = $_POST['updateLastName'];

        //    $email = isset($_POST['updateEmail']) ? $_POST['updateEmail'] : '';
          $email = $_POST['updateEmail'];

        //   $pass = isset($_POST['updatePass']) ? $_POST['updatePass'] : '';
          
           $pass = $_POST['updatePass'];

        //    $city = isset($_POST['nupdateCityame']) ? $_POST['updateCity'] : '';
           $city = $_POST['city'];

        //    $loc = isset($_POST['updateLoc']) ? $_POST['updateLoc'] : '';
           $loc = $_POST['updateLoc'];

        //    $photo = isset($_POST['updatePhoto']) ? $_POST['updatePhoto'] : '';
           $photo = $_POST['updatePhoto'];

      $query1 = "UPDATE parent SET FirstName = '$fName',LastName='$lName',Email= '$email' ,Pass= '$pass',City = '$city',Location = '$loc',ProfileImage ='$photo' WHERE Email = '$email' ";

                    if(!$result = mysqli_query($dbConnection, $query1) ){
                        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'EditProfile.php';</script>"; 
                        die(mysqli_error($dbConnection)); //mysqli_error($dbConnection)
                     }
                          else
                         { echo "<script type='text/javascript'>alert('Successful - Profile Updated!'); window.location.href = 'EditProfile.php';</script>"; }
 
             }  }  else echo'couldnt fetch';    //why??       
?>


 
<!-- for deleting account -->
<?php

//   condetions: no bookings

//   CurrentBookingQuery = fetech row  == 0 --> I CAN DEL PROFILE

// ID =". $_GET['ID'] .";"


/*$ResultQueryBooking=mysqli_query($dbConnection,"SELECT 'Status' FROM 'bookings' "); //WHERE Email='$email'

    if(!$ResultQueryBooking)
         die( "Connection failed."); //"Connection failed." mysqli_error()

         $numOfBookings=0;

         while($row = mysqli_fetch_assoc($ResultQueryBooking)){

            // strcmp($input,'a')==0
            if(strcmp($row,'accepted')==0)
             $numOfBookings++;
                if(strcmp($row,'ACCEPTED')==0)
                     $numOfBookings++;
                     if(strcmp($row,'Accepted')==0)
                         $numOfBookings++;
         }//end while

                
              if($numOfBookings==0){
    //   echo 'hanin line 227';*/











    if(isset($_POST['deleteProfileButton'])){
        include 'connection.php';
     
 // DELETE FROM `babysitter` WHERE `Email`

 $delQuery="DELETE FROM Parent WHERE Email='$email' "; 

 if(!$result2 = mysqli_query($dbConnection, $delQuery) ){
     echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'EditProfile.php';</script>"; 
     die(mysqli_error($dbConnection));  
  }else
                                                                                               // gotta change homepage.html
      { echo "<script type='text/javascript'>alert('Successful - Profile Deleted!'); window.location.href = 'homepage.php';</script>"; }


}




    //previous code

/*  if(isset($_POST['deleteProfileButton'])){
    


    $delQuery=" DELETE FROM Parent WHERE Email='$email' ";

    if(!$result2 = mysqli_query($dbConnection, $delQuery) ){
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'EditProfile.php';</script>"; 
        die(mysqli_error($dbConnection));  
     }else
                                                                                                  // gotta change homepage.html
         { echo "<script type='text/javascript'>alert('Successful - Profile Deleted!'); window.location.href = 'homepage.php';</script>"; }


  } //end if --deleteProfileButton
// } // end else --succssful conn
          /*    }else 
               { echo "<script type='text/javascript'>alert('You Cannot Delete account since you have current booking!'); window.location.href = 'EditProfile.php';</script>"; }*/

?>


 
  </html>