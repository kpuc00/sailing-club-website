<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
    
<?php require_once("php/navbar.php"); ?>

<div class="content">

    <h1>Add Race</h1>

    <div class="form">

        <form action="fetchData/insertRace.php" method="POST">
        <h3>Enter the race details:</h3>

        <hr>
        
        <input type="title" id="username" name="raceName" placeholder="Title" required>      

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