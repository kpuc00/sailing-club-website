<?php 
    require_once("fetchData/connection.php");
    $regattaID =  $_GET['regattaID'];
    $query = "CALL getCompetitors($regattaID)";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Optimist regatta 2019</title>
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

        <h1>Optimist Regatta 2019</h1>
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
                while($row = mysqli_fetch_assoc($result))
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