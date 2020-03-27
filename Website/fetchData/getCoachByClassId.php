<?php
    require("connection.php");

    $classID = $_GET["classID"];
    
    $query = "CALL GetCoach('$classID')";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_array($result);

    if ($data == null) {
        $data = [ "coachPicture" => "none",
                  "coachName" => "NO NAME",
                  "coachLastName" => "NO NAME",
                  "coachDescription" => "NO COACH FOR THIS CLASS"];
    }
    
    mysqli_free_result($result);
    mysqli_close($conn);
?>