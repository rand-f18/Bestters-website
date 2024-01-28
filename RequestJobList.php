<!--RequestJobList-->

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <title>Bestters | Job Request List</title>
        <!-- <link rel="stylesheet" type="" href="CurrentJobs.css"> -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="JobRequestListStylesheet.css">

        <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">


    </head>
 <!-- reusing CurrentJobs code -->
    <body>
        <div class="AllBookingInfo">
            <p class="titlehead">Offer List<p>
         



            <div class="FirstBookingInfo">
                <div class ="kidInfo">
                    <p>Booking Information</p>

                    <ul>

                        <li><img class="profileImg" src="images\CartoonBabyPic.jpg" height="45" width="45" alt="kid profile picture"></li>

                        <li> Name| Ahmed</li>
                        <li>  Age| 6 years </li>
                        <li> Service| Day Care </li>
                        <li>Date| 10/11/2022</li>
                        <li>Time| 5:30pm - 10:30pm  </li>
                        <li>District| Hatten</li>
                       <!-- <li><a href="https://goo.gl/maps/CSkQUBAZ4LB7hLAK8" > <img class="LocationImg" src ="/images/location.png" height="20" width="15"
                            alt="kid location icon"></a></li> -->
                       <!-- <li><img class="profileImg" src="/images/boy.png" height="45" width="45" alt="kid profile picture"></li> -->
                       <li> <label for="price">Choose price|</label>
                            <input id="price" type="number" value="650" placeholder="enter price"></li>
                           <li><img id="PlusIcon" class="profileImg" src="images\addOfferIcon.png"  height="45" width="55" alt="Add"> </li>

                    </ul>


                      <!-- <labal for="PlusIcon">Add</labal> -->
                      <!-- <img id="PlusIcon" class="profileImg" src="addOfferIcon.png" height="45" width="45" alt="Add">  -->

                </div>

            </div> 



                <div class="SecondBookingInfo">
                    <div class ="kidInfo">
                        <p>Booking Information</p>

                        <img class="profileImg" src="images\babyGirlPic.jpeg" height="45" width="45" alt="kid profile picture"> 

                        <br><br><br>

                        <ul>
                            <!-- <li><img class="profileImg" src="/images/babyGirlPic.jpeg" height="45" width="45" alt="kid profile picture"></li>  -->
                                    <!-- <br><br><br> -->
                            <li> Name| Sara</li>
                            <li>Kid's Age| 5 years</li>
                            <li> Service| OverNight</li>
                            <li>Date| 15/11/2022</li>
                            <li>Time| 5:30pm - 8:30pm  </li>
                            <!-- <li>Total Price| 120SR</li> -->
                            <li> District| Al-Khozama </li> 
                                 <li> <label for="price2">Choose price|</label>
                            <input id="price2" type="number" value="300" placeholder="enter price"></li>

                            <!-- <li><a href="https://goo.gl/maps/dyBCZCMkSKbKZQEB7" > <img class="LocationImg" src ="/images/location.png" height="20" width="15"
                                alt="kid location icon"></a></li>  
                               <li><img class="profileImg" src="/images/girl.png" height="75" width="75" alt="kid profile picture"></li>   -->

                            <li> <img id="PlusIcon2" class="profileImg" src="images\addOfferIcon.png" height="45" width="55"  alt="Add"> 
                            </li>
                        </ul>
                    </div>
                </div> 

     </div>

     <div class="parent_body">
        <div class="side_bar">
            <nav>
                <ul>
                    <li>
                            <img src="/images/lo.png" alt="" width="80" height="45">
                            <span class="nav-item"></span>
                            <br>
                            <br>
                            <br>
                        </li>
        
                    <li><a href="EditProfileBabysitter.html">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Profile</span><!--Hanin-->
                    </a></li>
        
                    <li><a href="RequestJobList.html">
                        <i class="fas fa-file-circle-plus"></i>
                        <span class="nav-item">Offer List</span><!--??-->
                    </a></li>
        
                    <li><a href="BookingStatus.html">
                        <i class="fas fa-file-circle-question"></i>
                        <span class="nav-item">Requests Status</span><!--??-->
                    </a></li>
                    
                    <li><a href="CurretJobs.html">
                        <i class="fas fa-file"></i>
                        <span class="nav-item">Current Booking</span><!--Current Jobs /Reema-->
                    </a></li>
        
                    <li><a href="previousBooking.html">
                        <i class="fas fa-file-circle-check"></i>
                        <span class="nav-item">Previous Booking</span> <!--Prevois Jobs /jana-->
                    </a></li>
        
                   <li><a href="RatePage.html">
                        <i class="fas fa-solid fa-star"></i>
                        <span class="nav-item">Ratings</span>
                    </a></li>
        
                    <li><a href="babysittetpage.html">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span><!--DELETE IT ?? already in homepage for <babysitter-->
                    </a></li>
        
                    <li><a href="homepage.html" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log Out</span><!--homepage-->
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
    </body>
    





</html>