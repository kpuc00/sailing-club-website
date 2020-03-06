<?php
    $conn =  mysqli_connect("studmysql01.fhict.local", "dbi431062", "Chios-82100", "dbi431062");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>