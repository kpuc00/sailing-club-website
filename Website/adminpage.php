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

//upload profilepic
if (isset($_POST['submit'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "images/profilepictures/" . $_FILES['file']['name']);
    $q = mysqli_query($conn, "UPDATE accounts SET profilepicture = '" . $_FILES['file']['name'] . "' WHERE username = '" . $_SESSION['username'] . "'");
}

//remove profilepic
if (isset($_POST['removepic'])) {
    $remove = mysqli_query($conn, "UPDATE accounts SET profilepicture = 'default.png' WHERE username = '" . $_SESSION['username'] . "'");
}

// We don't have the password, email and other info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT password, email, profilepicture, usertype, registerdate, lastlogin FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $profilepic, $usertype, $registerdate, $lastlogin);
$stmt->fetch();
$stmt->close();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin page</title>
    <?php require_once("php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/adminpage.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Admin page</h1>

        <div class="leftColumn">
            <h3>Welcome back, <?= $_SESSION['displayname'] ?>!</h3>
            <h3>List of registered users</h3>
            <table>
                <tr>
                    <td>Username</td>
                    <td>Email</td>
                    <td>User type</td>
                    <td>Last login</td>
                </tr>
                <?php /*
                $getusers = $conn->query('SELECT username, email, usertype, lastlogin FROM accounts ORDER BY username ASC');
                while($users = $getusers->fetch_assoc()){
                echo "<td>".$users["username"]."</td><td>".$users["email"]."</td><td>".$users["usertype"]."</td><td>".$users["lastlogin"]."</td>";
                }
                $conn->close();*/
                ?>
            </table>
        </div>

        <div class="rightColumn">
            <h3><?= $_SESSION['displayname'] ?></h3>

            <a class="button" href='profile.php' title='Profile'>Edit profile</a>

        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>