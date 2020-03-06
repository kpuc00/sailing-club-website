<?php
    require("connection.php");
    $query = "CALL GetClassID_Name";
    $classID_Name = mysqli_query($conn, $query);
?>