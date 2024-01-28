<?php
//start_session();
//echo"<h1>hi</h1>";   
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                    die( "<p>Could not connect to database</p>" );
 
         if ( !mysqli_select_db( $database, "bestTers") )
                    die( "<p>Could not open URL database</p>" );
                                    // echo"<h1>hi</h1>";     
                                     //echo $_GET['offerID'];            
                                                       $offerID= $_POST['bookingID'];
                                                      //ECHO $_GET['offerID'];
                                                      $query="UPDATE bookings SET   Status = 'rejected' WHERE ID='$offerID' ";
                                                      if(!$table=mysqli_query($database,$query))
                                                      die("failed to updeate");

                                                      else
                                                       header("location: JobRequest-parent.php");//same page
                                                      
                                                      
 
/* print("<form method='get' action='JobReq-parent.php' >");//cancel.php/onsubmit="return confirm('Do you really want to submit the form?')" 
                      print(" <td><input class='buttonReject' type='submit' name='rejectB' value='Reject'  ></td> ");//onclick='myCancel('$Brow[0]')'
                                          print("</form>");
                                                                             if(isset($_GET["rejectB"])) {//$offerID="$Brow[0]";
                                                                             // $queryStatusR="UPDATE bookings SET Status='rejected' WHERE offerID='$offerID' "; //AND JobReqID=$Brow[9]  "; //
                                                                             if(!mysqli_query($database,"UPDATE bookings SET Status='rejected' WHERE offerID='".$offerID."' ") )
                                                                               die("failed to query status");
                                                                    else header("location: PostJobRequest-parent.php");
                                                                             }*/
                                                      
 
 
?>