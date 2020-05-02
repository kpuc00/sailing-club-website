<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="app/resources/css/infoBox.css">
    </head>
    <body>

        <div class="infoBox">
            <a href="class.php?courseId=<?php echo $course->getId(); ?>">
                <div class="box">
                    <?php
                        echo "<img src='app/storage/images/course-img/". $course->getLogo() ."'>";
                    ?>
                    <div class="context">
                        <h3><?php echo $course->getName(); ?></h3>
                        <p><?php echo $course->getDescription(); ?></p>
                    </div>
                </div>
            </a>
        </div>
    </body>
</html>