<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("php/head.php");?>
        <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
        <link rel="stylesheet" type="text/css" href="css/add.css">
        <script type="text/javascript" src="javascript/validateClassInput.js"></script>

    </head>
    <body>
        
    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Add Class</h1>

        <div class="form">

            <form action="fetchData/insertClass.php" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
            <h3>Enter the class details:</h3>

            <hr>
            
            <input type="title" id="className" name="className" placeholder="Class Name"> 
            <div id="classNameError"></div>
            <textarea id="subject" id="classDescription" name="classDescription" placeholder="Class Description" style="height:200px"></textarea>
            <div id="classDescriptionError"></div>
            <br>
            <p>Choose picture</p>
            <input type="file" id="classPicture" name="file" accept="image/x-png,image/gif,image/jpeg"> 
            <div id="classPictureError"></div>

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