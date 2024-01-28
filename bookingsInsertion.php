<?php

if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
                                                          
    if ( !mysqli_select_db( $database, "bestTers") )
              die( "<p>Could not open URL database</p>" );
$JobReqID=$_POST['JobReqID'];
$kName=$_POST['kidName'];
$date=$_POST['date'];
$sTime=$_POST['startingTime'];
$eTime=$_POST['endingTime'];
$bName=$_POST['babySitterName'];
$bID=$_POST['babySitterID'];
$price=$_POST['price'];
$query1="SELECT * FROM bookings WHERE BabySitterID='$bID'";
$count=0;
if(!$table2=mysqli_query($database,$query1))
die("failed query1");

while($row2=mysqli_fetch_row($table2)){
    if($row2[3]==$date){
        if(($sTime>=$row2[4] && $sTime<=$row2[5])||($sTime<=$row2[4] && $eTime>=$row2[5])||($sTime<=$row2[4] && $eTime>=$row2[5])){
            if($row2[7] !='rejected'){
                $count++;
            }
        }
    }
}
if($count!=0){
header("location:babySitterJobList.php?msg1=There is A Time conflict Check pending or Current Bookings "); 
}
else{
$query="INSERT INTO bookings (KidName,BabySitterName,Date,StartingTime,EndingTime,Price,Status,BabySitterID,JobReqID)VALUES('$kName','$bName','$date','$sTime','$eTime','$price','pending','$bID','$JobReqID')";
if(!$table=mysqli_query($database,$query))
die("failed to book");
header("location:babySitterJobList.php?msg= Successfully!");
}

/* print"<Form  action='bookingsInsertion.php' method='post'>
            <li> <label style='margin:10px 30px 0px 55px' for='price'>Choose price:</label>
            <input style='margin:10px 30px 0px 40px; width='10px'name='price'id='price' size='10px' type='number' value='150' placeholder='enter price'></li>
            <input style='margin:0px 30px 0px 50px'class='reviewButton' type='submit' value='Review BabySitter'>
            <input type='hidden' value='$row[0]' name='JobReqID'>
            <input type='hidden' value='$row[1]' name='kidName'>
            <input type='hidden' value='$row[4]' name='date'>
            <input type='hidden' value='$row[5]' name='startingTime'>
            <input type='hidden' value='$row[6]' name='endingTime'>
            <input type='hidden' value='$row[0]' name='babySitterName'>

        </Form>"   ;*/


              ?>