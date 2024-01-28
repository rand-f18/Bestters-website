
<?php
session_start();
 
   

   if(!isset($_SESSION['em']))
      header("Location: homepage.php?error='please login and if you are a new user you can sign up'");

    else
    {

if (!$con= mysqli_connect("localhost","root",""))
die("failed to connect to connection");
if(!$db=mysqli_select_db($con,"bestTers"))
die("failed to connect to data base");
$review= $_POST['review'];
$y= $_POST['bookingID'];
$x=$_POST['babySitterID'];
$z=$_SESSION['em'];
if (isset($_POST['rate'])){
$rate= $_POST['rate'];

$query="INSERT INTO Ratings (BabySitterID,ParentEmail,Review,Stars,bookingID)VALUES('$x','$z','$review','$rate','$y')";
}
else{

    $query="INSERT INTO Ratings (BabySitterID,ParentEmail,Review,Stars,bookingID)VALUES('$x','$z','$review','0','$y')";
      
}

if(!$q=mysqli_query($con,$query))
die("failed to query");

mysqli_close($con);

header("location:parentPreviousBookings.php?msg=Rating Have Been Done Succefully");//
    }


?>