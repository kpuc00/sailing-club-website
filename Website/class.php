<?php
require 'php/includes.php';
?>


<?php 
/*
    require_once("fetchData/connection.php");
    require_once("fetchData/GetClassID_Name.php");
    $classID = $_GET['classID'];
*/    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Class</title>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/class.css">
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
    
    <?php require_once("php/navbar.php"); ?>

    <div class="class_content">
        
        <div class="class_title">
            <?php 
                require_once("fetchData/getClassName.php");
            ?>        
        </div>

        <div class="class_description">
            <p>
                <?php
                    require_once("fetchData/getClassDescription.php");
                ?>  
            </p>
        </div>

        <div class="timetable">
            <ul>
                <li>Monday : 10:00-11:30</li>
                <li>Tuesday : 10:00-11:30</li>
                <li>Wednsday : 10:00-11:30</li>
                <li>Thursday : 10:00-11:30</li>
                <li>Friday : 10:00-11:30</li>
                <li>Saturday : 10:00-11:30</li>
                <li>Sunday : 10:00-11:30</li>
            </ul>
        </div>
        
        <div class="coach_content">

            <div class="coach_picture">
                <p>PictureOfCoach</p>
            </div>

            <div class="coach_description">
                <p>
                    <?php
                        require_once("fetchData/getCoachDescription.php");
                    ?>
                </p>
            </div>
            
        </div>
    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>
</html>