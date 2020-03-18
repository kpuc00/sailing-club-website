<?php
    require("connection.php");
    
    $coachClass = $_POST["coachClass"];
    $query = "CALL GetClassIdByName('$coachClass')";
    $result = mysqli_query($conn, $query);
    
    
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        
        $coachName = $_POST["coachName"];
        $coacLastName = $_POST["coachLastName"];
        $coachDescription = $_POST["coachDescription"];
        $coachPicture = $_POST["coachPicture"];
        $classId = $data["classID"];

        $query = "CALL InsertCoach('$coachName', '$coacLastName', '$coachDescription', '$coachPicture', '$classId')";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        header("Location: ../index.php");
    }
?>