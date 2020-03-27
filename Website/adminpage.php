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

//get all registered users
$getusersquery = "SELECT id, username, email, usertype, lastlogin FROM accounts ORDER BY id";
$getusers = mysqli_query($conn, $getusersquery);




if (isset($_POST['makeuser'])){
    $touser = mysqli_query($conn, "UPDATE accounts SET usertype = 'User' WHERE id = '". $selectedusername ."'");
    header('Location: adminpage.php');
}

else if (isset($_POST['makeadmin'])){
    $toadmin = mysqli_query($conn, "UPDATE accounts SET usertype = 'Admin' WHERE id = '". $selectedusername ."'");
    header('Location: adminpage.php');
}

else if (isset($_POST['deleteuser'])){
    $deleteuser = mysqli_query($conn, "DELETE FROM accounts WHERE id = '". $selectedusername ."'");
    header('Location: adminpage.php');
}

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
            <h3>List of registered users:</h3>

            <table>
            <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>Last login</th>
                <th>Type</th>
                <th></th>
                <th></th>
            </tr>
            <?php 
            $userindex = 1;
            while($row = mysqli_fetch_assoc($getusers)) { ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['lastlogin']; ?></td>
                    <td><?php echo $row['usertype']; ?></td>
                    <td><form method="post"><?php 
                    
                    if($row['usertype']=="User"){
                        $selectedusername = $row['username'];
                        $selectedusertype = "User";
                        echo "<input type='submit' name='makeadmin' value='Make admin'/>";
                    }
                    else if($row['usertype']=="Admin"){
                        $selectedusername = $row['username'];
                        $selectedusertype = "Admin";
                        echo "<input type='submit' name='makeuser' value='Make user'/>";
                    }
                    else{
                        echo "Unavailable";
                    }
                    
                    ?></td>
                    <td><?php 

                    $selectedusername = $row['username'];
                    echo "<input type='submit' name='deleteuser' value='Delete'/>";

                    ?></form></td>
                </tr>
                <?php $userindex++; } ?>
        </table>

            
        </div>

        <div class="rightColumn">
        <?php
        if($profilepic == "default.png"){
            echo "<img class='profilepic' src='images/profilepictures/default.png'>";
        } else {
            echo "<img class='profilepic' src='images/profilepictures/".$profilepic."'>";
		}
    ?>
    <br>
            <h3><?= $_SESSION['displayname'] ?></h3>

            <a class="button" href='profile.php' title='Profile'>Edit profile</a>

        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>