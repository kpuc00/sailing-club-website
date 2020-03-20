<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">

    <script type="text/javascript" src="javascript/validateCoachInput.js"></script>
</head>
<body>
    
<?php require_once("php/navbar.php"); ?>

<div class="content">

    <h1>Add Race</h1>

    <div class="form">

        <form action="fetchData/insertCoach.php" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
            <h3>Enter the race details:</h3>

            <hr>
            
            <input type="title" id="coachFirstName" name="coachName" placeholder="First Name">  
            <input type="title" id="coachLastname" name="coachLastName" placeholder="Last Name">    
            <input type="title" id="coachDescription" name="coachDescription" placeholder="Coach Description"> 
            <input type="title" id="coachClass" name="coachClass" placeholder="Coach Class"> 

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