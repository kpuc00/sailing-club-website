<?php 
    require_once("connection.php");
    $query = "CALL GetImages()";
    $result = mysqli_query($conn, $query);
?>