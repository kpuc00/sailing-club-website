<?php
    require("connection.php");

    $userID = $_GET["userId"];

    $query = "CALL MakeUser('$userID')";
    
    echo 'User';
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../adminpage.php");
?>