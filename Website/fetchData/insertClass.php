<?php
    require("connection.php");

    
    $className = $_POST["className"];
    $classDescription = $_POST["classDescription"];
    $classLogo = $_FILES["file"]["name"];

    move_uploaded_file($_FILES['file']['tmp_name'],"../images/class-logos/".$_FILES['file']['name']);

    $query = "CALL InsertClass('$className', '$classDescription', '$classLogo')";
    
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../index.php");
?>