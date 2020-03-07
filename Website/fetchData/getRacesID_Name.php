<?php
    require("connection.php");
    $query = "CALL GetRaceID_Name()";
    $raceID_Name = mysqli_query($conn, $query);
    
    if (!$raceID_Name) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
?>