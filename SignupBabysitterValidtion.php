<?php

session_start();

if(isset($_POST['SignupSubmit'])){
    $con = mysqli_connect("localhost", "root", "", "bestters");
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }

$FirstName=$_POST['fname'];
$LastName=$_POST['lname'];
$NID=$_POST['nid'];
$Age=$_POST['age'];
$Password=$_POST['pw'];
$RePassword=$_POST['rpw'];
$Email=$_POST['em'];
$Phonenumber=$_POST['pn'];
$City=$_POST['city'];
$Address=$_POST['add'];
$Gender=$_POST['Gender'];
// $Babysitterpic=$_POST['pic'];
$Bio=$_POST['bio'];
if(isset($_POST['pic']))
$Babysitterpic="images/".$_POST['pic'];
else
$Babysitterpic="images/profileIcon.png";


 // check if name only contains letters and whitespace
 if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) {
    header("Location:signupBabysitter.php?errorfname=Only letters and white space allowed in first name!");
    exit;
 }

 if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
    header("Location:signupBabysitter.php?errorlname=Only letters and white space allowed in last name! ");
    exit;
 }

 if (!preg_match ("/^[0-9]*$/", $NID) ){
    header("Location:signupBabysitter.php?errorid=Only numeric value is allowed!");
    exit;}

    $lengthID = strlen ($NID);  
  
    if ( $lengthID !== 10) {  
        header("Location:signupBabysitter.php?errorid=ID must have 10 digits!");
        exit;}

        if (!preg_match("/^[0-9]+$/", $Age)) {
            header("Location:signupBabysitter.php?errorage=Only numeric value is allowed!");
            exit;   
        }

        if($Age<20){
            header("Location:signupBabysitter.php?errorage=Age can't be less than 20!");
            exit;
        }

 if($Password !== $RePassword){
    header("Location:signupBabysitter.php?errorpass=password doesn't match!");
    exit;
}

 $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
 if (!preg_match ($pattern, $Email) ){ 
    header("Location:signupParent.php?erroremail= Email syntax is wrong!");
    exit;
 }

 if (!preg_match ("/^[0-9]*$/", $Phonenumber) ){
    header("Location:signupBabysitter.php?errorphonenumber=Only numeric value is allowed!");
    exit;}

    $length = strlen ($Phonenumber);  
  
if ( $length !== 10) {  
    header("Location:signupBabysitter.php?errorphonenumber=Mobile must have 10 digits!");
    exit;}


    $query1="SELECT * FROM babysitter WHERE Email='$Email' ";
    $query2="SELECT * FROM babysitter  WHERE PhoneNumber='$Phonenumber' ";
    $query3="SELECT * FROM babysitter WHERE NationalID='$NID' ";

    $result1=mysqli_query($con,$query1);
    $result2=mysqli_query($con,$query2);
    $result3=mysqli_query($con,$query3);

    if(mysqli_num_rows($result1)>0){
        header("Location:signupBabysitter.php?erroremail= User with this Email already exist!");
        mysqli_close();
        exit;
    }

    if(mysqli_num_rows($result2)>0){
        header("Location:signupBabysitter.php?errorphonenumber= User with this Phone number already exist!");
        mysqli_close();
        exit;
    }

    if(mysqli_num_rows($result3)>0){
        header("Location:signupBabysitter.php?errorid= User with this ID already exist!");
        mysqli_close();
        exit;
    }
    // if($Babysitterpic==NULL){
    //     $Babysitterpic="images/profileIcon.png";
    // }
    // else{
    //     $Babysitterpic="images/".$Babysitterpic;//removed .png
    // }
    

    $queryInsert="INSERT INTO `babysitter` (`NationalID`,`FirstName`,`LastName`,`Age`,`Gender`,`Email`,	`Pass`,`City`,`Location`,`PhoneNumber`,`Bio`,`ProfileImage`) VALUES('$NID','$FirstName','$LastName','$Age','$Gender','$Email','$Password','$City','$Address','$Phonenumber','$Bio','$Babysitterpic')";

if(mysqli_query($con,$queryInsert)){
    $_SESSION['em']=$Email;
    header("Location:babysitterpage.php");
    mysqli_close();
    exit;
}
else{
    echo "Error: ".mysqli_error($con);
}

}//endif
else{
    echo "please submit";
}
?>