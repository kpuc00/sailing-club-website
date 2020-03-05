<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    <body>
        <a class="active" href="index.php"><i class="fa fa-home"></i> Home</a>
        <a href="about.php"><i class="fa fa-user-circle"></i> About us</a>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-anchor"></i> Classes <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href=""><i class="fa fa-ship"></i> Optimist</a>
                <a href=""><i class="fa fa-ship"></i> Laser</a>
                <a href=""><i class="fa fa-ship"></i> 49er</a>
                <a href=""><i class="fa fa-ship"></i> Finn</a>
                <a href=""><i class="fa fa-ship"></i> 420</a>
                <a href=""><i class="fa fa-ship"></i> 470</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-list"></i> Regattas <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <?php
                    include("fetchData/getRacesID_Name.php");
                    while ($row = mysqli_fetch_array($raceID_Name)) {
                ?>
                        <a href="regatta.php?regattaID=<?php echo $row["raceID"]; ?>"><i class="fa fa-file"></i> <?php echo $row["RaceName"]?></a>
                <?php
                    }
                ?>  
            </div>
        </div>
        <div class="contact-button">
            <a href="contact.php"><i class="fa fa-address-card"></i> Contact</a>
        </div>
    </body>

</html>