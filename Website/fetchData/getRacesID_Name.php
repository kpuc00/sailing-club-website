<?php
    require_once("connection.php");
    $query = "CALL GetRaceID_Name()";
    $raceID_Name = mysqli_query($conn, $query);
?>