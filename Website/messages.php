<?php
require 'php/includes.php';
?>

<?php
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

//If the user is not an administrator redirect to homepage...
if ($_SESSION['usertype'] != "Admin") {
    exit('<title>403</title><h1>Forbidden</h1>');
}

//database connection
require 'fetchData/connection.php';

//get all registered users
$getmessagesquery = "SELECT Name, Email, Phone, Message FROM contact";
$getmessages = mysqli_query($conn, $getmessagesquery);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Messages</title>
    <?php require_once("php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/messages.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Messages</h1>

        <div class="messages">
        <a class="button" href='adminpage.php' title='Admin page'>Admin page</a>
            <h3>Messages sent from "Contact me" page:</h3>

            <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            <?php 

            while($row = mysqli_fetch_assoc($getmessages)) { ?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>