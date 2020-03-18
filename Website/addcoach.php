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

        <form action="fetchData/insertCoach.php" method="POST">
        <h3>Enter the race details:</h3>

        <hr>
        
        <input type="title" id="username" name="coachName" placeholder="First Name" required>  
        <input type="title" id="username" name="coachLastName" placeholder="Last Name" required>    
        <input type="title" id="username" name="coachDescription" placeholder="Coach Description" required> 
        <input type="title" id="username" name="coachClass" placeholder="Coach Class" required> 

        <p>Choose picture</p>
        <input type="file" name="coachPicture" accept="image/x-png,image/gif,image/jpeg">     

        <hr>

        <input type="submit" name="submit" value="Add Coach">

        </form>
    </div>

</div>

<footer>
    <?php require_once("php/footer.php"); ?>
</footer>
</body>
</html>