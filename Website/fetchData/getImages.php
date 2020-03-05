<?php 
    require_once("connection.php");
    $query = "CALL GetImages()";
    $images = mysqli_query($conn, $query);
?>