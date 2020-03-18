<?php
    require("connection.php");
    
    $className = $_POST["className"];
    $classDescription = $_POST["classDescription"];
    $classLogo = $_POST["classLogo"];

    $query = "CALL InsertClass('$className', '$classDescription', '$classPicture')";
    
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../index.php");
?>