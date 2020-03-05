<?php
    require_once("connection.php");
    $query = "CALL GetClasses()";
    $classes = mysqli_query($conn, $query);
?>