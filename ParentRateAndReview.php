<!--ParentRateandReview-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bestters | Review Previous Booking</title><!--rename it to Review Booking??-->
        <link rel="stylesheet" href="RateNadReview.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">

        
    </head>


    <body>
        <div class="ratingArea">
            <p class="titlehead">Rate And Review</p>
            <div class="sitterImage">
                <img src="images\babysitterPic.png" height="350" width="350" alt="the baby sitter lara profile picture">
                <p>Lara charles</p>
            </div> 
            <div class="RatingImage">
                <img src="images\fullstars.png" height="50" width="200" alt="rating stars">
            </div> 
       
            <textarea name="review" rows="4" cols="35" placeholder="Write your Review here:"></textarea>
            <Form  action="parentPreviousBookings.php"><!--i removed the method="post"-->
                <input class="submitButton" type="submit" value="Submit">
            </Form>
            <Form  action="parentPreviousBookings.php"><!--i removed the method="post"-->
                <input class="cancelButton" type="submit" value="Cancel">
            </Form>


        </div>


        <div class="parent_body">  <!--for PARENT not babysitter change it-->
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
            
                        <li><a href="/JobReq-parent.php">
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
                            <span class="nav-item">Log Out</span><!--homepage-->
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