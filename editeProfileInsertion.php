<?php
if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");
$x=$_POST['nID'];
$y=$_POST['fname'];
        
        $query="UPDATE  babySitter SET FirstName='$y' WHERE NationalID='$x' " ;
 if(!$table=mysqli_query($con,$query))
        die("failed to query");
        if(mysqli_num_rows($table))
        echo "zeeeerrrrrooo";

        header('location:EaditProfileBabysitter.php');
        ?>