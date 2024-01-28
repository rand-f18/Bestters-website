<?php

session_start();

if(isset($_POST['SignupSubmit'])){
$con = mysqli_connect("localhost", "root", "", "bestters");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

$FirstName=$_POST['fname'];
$LastName=$_POST['lname'];
$Password=$_POST['pw'];
$RePassword=$_POST['rpw'];
$Email=$_POST['em'];
$Phonenumber=$_POST['pn'];
$City=$_POST['city'];
$Address=$_POST['add'];
$Gender=$_POST['Gender'];
if(isset($_POST['pic']))
$Kidpic="images/".$_POST['pic'];
else
$Kidpic="images/profileIcon.png";




 // check if name only contains letters and whitespace

  if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) {
     header("Location:signupParent.php?errorfname=Only letters and white space allowed in first name!");
     exit;
 }

 if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
    header("Location:signupParent.php?errorlname=Only letters and white space allowed in last name!");
     exit;
 }

 if($Password !== $RePassword){
    header("Location:signupParent.php?errorpass=password doesn't match!");
    exit;
}

 $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
 if (!preg_match ($pattern, $Email) ){ 
    header("Location:signupParent.php?erroremail=Invalid email address!");
    exit;
 }

 if (!preg_match ("/^[0-9]*$/", $Phonenumber) ){
    header("Location:signupParent.php?errorphonenumber=Only numeric value is allowed!");
    exit;}

    $length = strlen ($Phonenumber);  
  
if ( $length !== 10) {  
    header("Location:signupParent.php?errorphonenumber=Mobile must have 10 digits!");
    exit;}


    $query1="SELECT * FROM parent WHERE Email='$Email' ";
    $query2="SELECT * FROM parent WHERE PhoneNumber='$Phonenumber'";

    $result1=mysqli_query($con,$query1);
    $result2=mysqli_query($con,$query2);

    if(mysqli_num_rows($result1)>0){
        header("Location:signupParent.php?erroremail=User with this Email already exist!");
        mysqli_close();
        exit;
    }

    if(mysqli_num_rows($result2)>0){
        header("Location:signupParent.php?errorphonenumber=User with this Phone number already exist!");
        mysqli_close();
        exit;
    }

// if($Kidpic==NULL){
//     $Kidpic="images/profileIcon.png";
// }
// else{
//     $Kidpic="images/".$Kidpic;//removed .png
// }

//"C:\xampp\htdocs\phpFiles\images\profileIcon.png"

    $queryInsert="INSERT INTO `parent` (`FirstName`,`LastName`,`Pass`,`Email`,`PhoneNumber`,`City`,`Location`,`Gender`,`ProfileImage`) VALUES('$FirstName','$LastName','$Password','$Email','$Phonenumber','$City','$Address','$Gender','$Kidpic')";

if(mysqli_query($con,$queryInsert)){
    $_SESSION['em'] = $Email ;//changed
    header("Location:parentpage.php");
    mysqli_close();
    exit;
}
else{
    echo "Error: ".mysqli_error($con);
}

}//}endif
else{
    echo "please submit";
}
?>