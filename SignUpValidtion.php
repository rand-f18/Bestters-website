<?php 
//i think this is an addiotonal page for what?
session_start();

if(isset($_POST['SignupSubmit']))
{
$con=mysqli_connect("localhost","root","","BestTers")

if($con){

    $Firstname=$_POST['fname']
    $Lastname=$_POST['lname']
    $password=$_POST['pw']
    $repassword=$_POST['rpw']
    $email = $_POST ["em"];  
    $mobilenumber=$_POST['pn']
    $city=$_POST['city']
    $address=$_POST['add']
    $gender=$_POST['Gender']
    $profilepic=$_POST['pic']

    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 

    if (!preg_match("/^[a-zA-Z-' ]*$/",$Firstname)) {
        header("Location:signupParent.php? error=Only letters and white space allowed";)
        exit;//add it later i have to try if it works
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Lastname)) {
            header("Location:signupParent.php? error=Only letters and white space allowed";)
            exit;
            }

    if($password!==$repassword){
        header("Location:signupParent.php? error=password doesn't match !")
        exit;
    }
    if (!preg_match ("/^[0-9]*$/", $mobilenumber) ) {  
        header("Location:signupParent.php? error=Only numeric value is allowed."; ) 
        exit;
        }  
    if(strlen ($mobilenumber) != 10){
        header("Location:signupParent.php? error=Your Phone Number should contain 10 digit !");
        exit;
    }
      
    if (!preg_match ($pattern, $email) ){  
        header("Location:signupParent.php? error= Please Enter Valid Email !");
    exit;
}

        $query1="SELECT * FROM parent WHERE Email='$email' ";

        $result1=mysqli_query($con,$query1);
        if(mysqli_num_rows($result1)>0){
            header("Location:signupParent.php? error= user exist(Email already used before)");
        mysqli_close();
        exit; }

        $query2="SELECT * FROM parent WHERE PhoneNumber='$mobilenumber' ";

        $result2=mysqli_query($con,$query2);
        if(mysqli_num_rows($result2)>0){
        header("Location:signupParent.php? error= user exist(Phone number already used before)");
        mysqli_close();
         exit; }

$query3="INSERT INTO `parent`(`ID`,	`FirstName`, `LastName`,`Password`,	`Email`,`PhoneNumber`,`City`,`Location`,`Gender`,`ProfileImage`) VALUES (1,'$Firstname','$Lastname','$password','$email','$mobilenumber','$city','$address','$gender','$profilepic')"

if(mysqli_query($con,$query3)){
    $_SESSION['em']=$email;
    $_SESSION['pn']=$mobilenumber;
    header("Location:ParentPreviousBookings.php");
    exit;
}

}
else{
die('There is problem with database connection'.mysqli_connect_error())
}

}

?>