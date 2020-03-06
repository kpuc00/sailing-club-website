<?php
    require("connection.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];

    $query = "Call InsertMessage('$name', '$email', '$phone', '$subject')";

    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ../index.php");
?>