<?php
    require_once("connection.php");
    $query = "CALL GetClasses()";
    $result = mysqli_query($conn, $query);
?>