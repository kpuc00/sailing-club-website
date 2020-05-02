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

    <h1>Add Coach</h1>

    <div class="form">

        <form action="fetchData/insertCoach.php" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
            <h3>Enter the coach details:</h3>

            <hr>
            
            <input type="title" id="coachFirstName" name="coachFirstName" placeholder="First Name">  
            <div id="coachFirstNameError"></div>
            <input type="title" id="coachLastName" name="coachLastName" placeholder="Last Name">    
            <div id="coachLastNameError"></div>
            <input type="title" id="coachClass" name="coachClass" placeholder="Coach Class"> 
            <div id="coachClassError"></div>
            <textarea id="coachDescription" name="coachDescription" placeholder="Coach Description" style="height:200px"></textarea>
            <div id="coachDescriptionError"></div>
            <p>Choose picture</p>

            <input type="file" id="coachPicture" name="file" accept="image/x-png,image/gif,image/jpeg">     
            <div id="coachPictureError"></div>

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