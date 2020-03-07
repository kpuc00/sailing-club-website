<?php
    require("connection.php");
    $query = "CALL GetClasses()";
    $classes = mysqli_query($conn, $query);
    if (!$classes) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
?>