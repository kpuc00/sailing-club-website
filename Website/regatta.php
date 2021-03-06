<?php
require 'php/includes.php';
?>

<?php 
    require_once("fetchData/connection.php");
    $regattaID =  $_GET['regattaID'];

    $query1 = "CALL GetCompetitors($regattaID)";
    $result1 = mysqli_query($conn, $query1);

    $query2 = "CALL GetRaceName($regattaID)";
    $result2 = mysqli_query($conn, $query2);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Regatta 2019</title>
    <?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/regatta.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>  

    <div class="content">

        <?php if(isset($_SESSION['loggedin'])){ ?>
            <a href="takePartRace.php?regattaID=<?php echo $regattaID; ?>">
                <input type="submit" value="Take part"/>
            </a>
        <?php
        } 
        else { ?>
            <a href="login.php">
                <input type="submit" value="Take part"/>
            </a>            
        <?php
        }
        ?>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Club</th>
            </tr>
            <?php
                $index = 1;
                while($row = mysqli_fetch_assoc($result1))
                {
            ?>
                <tr>
                    <td><?php echo $index ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Club']; ?></td>
                </tr>
            <?php
                $index++;
                }
            ?>
        </table>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>