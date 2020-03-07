<?php
    require_once("fetchData/connection.php");
    require_once("fetchData/getImages.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/pictureSlider.css">
    </head>
    <body>
        <script>src="javascript/pictureSlider.js"</script>

        <div class="carousel-container">
            <i class="fa fa-arrow-left" aria-hidden="true" class="prevBtn"></i>
            <i class="fa fa-arrow-right" aria-hidden="true" class="nextBtn"></i>
            
            <div class="carousel-slide">
                <?php 
                    while ($row = mysqli_fetch_array($result)) {      
                        echo '<img src=" ' . $row['image'] . ' ">';
                    }
                ?>
            </div>
        </div>
        
    </body>
</html>