<?php
    require("connection.php");

    $raceID = $_GET['regattaID'];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $club = $_POST["club"];

    $query = "CALL InsertCompetitor('$firstName', '$lastName', '$age', '$club', '$raceID')";
    mysqli_query($conn, $query);

    mysqli_close($conn);
?>