<!--ValidLogin out-->
<?php
session_start();

$conToDatabase=mysqli_connect("localhost","root","","bestters");

if(mysqli_connect_errno()){
    die("Fail to connect database: ".mysqli_connect_error());
}

$EmailEnterd=$_POST['em'];
$PassEnterd=$_POST['pw'];

$qp="SELECT * FROM parent WHERE Email='$EmailEnterd' AND Pass='$PassEnterd' ";//parent
$qb="SELECT * FROM babysitter WHERE Email='$EmailEnterd' AND Pass='$PassEnterd' ";

$rp=mysqli_query($conToDatabase,$qp);//parent
$rb=mysqli_query($conToDatabase,$qb);

if(mysqli_num_rows($rp)>0){
    $_SESSION['em']=$EmailEnterd;
    mysqli_close($conToDatabase);
    header("Location:parentpage.php");
}
elseif(mysqli_num_rows($rb)>0){
    $_SESSION['em']=$EmailEnterd;
    mysqli_close($conToDatabase);
    header("Location:babysitterpage.php");
}
else{
    mysqli_close($conToDatabase);
    header("Location:Login.php?errorlogin=Wrong Email/Password!");
}
?>