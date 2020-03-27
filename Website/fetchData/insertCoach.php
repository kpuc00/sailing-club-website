<?php
    require("connection.php");
    
    $coachClass = $_POST["coachClass"];
    $query = "CALL GetClassIdByName('$coachClass')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {

        

        require("connection.php");
        $data = mysqli_fetch_array($result);
        
        $coachName = $_POST["coachFirstName"];
        $coachLastName = $_POST["coachLastName"];
        $coachDescription = $_POST["coachDescription"];
        $coachPicture = $_FILES["file"]["name"];
        $classId = $data["classID"];

        move_uploaded_file($_FILES['file']['tmp_name'],"../images/coach-images/".$_FILES['file']['name']);

        $query1 = "CALL InsertCoach('$coachName', '$coachLastName', '$coachDescription', '$coachPicture', '$classId')";
        mysqli_query($conn, $query1);
        mysqli_close($conn);
        header("Location: ../index.php");
    } else {

    } 


?>