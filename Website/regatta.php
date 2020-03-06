<?php 
    require_once("fetchData/connection.php");
    $regattaID =  $_GET['regattaID'];

    $query1 = "CALL GetCompetitors($regattaID)";
    $result1 = mysqli_query($conn, $query1);

    $query2 = "CALL GetRaceName($regattaID)";
    $result2 = mysqli_query($conn, $query2);
    echo $result2;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Regatta 2019</title>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/regatta.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav>
        <?php require_once("navigation_bar.php"); ?>
    </nav>

  

    <div class="content">
        
        <form action="takePartRace.php" target="_self">
            <input type="submit" value="Take part"/>
        </form> 

        <?php echo '<h1>' . $result2 . '</h1>'; ?>
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
        <?php require_once("footer.php"); ?>
    </footer>

</body>

</html>