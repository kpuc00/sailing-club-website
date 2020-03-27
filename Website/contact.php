<?php
require 'php/includes.php';

//database connection
require 'fetchData/connection.php';

//get user picture path for username kpuc from database
$getpickpuc = $conn->prepare('SELECT profilepicture FROM accounts WHERE id = 1');
$getpickpuc->execute();
$getpickpuc->bind_result($pickpuc);
$getpickpuc->fetch();
$getpickpuc->close();

//get user picture path for username michael from database
$getpicmichael = $conn->prepare('SELECT profilepicture FROM accounts WHERE id = 2');
$getpicmichael->execute();
$getpicmichael->bind_result($picmichael);
$getpicmichael->fetch();
$getpicmichael->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Contact</h1>

        <div class="leftColumn">

            <div class="form">
                <form action="fetchData/insertMessage.php" method="POST">
                    <label for="name">Name</label>
                    <input type="name" id="name" name="name" placeholder="Your Name" value="" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="yourname@domain.com" required>

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="+359234567890" required>

                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Your message here.." style="height:200px" required></textarea>

                    <input type="submit" value="Submit" >
                </form>
            </div>

        </div>

        <div class="rightColumn">
            <h3>Feel free to message us. We will respond you as soon as we can!</h3>
            <h4>Coaches:</h4>
            <p>
                <?php echo "<img class='profilepic' src='images/profilepictures/". $pickpuc . "'><br>"?>
                <strong>Kristiyan Strahilov</strong><br>
                k.strahilov@student.fontys.nl
            </p>
            <p>
                <?php echo "<img class='profilepic' src='images/profilepictures/". $picmichael . "'><br>"?>
                <strong>Michael Groenewegen van der Weijden</strong><br>
                m.groenewegenvanderweijden@student.fontys.nl
            </p>
        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>