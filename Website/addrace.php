<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">
    
    <script type="text/javascript" src="javascript/validateRaceInput.js"></script>
</head>
<body>
    
<?php require_once("php/navbar.php"); ?>

<div class="content">

    <h1>Add Race</h1>

    <div class="form">

        <form action="fetchData/insertRace.php" method="POST" onsubmit="return validate()">
        <h3>Enter the race details:</h3>

        <hr>
        
        <input type="title" id="raceName" name="raceName" placeholder="Title">      
        <div id="addRaceError"></div>
        <hr>

        <input type="submit" name="submit" value="Add Race">
        
        </form>
    </div>

</div>

<footer>
    <?php require_once("php/footer.php"); ?>
</footer>
</body>
</html>