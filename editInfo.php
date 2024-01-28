<?php 
    session_start();

   if(!isset($_SESSION['em']))
       header("Location: homepage.html?error='pleas login and if you are a new user you can sign up'");

     else

        {?>
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

        <div class="containerBabysitter">
             <!-- leftBox -->
            <div class="leftBox">
                <nav>
                  <!-- left side menu -->
                </nav>
                 

            </div>
            <!-- rightBox INFO-->
            <div  class="rightBox">
                <div  class="profile tabShow">
                    <h1>Personal Information</h1>
<?php
if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");

$x=$_SESSION['em'];
        
        $query="SELECT * FROM babySitter WHERE Email ='$x' ";
        if(!$table=mysqli_query($con,$query))
        die("failed to query");

        if ($row=mysqli_fetch_row($table)){
            
                    print"
                    <img src=$row[11] alt='profile image' height='90' width='90' style='margin:0px -100px 0px -130px '>
                    <form >
                   <h2>First Name</h2>
                    <input type='text' class='input'  name='fname' placeholder=$row[1]>

                    <h2>Last Name</h2>
                    <input type='text' class='input'  name='lname' placeholder='$row[2]'>

                    <h2>ID</h2>
                    <input type='text' class='input'  name='id' placeholder='$row[0]'>

                    <h2>Age</h2>
                    <input type='text' class='input'  name='age' placeholder='$row[3]'>

                    <h2>Email</h2>
                    <input type='email' class='input'  name='em' placeholder='$row[5]'>

                    <h2>Password</h2>
                    <input type='password' class='input'  name='pw' placeholder='$row[6]'>

                    <h2>Phone</h2>
                    <input type='text' class='input'  name='pn' placeholder='$row[9]'>

                    <h2>Address</h2>
                    <input type='text' class='input'  name='add' placeholder='$row[8]'>

                    <h2>City</h2>

    <select name='city' id='city'>
    <option value='Riyadh'>Riyadh</option>
    <option value='Tabok'>Tabok</option>
    <option value='Umlaj'>Umlaj</option>
    <option value='At Taif'>At Taif</option>
    <option value='Makkah Al Mukarramah'>Makkah Al Mukarramah</option>
    <option value='Hail'>Hail</option>
    <option value='Buraydah'>Buraydah</option>
    <option value='Al Hafuf'>Al Hafuf</option>
    <option value='Dammam'>Dammam</option>
    <option value='Al Madinah Al Munawwarah'>Al Madinah Al Munawwarah</option>
    <option value='Abha'>Abha</option>
    <option value='Uniza'>Uniza</option>
    <option value='Jazan'>Jazan</option>
    <option value='Jeddah'>Jeddah</option>
</select>

                    <h2>Bio</h2>
                    <div class='bioBox'> 
                       <textarea class='input' name='bio'cols='10' rows='1' placeholder='$row[10]' >
                       </textarea>
                    </div>

                    <h2>Photo</h2>
                    <input  class='input' value='image' alt='Profile image' type='file' name='pic'>

                              <br>            
                              <form action='editeProfileInsertion.php' method='post'>
                              <input class='button' type='submit' value='Save'>
                              <input type='hidden' name='nID' placeholder=$row[0]>
                              </form>
                             
          
                              <form action='EditProfileBabysitter.php' method='post'>
                              <input style='margin:0px -50px 500px 0px'id='deleteButton' class='button' type='submit' value='Cancel'>
                              <input type='hidden' name='nID' placeholder=$row[0]>
                              </form>
                             
                   
     
                </div>

            </div>
        </div>
        
        <form>";}
       
        ?>


        <?php
        }/*?>
        
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <?php/*
if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");

$x=$_POST['nID'];
        
        $query="SELECT * FROM babySitter WHERE Email ='$x' ";
        if(!$table=mysqli_query($con,$query))
        die("failed to query");
        if($row=mysqli_fetch_row($table)){
                   print" <form >
                   <h2>First Name</h2>
                    <input type='text' class='input'  name='fname' value='$row[1]'>

                    <h2>Last Name</h2>
                    <input type='text' class='input'  name='lname' value='$row[1]'>

                    <h2>ID</h2>
                    <input type='text' class='input'  name='id' value='$row[1]'>

                    <h2>Age</h2>
                    <input type='text' class='input'  name='age' value='$row[1]'>

                    <h2>Email</h2>
                    <input type='email' class='input'  name='em' value='$row[1]'>

                    <h2>Password</h2>
                    <input type='password' class='input'  name='pw' value='$row[1]'>

                    <h2>Phone</h2>
                    <input type='text' class='input'  name='pn' value='$row[1]'>

                    <h2>Address</h2>
                    <input type='text' class='input'  name='add' value='$row[1]'>

                    <h2>City</h2>

    <select name='city' id='city'>
    <option value='Riyadh'>Riyadh</option>
    <option value='Tabok'>Tabok</option>
    <option value='Umlaj'>Umlaj</option>
    <option value='At Taif'>At Taif</option>
    <option value='Makkah Al Mukarramah'>Makkah Al Mukarramah</option>
    <option value='Hail'>Hail</option>
    <option value='Buraydah'>Buraydah</option>
    <option value='Al Hafuf'>Al Hafuf</option>
    <option value='Dammam'>Dammam</option>
    <option value='Al Madinah Al Munawwarah'>Al Madinah Al Munawwarah</option>
    <option value='Abha'>Abha</option>
    <option value='Uniza'>Uniza</option>
    <option value='Jazan'>Jazan</option>
    <option value='Jeddah'>Jeddah</option>
</select>


                
                    <h2>Bio</h2>
                    <div class='bioBox'> 
                       <textarea class='input' name='bio'cols='10' rows='1' value='$row[1]' >
                       </textarea>
                    </div>

                    <h2>Photo</h2>
                    <p>Please Insert A photo From Here </p>
                    <input  class='input' value='image' alt='Profile image' type='file' name='pic'>

                              <br>            
                    
                    <button   class='button' name='edit' >Edit </button>
                   

                   
                    <button id='deleteButton' class='button' name='deletprofile'>Delete Profile</button>
                   

              

            </div>
            </div>  
            </div>

       ";} */?> 
      
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
                
                            <li><a href="EditBabySitterProfile.php">
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
                
                            <li><a href="babysittetpage.php">
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

</html>
