 
 
  

<?php
 if(!$dbConnection = mysqli_connect('localhost', 'root', '') )
        die ('Unable to connect. Check your connection parameters.');

        if(! $db=mysqli_select_db($dbConnection, 'BestTers' ))
           die(mysqli_error($dbConnection));
?>