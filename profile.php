<?php
    include 'app/includes/main.inc.php'; 
?>

<?php
// If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: login.php');
// 	exit;
// }

// //database connection
// require 'fetchData/connection.php';

// //upload profilepic
// if(isset($_POST['submit'])){
// 	move_uploaded_file($_FILES['file']['tmp_name'],"images/profilepictures/".$_FILES['file']['name']);
// 	$q = mysqli_query($conn,"UPDATE accounts SET profilepicture = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
// }

// //remove profilepic
// if(isset($_POST['removepic'])){
// 	$remove = mysqli_query($conn,"UPDATE accounts SET profilepicture = 'default.png' WHERE username = '".$_SESSION['username']."'");
// }

// // We don't have the password, email and other info stored in sessions so instead we can get the results from the database.
// $stmt = $conn->prepare('SELECT password, email, profilepicture, registerdate, lastlogin FROM accounts WHERE id = ?');
// // In this case we can use the account ID to get the account info.
// $stmt->bind_param('i', $_SESSION['id']);
// $stmt->execute();
// $stmt->bind_result($password, $email, $profilepic, $registerdate, $lastlogin);
// $stmt->fetch();
// $stmt->close();

?>

<!DOCTYPE html>
<html>

<head>
	<title>Profile</title>
	<?php require_once("php/head.php");?>
    <link rel="stylesheet" type="text/css" href="app/resources/css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="app/resources/css/profile.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php include 'app/resources/views/layout/navbar.php'; ?>

    <div class="content">

	<h1>Account</h1>

	<div class="leftColumn">
			<h3>Welcome back, <?=$_SESSION['displayname']?>!</h3>

			<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>User type:</td>
						<td><?=$_SESSION['usertype']?></td>
					</tr>
					<tr>
						<td>Last login:</td>
						<td><?=$lastlogin?></td>
					</tr>
					<tr>
						<td>Register date:</td>
						<td><?=$registerdate?></td>
					</tr>
				</table>
	</div>

	<div class="rightColumn">
	<?php echo "<img class='profilepic' src='app/storage/images/". $somecoded ."'>"; ?>
	<h3><?=$_SESSION['displayname']?></h3>
	<?php 
	if($_SESSION['usertype'] == "Admin"){
		echo "<a class='button' href='adminpage.php' title='Admin page'>Admin page</a>";
	}
	?>	
	<h4>Upload new profile picture.</h4>
	<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file" accept="image/x-png,image/gif,image/jpeg">
			<br><br>
			<input type="submit" name="submit" value="Upload new picture">
            <input type="submit" name="removepic" value="Remove picture">
		</form>
	</div>

	</div>
	
    <!-- Footer -->
    <footer>
        <?php include 'app/resources/views/layout/footer.php'; ?>
    </footer>

</body>

</html>