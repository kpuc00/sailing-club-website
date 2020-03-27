<?php
    require("connection.php");

    $userID = $_GET["userId"];

    $query = "CALL DeleteUser('$userID')";
 
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../adminpage.php");
?>