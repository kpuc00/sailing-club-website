<?php 
    $conn = include_once("connection.php");
    $sql = "CALL proTest('<insert_parameter>')";

    $result = mysqli_query($conn, $sql)
    

?>