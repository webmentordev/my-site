<?php
    $host = "localhost";
    $user = "ilobber_luqman";
    $pass = "*EO.ev^8EK<QFW*";
    $db = "contacts";

    $con = mysqli_connect($host, $user, $pass, $db);
    
    if($con){
        //echo "connected";
    }
    else{
        //echo "Not Connected";
    }
?>