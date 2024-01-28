<!--Homepage-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bestters</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7c74091496.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width", initial-scale="1">
</head>

<body>

    <div class="header">
        <nav class="home">
            <img src="images\logo2.png" alt="logo" width="80" height="45">
            <ul>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="QA.php">Q&A</a></li>
                <li><strong><a href="Login.php">Log In</a></strong></li> <!--abeer /correct link??-->
            </ul>
        </nav>
    </div>


    <div class="headerL">
        <div class="lines"></div>
    </div>

    <img  src="images\yellow.png" id="pic" alt="home page picture" width="500" height="500">

    <div class="text">
        <p>BestTers</p>
        <h2>Need a rest?<br>Choose the best!</h2>
    </div>

    <form action="signupParent.php">
        <input id="parent" type="submit" value="sign up as parent">
    </form>

    <form action="signupBabysitter.php">
        <input id="babysitter" type="submit" value="sign up as baby sitter">
    </form>

    <footer class="footer">
        <div class="footer-content">
            <h3>contact us</h3>
            <ul class="socials">
                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a href="mailto:bestters.info@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <P>copyright &copy;2022 codeOpacity. designed by <span>Bestters</span></P>
        </div>

    </footer>




</body>
</html>