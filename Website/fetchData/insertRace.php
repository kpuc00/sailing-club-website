<?php
    require("connection.php");
    $raceName = $_POST["raceName"];
    $query = "CALL InsertRace('$raceName')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../index.php");
?>