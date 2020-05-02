<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/sailing-website-mvc/app/includes/main.inc.php";
    include "$path";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];

    $message = new Message(0, $name, $email, $phone, $subject);

    $ContactFormController = new ContactFormController();
    $ContactFormController->insertMessage($message);

    header("Location: ../../../index.php");
?>