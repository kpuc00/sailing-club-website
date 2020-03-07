<?php
require 'php/includes.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sailing club</title>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav>
       <?php require_once("php/navigation_bar.php"); ?>
    </nav>

    <div class="content">   
        <div class="leftColumn">


            <?php 
                require_once("fetchData/getClasses.php"); 
                for ($i = 0; $i < 6; $i++){
                    require("php/infoBox.php");
                }
            ?>
        </div>

        <div class="rightColumn">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam vitae omnis et autem quo minus quisquam tenetur? Temporibus pariatur accusamus quo, eaque ut voluptatem error, optio itaque voluptas ipsa voluptate?</p>
            <ul class="linkFormat">
                <li><a href="regatta.php?regattaID=1">Optimist Regatta 2019</a></li>
                <li><a href="regatta.php?regattaID=2">Laser 4.7 Regatta 2019</a></li>
                <li><a href="regatta.php?regattaID=3">49er Regatta 2019</a></li>
                <li><a href="regatta.php?regattaID=4">Finn Regatta 2019</a></li>
                <li><a href="regatta.php?regattaID=5">420 Regatta 2019</a></li>
                <li><a href="regatta.php?regattaID=6">470 Regatta 2019</a></li>
            </ul>
        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>