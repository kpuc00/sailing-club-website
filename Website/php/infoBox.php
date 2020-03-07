<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/infoBox.css">
    </head>
    <body>

        <div class="infoBox">
            <a href="class.php?classID=<?php echo $row["classID"] ?>>">
                <div class="box">
                    <img src="images/laser-logo.png">
                    <div class="context">
                        <h3><?php echo $row["ClassName"]; ?></h3>
                        <p><?php echo $row["ClassDescription"]; ?></p>
                    </div>
                </div>
            </a>
        </div>
    </body>
</html>