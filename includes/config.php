<?php
 ob_start();

 session_start();
   $timezone=date_default_timezone_set("Africa/Casablanca");
$con=mysqli_connect("localhost","root","","slotify");
if(mysqli_connect_errno()){
    echo "Failde to connect :".mysqli_connect_errno();
}

?>