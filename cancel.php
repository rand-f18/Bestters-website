<?php

if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );

$reqID=$_POST['JobReqID'];

$query="UPDATE jobRequests SET reqStatus='cancelled' WHERE JobReqID='$reqID' " ;
//$query="DELETE FROM jobrequests WHERE JobReqID='$reqID' " ;
$query1="UPDATE bookings SET Status='rejected' WHERE  JobReqID='$reqID'" ;

if(!$table=mysqli_query($database,$query))
die("failed to cancel1");
if(!$table2=mysqli_query($database,$query1))
die("failed to cancel2");
header("location: JobRequest-parent.php");


//if(isset($reqStatus)) {
    // if($reqStatus=='pending'){
          //$queryD='DELETE FROM jobrequests WHERE JobReqID="$reqID"  '; //WHERE "$reqRow[0]"=JobReqID'; //WHERE job rqparentId==$_SESSION['em']
          
               /// header("location: PostJobRequest-parent.php");
            
            //    if(!mysqli_query($database,'DELETE FROM jobrequests WHERE JobReqID="$reqID"  ') )
            //          die("failed to queryC");

            //    else header("location: JobReq-parent.php");//same page      

              ////"UPDATE jobRequests SET reqStatus='canceled' WHERE JobReqID='$reqID'  "                                       
            //$queryStatusC='UPDATE  SET Status='canceled' WHERE JobReqID="$reqID"  ';//WHERE reqID=$Brow[0]"; 
              //       if(!mysqli_query($database,$queryStatusC) )
                //               die("failed to query statusC");
                                                                   
                                                                            //  }//end cancel
                                                                            
                                                                                                                                                                   


                                                                             ?>