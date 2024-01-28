<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "bestters");
if(isset($_POST['sublogin'])){


if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
  }

  
  $Email=$_POST['em'];
  $Password=$_POST['pw'];

  $queryParent="SELECT * FROM parent WHERE Email='$Email' AND Pass='$Password' ";
  $resultParent=mysqli_query($con,$queryParent);

  $queryBabysitter="SELECT * FROM babysitter WHERE Email='$Email' AND Pass='$Password' ";
  $resultBabysitter=mysqli_query($con,$queryBabysitter);

  if(mysqli_num_rows($resultParent)>0){
    $_SESSION['em']=$Email;
    mysqli_close();
    window.location('parentpage.php');
    //header("Location:/parentpage.php");
  }
  else if(mysqli_num_rows($resultBabysitter)>0){
    $_SESSION['em']=$Email;
  mysqli_close();
  window.location('babysitterpage.php');
     // header("Location:/babysitterpage.php");
 }
 else{
    mysqli_close();
    window.location('Login.php');
    // header("Location:/Login.php");
  }
}
?>