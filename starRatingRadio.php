<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bestters | Review Previous Booking</title><!--rename it to Review Booking??-->
        <link rel="stylesheet" href="rating.css">
   
   <link rel="stylesheet" href="starRatingRadio.css"> 
   <link rel="stylesheet" href="s.css"> 
        <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">

       
    </head>


    <body>


        <div id="ratingArea">


        <?php
        // <input type='hidden' value='$row[8]' name='babySitterId'>
        // <input type='hidden' value='$row[0]' name='bookingId'>
        // </Form>
        $con=mysqli_connect('localhost','root','');
        if(!$con)
        die("failed to connect");
        if(!$db=mysqli_select_db($con,"bestTers"))
        die("faolse to connect to db");
        $x=$_POST['babySitterId'];
        $y=$_POST['bookingId'];
        $z=$_POST['sitterImage'];

      
      $query="SELECT * FROM BabySitter WHERE NationalID='$x' ";
        if(!$table=mysqli_query($con,$query))
        die("faied to query");
        if ($row=mysqli_num_rows($table)==0){
          echo"<br>";
        echo "<p style='color:#FF5A30;font-size:20px;'>There is no BabySitter to rate yet</p>";
        }
else{
if($row=mysqli_fetch_row($table)){
           print" <p class='titlehead'>Rate And Review</p>
            <div class='sitterImage'>
             <img src='$z' style='margin:100px -20px -100px 100px'height='150' width='150' alt='the baby sitter lara profile picture'>
                <p style='margin:120px 100px 200px 135px '>$row[1] $row[2] </p>
            </div> 

          <div id='RatingImage' > 
                
                <form action='ratingInsertion.php' method='post'>
                    <div class='container'style='margin: 230px 385px ;'>
                    <div class='star-widget'>
            <input type='radio' name='rate' value=5 id='rate-5'>
             <label for='rate-5' class='fas fa-star'></label>
             <input type='radio' name='rate' value=4 id='rate-4'>
             <label for='rate-4' class='fas fa-star'></label>
             <input type='radio' value=3 name='rate' id='rate-3'>
             <label for='rate-3' class='fas fa-star'></label>
             <input type='radio'  value=2 name='rate' id='rate-2'>
             <label for='rate-2' class='fas fa-star'></label>
             <input type='radio'  value=1 name='rate' id='rate-1'>
             <label for='rate-1' class='fas fa-star'></label>
            </div>
        </div>
                <!-- </div> -->
                 <textarea style='margin:-180px -20px 200px 350px;'name='review' rows='4' cols='35' placeholder='Write your Review here:'></textarea> 
                 <input  style=' margin: -110px -480px -50px -245px;' class='submitButton' type='submit' name='sub' value='Submit'>
                 <input   type='hidden' name='bookingID' value=$y>
                 <input   type='hidden' name='babySitterID' value=$x>

                </form>
                <Form  action='parentPreviousBookings.php'>
                   <input style=' margin: -189px -10px 0px 490px;'class='cancelButton' type='submit' value='Cancel'>
                </Form> 
                
              
                </div>

        </div>";}
}

?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="starRatingRadio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.."></textarea>
          </div>
          <div class="btn">
            <button type="submit">Post</button>
          </div>
        </form>
      </div>
    </div> -->
    <!-- <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
     
        return false;
      }
    </script> -->
    <div>
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
    
                <li><a href="JobRequest.php">
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