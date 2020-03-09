<?php
require 'php/includes.php';
?>

<?php
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

//database connection
require 'fetchData/connection.php';

//upload profilepic
if(isset($_POST['submit'])){
	move_uploaded_file($_FILES['file']['tmp_name'],"images/profilepictures/".$_FILES['file']['name']);
	$q = mysqli_query($conn,"UPDATE accounts SET profilepicture = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
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
	<title>Profile</title>
	<?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>

	<?php require_once("php/navbar.php"); ?>

    <div class="content">

	<h1>Profile</h1>

	<div class="leftColumn">
			<h3>Welcome back, <?=$_SESSION['displayname']?>!</h3>

			<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>User type:</td>
						<td><?=$usertype?></td>
					</tr>
					<tr>
						<td>Register date:</td>
						<td><?=$registerdate?></td>
					</tr>
					<tr>
						<td>Last login:</td>
						<td><?=$lastlogin?></td>
					</tr>
				</table>
	</div>

	<div class="rightColumn">
	<h3><?=$_SESSION['displayname']?></h3>
	<?php
        if($profilepic == ""){
            echo "<img class='profilepic' src='images/profilepictures/default.png'>";
        } else {
            echo "<img class='profilepic' src='images/profilepictures/".$profilepic."'>";
		}
	?>
	<h4>Upload new profile picture.</h4>
	<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file" accept="image/x-png,image/gif,image/jpeg">
			<br><br>
			<input type="submit" name="submit" value="Upload new picture">
		</form>
	</div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>