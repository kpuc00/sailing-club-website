<?php
    require "fetchData/connection.php";

    require_once("fetchData/GetClassID_Name.php");
    $classID = $_GET['classID'];

    $sql = "SELECT ClassDescription FROM classes WHERE classID = " . $classID . ";";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['ClassDescription'] ;
        }
    }
?>