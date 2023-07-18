<?php
    $conn = mysqli_connect("localhost","root","","therealworld");

    //check connection
    if(mysqli_connect_error()){
        echo "connect error".mysqli_connect_error();
    }
    //echo 'registration successful';
 
 ?>
