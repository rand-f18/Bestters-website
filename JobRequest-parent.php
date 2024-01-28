<!DOCTYPE html>
<?php
          
session_start();
if(!isset($_SESSION['em'])) {
header("location: homepage.php");}
                     
?>
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
    <?php
    if(!$con=mysqli_connect("localhost","root",""))
    die("failed to connect");
    if(!$db=mysqli_select_db($con,"bestTers"))
    die("failed to connect");
	
	$email=$_SESSION['em'];
    $query="SELECT * FROM JobRequests WHERE ParentEmail='$email' ORDER BY JobReqID ASC ";//$_Session['em']s@gmail.com
    if(!$table=mysqli_query($con,$query))
    die('failed to query');
    if (mysqli_num_rows($table)==0){
    echo "<br>";
    // echo "<tr><p style='color:#FF5A30;font-size:20px;'>There is no Job Requests yet</p></tr>";
}
       else{

        while($row=mysqli_fetch_row($table)){

            if($row[9]=='pending'){
                print("<tr>");
                print("<td class='cellofmain'>");
                      print("<div class='reqeustFromParent'>");
                     //print("<a href='editJobReq-parent.php'> <img class='editicon' src='images/edit-icon.png' alt='edit'></a>");
					  
					   print("<div class='reqInfo'> ");
                      print("<ul>");
                      print("<li>Kid Name| $row[1]</li>");
                     // if($row[2]==1)
                      print("<li>Kid Age| $row[2] years</li>");
                //else  print("<li>Kid Age| $row[2] years</li>");
                       print("<li>Service|$row[3]</li>");
                      print("<li>District| $row[7]</li>");
                      print("<li>Date| $row[4]</li>");
                       $cleantimeS=substr($row[5],0,-3);
                       $cleantimeE=substr($row[6],0,-3);
print("<li>Time|$cleantimeS-$cleantimeE</li>");




print" <form action='cancel.php' method='post'>  
<input class='buttonCancel' type='submit' name='cancel' value='Cancel'  style='display:inline;margin-top:8px;' >
<input type='hidden' name='JobReqID' value=$row[0]>
</form>";
print" <form action='editJobReq-parent.php' method='POST'>  
               <input class='buttonEdit' type='submit' name='edit' value='Edit' style='color:white;border-radius:10px;display:inline;margin:1px;background-color:#BEBEBE;
	width:45%;
	border: none;
	'>
<input type='hidden' name='JobReqID' value=$row[0]>
</form>";


$t=time()+(2+3)*3600;//add 3hours then compare if equals with starting time
         $date=date("H",$t);
        
          $dateC=date('Y-m-d');
        
$cleantime=substr($row[5],0,-6);                                          


if($row[4]==$dateC && $date>$cleantime)
{ echo"timeover";
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );
$reqID=$row[0];
$query="UPDATE jobRequests SET reqStatus='cancelled' WHERE JobReqID='$reqID' " ;

$query1="UPDATE bookings SET Status='rejected' WHERE  JobReqID='$reqID'" ;

if(!$table=mysqli_query($database,$query))
die("failed to cancel1");
if(!$table2=mysqli_query($database,$query1))
die("failed to cancel2");
header("location: JobRequest-parent.php");}

//header("location:cancelT.php?JobReqID='$row[0]'");    //
//  print("<a href=\"cancelT.php?JobReqID=".$row[0]."\"><input type='hidden' > ");
//print" <form action='cancelT.php' method='get'>  
//<input class='buttonCancel' type='submit' name='cancel' value='Cancel' >
//<input type='hidden' name='JobReqID' value=$row[0]>
//</form>";
//include 'cancelT.php?JobReqID="$row[0]"';

//}
 
                      print("</ul>");
                      print("</div>");
                      print("</div>");
                      print("</td>"); //<!--offers for 1st req here-->
                $query2="SELECT * FROM Bookings WHERE JobReqID='$row[0]' ORDER BY JobReqID ASC ";
                if(!$table2=mysqli_query($con,$query2))
                die("faile to query2");

                

                if(mysqli_num_rows($table2)==0){
                    //echo"<br>";
                echo "  <td><p style='color:#FF5A30;font-size:20px; '>There is no Offers yet</p></td>";
                }
                else{
				print("<td>"); //offers// addedd oo
                print("<table class='nestedtable'>");  //<!--offers-->
                print("<tbody>");
                    $count=0;
                    while($row2=mysqli_fetch_row($table2)){
                        if($row2[7]=='pending'){
                            $query3="SELECT * FROM BabySitter WHERE  NationalID='$row2[8]' ";
                            if(!$table3=mysqli_query($con,$query3))
                            die("query3");
                            while($row3=mysqli_fetch_row($table3)){
                                $nID=$row3[0];
                                $Bimg=$row3[11];

                            }

        print("<tr>"); 
         print("<td rowspan='2'><a href='BabySitterProfile-parent.php?NationalID=$nID'><img class='profilephoto' src='$Bimg' alt='photo'></a> </td>");//?
         print("<td>$row2[2]</td>");
         print"<td><form action='accept.php' method='post'>  
         <input style='background-color:green'class='buttonAccept' type='submit' name='accept' value='Accept' >
         <input name='bookingID'type='hidden' value=$row2[0]>
         <input name='JobReqID'type='hidden' value=$row[0]>

         </form></td>";  
         
         
         print("<td rowspan='2'>");
         $t=time()+(2+3)*3600;//add 3hours then compare if equals with starting time
         $date=date("H",$t);
		 $t2=time()+(2+1)*3600;
		 $time1=date("H",$t2);
        
          $dateC=date('Y-m-d');
        
$cleantime=substr($row[5],0,-6);                                          
if($row[4]==$dateC && $date==$cleantime)  //same day same hour after adding 3hours>>three hour left show img               
{print("<img class='hourglass' src='images/hourglass.gif' alt='hourglass' >");

echo"<br><br>offer'll be deleted at {$time1} o'clock";}
//else if($row[4]==$dateC && $date>$cleantime)//date(current time)=now time+3hours  >> current>start>>delete
//{   print("<a href=\"cancel.php?JobReqID=".$row[0]."\"></a>");
//echo "$date timeover $cleantime";
//header("location: cancel.php");
//include 'cancel.php';
//myCancel($reqRow[0]);
//print("<a href=\"cancel.php?JobReqID=".$row[0]."\"> ");
//}
          print("</td>");
  print(" </tr>");//oo
  print("<tr>");
  print("<td>$row2[6] SR</td>");

    
//<td> inside form
        print"<td><form action='rejectOffer.php' method='post'>  
        <input class='buttonReject' type='submit' name='reject' value='Reject' >
        <input name='bookingID'type='hidden' value=$row2[0]>
        </form></td>";               
          print(" </tr>");              
                                                                                                    
        //when accepted update status in booking>>move it to current booking//"&JobReqID=".$reqRow[0]."
       //there should be the clock
                 //show this image+TIMER for 30min only when there's 30min to remove offer>>how to know 30 min
                    
                    
                    // print("<td>$row2[6]+ $offerID SR</td>");
                    $count++;


                    }//offer==pending
                }//while
                              
                print("</tbody>    ");  //<!--end body nested-->                                                
                print("</table>"); //<!--end nested table for 1st req-->
                print("</td>"); 
         
                    //if($count==0){
                       // echo"<br>";
                        //echo "  <tr><p style='color:#FF5A30;font-size:20px; '>There is no Offers yet</p></tr>";
        

                   // }
                   
                
                }//end else


            }
        }
       }


                                      ?>
</tbody>
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                       </table>
                                
                                  
                                    <button onclick="window.location.href='PostJobRequest-parent.php'" class="buttonPostNJR" type="button" ><!--a href="link to post njr"></a-->
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