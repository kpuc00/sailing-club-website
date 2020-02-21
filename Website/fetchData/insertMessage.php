<?php
    require_once("connection.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];

    $query = "Call AddContactMessage($name, $email, $phone, $subject)"

?>