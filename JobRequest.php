<!--JobRequest-->

<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
	          <title>Bestters | Job Requests</title >
			  <link rel="stylesheet" href="stylejR.css">
			  <link rel="stylesheet" href="style.css">
			  <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
			  <meta name="viewport" content="width=device-width", initial-scale="1">
   </head>
   
   <body>
   
             <div class="container">
			        
					<table class="maintable">
					        
							<thead>
							    <tr class="tableTitle">
								    <th >Job Requests</th>
									<th >Offers</th>
								</tr>					
							</thead>
						
							<tbody>
							     <tr>
								    <td class="cellofmain"><!--1st req-->
									<div class="reqeustFromParent"> 
									   <!--i class="fa-solid fa-pen-to-square" style="font-size:48px;color:red;"></i><!edit-icon-->
									   <a href="PostJobReq.php"><!--link to post new job req-->
									   <img class="editicon" src="images\edit-icon.png" alt="edit"></a> 
									   <div class="reqInfo"><ul>
									      <li>Kid Name| Ahmad</li>
										  <li>Kid Age| 6 years</li>
										  <li>Service| Day Care</li>
										  <li>District| Hitten</li>
										  <li>Date| 15/11/2022</li>
										  <li>Time| 5:30pm - 8:30pm  </li>
									   </ul></div>
									   
									   <button class="buttonCancel" type="button" >Cancel</button>
									</div>
									</td><!-- end 1st req-->
									
									<td><!--offers for 1st req here-->
									<table class="nestedtable"><!--offers-->
									   <tbody>
									   
									     <tr><!--1st offer-->
										 <!--div class="firstOffer"-->
										   <td rowspan="2"><a href="BabySitterProfile.php">
										   <img class="profilephoto" src="/images/profilefemale.png" alt="photo" ></a> </td>
										   <td>Lara Charles</td>
										   <td><button  onclick="window.location.href='parentCurrentBooking.php'"class="buttonAccept" type="button" >Accept</button></td> <!--link  onclick="window.location.href='current booking'"-->
									    	<td rowspan="2"><img class="hourglass" src="images\hourglass.gif" alt="hourglass" > </td>								
										 </tr>
										 
				                        <tr>
			 						       <td>200 SR</td>
										   <td><button class="buttonReject" type="button" >Reject</button></td>					
										 </tr>
										 <!--/div-->
										 
										 
										 <tr> <!--2nd offer-->
										   <td rowspan="2"><img class="profilephoto" src="images\profilefemale.png" alt="photo"> </td><!--link for the profile-->
										   <td>Zain Abdullah</td>
										   <td><button class="buttonAccept" type="button" >Accept</button></td>
									       <td rowspan="2"><!--img class="hourglass" src="/images/hourglass.gif" alt="hourglass" --> </td>									
										 </tr>
										 
				                        <tr>
			 						       <td>400 SR</td>
										   <td><button class="buttonReject" type="button" >Reject</button></td>
										   									
										 </tr>
										 
										 <tr><!--3rd offer-->
										 <!--div class="firstOffer"-->
										   <td rowspan="2"><img class="profilephoto" src="images\profilefemale.png" alt="photo" > </td>
										   <td>Roz Nadeem</td>
										   <td><button class="buttonAccept" type="button" >Accept</button></td>
									    	<td rowspan="2"><!--img class="hourglass" src="/images/hourglass.gif" alt="hourglass" --> </td>								
										 </tr>
										 
				                        <tr>
			 						       <td>500 SR</td>
										   <td><button class="buttonReject" type="button" >Reject</button></td>					
										 </tr>
										 <!--/div-->
									   
									   </tbody>							
									
									
									</table><!--end nested table for 1st req-->

									</td><!--end of offers-->
									
									
									
								 
								 </tr>
								 
								 <tr><!--2nd req-->
								    <td class="cellofmain"> 
									<div class="reqeustFromParent"> 
									   <!--i class="fa-solid fa-pen-to-square"></i>< -edit-icon-->
									   <a href="PostJobReq.php">
									   <img class="editicon" src="images\edit-icon.png" alt="edit"></a> 
									   <div class="reqInfo"> <ul>
									      <li>Kid Name| Leen</li>
										  <li>Kid Age| 6 years</li>
										  <li>Service| Homworks</li>
										  <li>District| Hitten</li>
										  <li>Date| 15/11/2022</li>
                                         <li>Time| 5:30pm - 8:30pm  </li>
									   </ul></div>
									   
									   <button class="buttonCancel" type="button" >Cancel</button>
									</div>
									</td>
									
										<td><!--offers for 1st req here-->
									<table class="nestedtable"><!--offers-->
									   <tbody>
									   
									     <tr><!--1st offer-->
										 <!--div class="firstOffer"-->
										   <td rowspan="2"><img class="profilephoto" src="images\profilefemale.png" alt="photo" > </td>
										   <td>Lara Charles</td>
										   <td><button class="buttonAccept" type="button" >Accept</button></td>
									    	<td rowspan="2"><img class="hourglass" src="images\hourglass.gif" alt="hourglass" > </td>								
										 </tr>
										 
				                        <tr>
			 						       <td>500 SR</td>
										   <td><button class="buttonReject" type="button" >Reject</button></td>					
										 </tr>
										 <!--/div-->
										 
										 
										 <tr> <!--2nd offer-->
										   <td rowspan="2"><img class="profilephoto" src="images\profilefemale.png" alt="photo" > </td><!--link for the profile-->
										   <td>Zain Abdullah</td>
										   <td><button class="buttonAccept" type="button" >Accept</button></td>
									       <td rowspan="2"><!--img class="hourglass" src="/images/hourglass.gif" alt="hourglass" --> </td>									
										 </tr>
										 
				                        <tr>
			 						       <td>400 SR</td>
										   <td><button class="buttonReject" type="button" >Reject</button></td>
										   									
										 </tr>
										 
										 
									   
									   </tbody>							
									
									
									</table><!--nested for 2nd req-->

									</td><!--end of offers-->
									
									
									
									<tr>
								    <td class="cellofmain"><!--3st req-->
									<div class="reqeustFromParent"> 
									   <!--i class="fa-solid fa-pen-to-square" style="font-size:48px;color:red;"></i><edit-icon-->
									   <a href="PostJobReq.php">
									   <img class="editicon" src="images\edit-icon.png" alt="edit"></a>
									   <div class="reqInfo"><ul>
									      <li>Kid Name| Sara</li>
										  <li>Kid Age| 3 years</li>
										  <li>Service| Day care</li>
										  <li>District| Hitten</li>
										  <li>Date| 15/11/2022</li>
										  <li>Time| 5:30pm - 8:30pm  </li>
									   </ul></div>
									   
									   <button class="buttonCancel"  type="button" >Cancel</button>
									</div>
									</td>
									
									
									
										
							
							
							</tbody>
					
					
					
					
					
					
					
					</table>
			 
			 
			   <button onclick="window.location.href='PostJobReq.php'" class="buttonPostNJR" type="button" ><!--a href="link to post njr"></a-->
			    + Post New Job Request
			   </button> 
			 </div>
			 
			 <!--Side bar Parent change it-->
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
	
	</div>
	
	<!--end-parentbody-->
   
   
   </body>
 
   
</html>