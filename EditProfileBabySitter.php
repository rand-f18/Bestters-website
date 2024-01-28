<?php
session_start();
if(!isset($_SESSION['em']))
header("Location:homepage.php");

?>
<!DOCTYPE html>
<html lang> 
    <head>
        <meta name="UTF-8">
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
       //$email= 'lara@gmail.com' ;
       if(!$query=mysqli_query($dbConnection,"SELECT * FROM babysitter WHERE Email='$email'"))
         die(mysqli_error());
         
       if($row=mysqli_fetch_array($query)){

        
     ?>


        <div class="containerBabysitter">
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
                    <input type="text" class="input" name="updateFirstName" value="<?php echo $row['FirstName']; ?>">

                    <h2>Last Name</h2>
                    <input type="text" class="input" name="updateLastName" value="<?php echo $row['LastName']; ?>">

                    <h2>ID</h2>
                    <input type="number" class="input" name="idBS" value="<?php echo $row['NationalID']; ?>">

                    <h2>Age</h2>
                    <input type="text" class="input" name="age" min='20' max='50' value="<?php echo $row['Age']; ?>">

                    <h2>Email</h2>
                    <input type="email" class="input" name="updateEmail" value="<?php echo $row['Email']; ?>">

                    <h2>Password</h2>
                    <input type="password" class="input" name="updatePass" value="<?php echo $row['Pass']; ?>">

                    <h2>Phone</h2>
                    <input type="text" class="input" name="phone" value="<?php echo $row['PhoneNumber']; ?>">

                    <h2>City</h2>
                    <!-- <input type="text" class="input" name="updateCity"  > -->
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


                    <h2>Bio</h2>
                    <div class="bioBox"> 
                       <textarea class="input" name="bio" >  <?php echo $row['Bio']; ?>  </textarea>
                    </div>

                    <h2>Photo</h2>
                    <input  class="input" name="updatePhoto" alt="Profile image" type="file" value=""> 
                    <!--  echo '<img src="' . $row['ProfileImage']. '" width="500" height="400">'; ?> -->
<!--echo $row['ProfileImage'];  -->
                              <br>   
                              <input type="submit" name="editUpadte" class="button" value="Edit" onclick="return confirm('Do you want to save changes?') "> 

                              </form>

                              <form method ="POST" action = "#" >
                     <button id="deleteButton" name="deleteProfileButton" class="deleteButton" onclick="return confirm('Are you sure you want to delete your account?') " >Delete Profile</button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                     <!-- onclick="myFunction()" -->
                      </form>
                
                     <!-- <button   class="button">Edit</button> -->
                    <?php
                    } else echo'couldnt fetch';                    
                     ?>
                </div>

            </div>
        </div>
        

         

        <div class="leftBox"> 
            <div class="parent_body">
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
                <P>copyright &copy;2022 codeOpacity. designed by <span>BestTears</span></P>
            </div>
    
        </footer>

    </body>

    <?php
      if(isset($_POST['editUpadte'])){

        $fName = $_POST['updateFirstName'];
        $lName = $_POST['updateLastName'];
        $email2 = $_POST['updateEmail'];
        $pass = $_POST['updatePass'];
        $city = $_POST['city'];
        $photo = $_POST['updatePhoto'];

        $id = $_POST['idBS'];
        $age = $_POST['age'];
        $bio = $_POST['bio'];
        $phoneNum = $_POST['phone'];


        $query2 = "UPDATE babysitter SET FirstName = '$fName',LastName='$lName',Email= '$email' ,Pass = '$pass',City = '$city',ProfileImage ='$photo', NationalID=' $id',Age ='$age',Bio='$bio', PhoneNumber='$phoneNum' WHERE Email = '$email2' ";

        if(!$result = mysqli_query($dbConnection, $query2) ){
            echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'EditProfileBabySitter.php';</script>"; 
            die(mysqli_error($dbConnection)); //mysqli_error($dbConnection)
         }
              else
             { echo "<script type='text/javascript'>alert('Successful - Profile Updated!'); window.location.href = 'EditProfileBabySitter.php';</script>"; }

        ?>

                    

<?php
             }  //} else echo'couldnt fetch'; 

            //  echo 'can reach'; //test

             if(isset($_POST['deleteProfileButton'])){
                       include 'connection.php';
                    
                // DELETE FROM `babysitter` WHERE `Email`
               

                $delQuery="DELETE FROM babysitter WHERE Email='$email' "; 
            
                if(!$result2 = mysqli_query($dbConnection, $delQuery) ){
                    echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'EditProfileBabySitter.php';</script>"; 
                    die(mysqli_error($dbConnection));  
                 }else
                                                                                                              // gotta change homepage.html
                     { echo "<script type='text/javascript'>alert('Successful - Profile Deleted!'); window.location.href = 'homepage.php';</script>"; }
            
            
              } //end if --deleteProfileButton
?>

</html>
