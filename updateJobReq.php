<?php

session_start();
	
	if(!isset($_SESSION['em'])) {
		header("location: homepage.php");
		
	}
	
	
     if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );

    
	 if(isset($_POST['submit'])){
		  $reqID=$_GET['JobReqID']; 
//$reqID=$_POST['JobReqID'];
		  echo"HI $reqID";
		  
		        $kidName =  $_POST['kidName'] ;
                 $kidAge =  $_POST['kidAge']  ;
                 $service = $_POST['service']  ;
				 $district =  $_POST['district']  ;
                 $date =  $_POST['date']  ;
                 $startTime = $_POST['startTime'] ;
				 $endTime = $_POST['endTime']; 
				  
				 $email=$_SESSION['em'];
				 $query="UPDATE jobrequests 
                  SET
				 
                  KidName = '$kidName',
                  KidAge = '$kidAge',
                  Service = '$service',
                  Date = '$date',
                  StartingTime = '$startTime',
                  EndingTime = '$endTime',
				  District = '$district',
				  ParentEmail='$email',
				  reqStatus='pending'
				  

				  WHERE JobReqID='$reqID'";
				  
				   if(! mysqli_query($database, $query) )
				    echo "An error occured whith editing job request1."; 
				
			 header("location: JobRequest-parent.php");
 //echo"hihh";
	 }
	 echo"out";

     

                    
?>