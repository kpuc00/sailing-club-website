<?php
    include 'app/includes/main.inc.php';        
?>

<!DOCTYPE html>
<html>

    <head>
        <title>SC Fontys</title>
        <link rel="stylesheet" type="text/css" href="app/resources/css/bodystyle.css">
        <link rel="stylesheet" type="text/css" href="app/resources/css/home.css">    
    </head>

    <body>
        
        <!-- Navigation Bar -->
        <?php include 'app/resources/views/layout/navbar.php'; ?>

        <!-- Content Of Page Sart -->
        <div class="content">

            <h1>Welcome to Sailing Club Fontys</h1>

            <!-- Left Column Start -->
            <div class="leftColumn">
                <div class="infoboxcontainer">
                <?php 
                    $courseObj = new courseView();
                    $courseObj->viewCourses();
                ?>
                </div>
            </div>
            <!-- Left Column End -->

            <!-- Right Column Start-->
            <div class="rightColumn">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam vitae omnis et autem quo minus quisquam tenetur? Temporibus pariatur accusamus quo, eaque ut voluptatem error, optio itaque voluptas ipsa voluptate?</p>
                
                <ul class="linkFormat">
                    <?php
                        $regattaObj = new regattaView();
                        $regattaObj->viewRegattaIdName();
                    ?> 
                </ul>
            </div>
            <!-- Right Column End -->

        </div>
        <!-- Content Of Page End -->

        <!-- Footer -->
        <footer>
            <?php include 'app/resources/views/layout/footer.php'; ?>
        </footer>
    </body>
</html>