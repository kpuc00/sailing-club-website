<?php
require 'php/includes.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Race registration</title>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/takePartRace.css">
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

    <?php require_once("php/navbar.php"); ?>

    <div class = "raceRegistration">

        <h1 id="registrationTitle">Registration Form</h1>

        <form>
            <div class = "raceRegistrationForm">

                <div id="firstNameField">
                    <label for="firstName">First Name</label></br>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                </div>

                <div id="lastNameField">
                    <label for="lastName">Last Name</label></br>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                </div>

                <div id="ageField">
                    <label for="age">Age</label></br>
                    <input type="text" name="age" id="age" placeholder="Age" required>
                </div>

                <div id="clubField">
                    <label for="club">Club</label></br>
                    <input type="text" name="club" id="club" placeholder="Club" required>
                </div>

                <input type="submit" value="Submit" id="submintBtn"/>
                
            </div>
            
                
        </form>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>
</html>