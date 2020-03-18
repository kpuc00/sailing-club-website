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

    <h1>Add Class</h1>

    <div class="form">

        <form action="fetchData/insertClass.php" method="POST">
        <h3>Enter the class details:</h3>

        <hr>
        
        <input type="title" id="username" name="className" placeholder="Class Name" required>
        <textarea id="subject" name="classDescription" placeholder="Class Description" style="height:200px" required></textarea>

        <p>Choose picture</p>
        <input type="file" name="classLogo" accept="image/x-png,image/gif,image/jpeg"> 
    

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