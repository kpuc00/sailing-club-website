<?php
require 'php/includes.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>SC Fontys</title>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">    
</head>

<body>
    
    <?php require_once("php/navbar.php"); ?>

    <div class="content">

    <h1>Welcome to Sailing Club Fontys</h1>

        <div class="rightColumn">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam vitae omnis et autem quo minus quisquam tenetur? Temporibus pariatur accusamus quo, eaque ut voluptatem error, optio itaque voluptas ipsa voluptate?</p>
            
            <ul class="linkFormat">
                <?php
                    include("fetchData/getRacesID_Name.php");
                    while ($row = mysqli_fetch_array($raceID_Name)) {
                ?>
                        <a href="regatta.php?regattaID=<?php echo $row["raceID"]; ?>"><?php echo $row["RaceName"]?></a>
                <?php
                    }
                    mysqli_free_result($raceID_Name);
                    mysqli_close($conn);
                ?> 
            </ul>

        </div>

        <div class="leftColumn">
            <?php 
                require_once("fetchData/getClasses.php"); 
                while ($row = mysqli_fetch_array($classes)) { 
                    include("php/infoBox.php");                    
                }
                mysqli_free_result($classes);
                mysqli_close($conn);
            ?>
        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>