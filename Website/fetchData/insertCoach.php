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
        $coachPicture = $_POST["coachPicture"];
        $classId = $data["classID"];

        $query1 = "CALL InsertCoach('$coachName', '$coachLastName', '$coachDescription', '$coachPicture', '$classId')";
        mysqli_query($conn, $query1);
        mysqli_close($conn);
        header("Location: ../index.php");
    }
?>