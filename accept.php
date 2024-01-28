<?php

if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );
$bookingID=$_POST['bookingID'];
$reqID=$_POST['JobReqID'];


$query="UPDATE bookings SET Status='accepted' WHERE ID='$bookingID' " ;
$query1="UPDATE bookings SET Status='rejected' WHERE ID!='$bookingID' AND  JobReqID='$reqID'" ;

$query2="UPDATE jobRequests SET reqStatus='accepted' WHERE JobReqID='$reqID' " ;

if(!$table=mysqli_query($database,$query))
die("failed to cancel");
if(!$table=mysqli_query($database,$query1))
die("failed to cancel");
if(!$table=mysqli_query($database,$query2))
die("failed to cancel");

header("location: JobRequest-parent.php");
?>