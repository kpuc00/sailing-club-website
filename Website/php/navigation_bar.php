<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    <body>
        <a class="active" href="index.php"><i class="fa fa-home"></i> Home</a>
        <a href="about.php"><i class="fa fa-info"></i> About us</a>
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-anchor"></i> Classes <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <?php 
                    require_once("fetchData/getClassID_Name.php");
                    while ($row = mysqli_fetch_array($classID_Name)) {
                ?>
                        <a href="class.php?classID=<?php echo $row["classID"]; ?>"><i class="fa fa-ship"></i> <?php echo $row["ClassName"]; ?></a>
                <?php
                    }
                    mysqli_free_result($classID_Name);
                    mysqli_close($conn);
                ?>
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
                    mysqli_free_result($raceID_Name);
                    mysqli_close($conn);
                ?>  
            </div>
        </div>
        <a href="contact.php"><i class="fa fa-address-card"></i> Contact</a>
        <div class="contact-button">
            
            <?php
                if(isset($_SESSION['loggedin'])){
                    echo "<a href='profile.php'><i class='fa fa-user-circle'></i> " . $_SESSION['name'];
                    echo "</a>";
                    echo "<a href='auth/logout.php'><i class='fa fa-sign-out'></i> Logout</a>";
                }else{
                    echo "<a href='login.php'><i class='fa fa-sign-in'></i> Login</a>";
                }
            ?>
        </div>
    </body>
</html>