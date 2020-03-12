<?php
    require "fetchData/connection.php";

    require_once("fetchData/GetClassID_Name.php");
    $classID = $_GET['classID'];

    $sql = "SELECT ClassName FROM classes WHERE classID = " . $classID . ";";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['ClassName'] . "<br>";
        }
    }
    
    /*
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo $row['ClassName'] ;
         }
    }   
    */       
?>