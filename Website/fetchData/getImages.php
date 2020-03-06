<?php 
    require("connection.php");
    $query = "CALL GetImages()";
    $images = mysqli_multi_query($conn, $query);
?>