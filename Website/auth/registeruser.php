<?php
//database connection
require 'fetchData/connection.php';
$message = "";

if (isset($_POST['submit'])) {
	// Now we check if the data was submitted, isset() function will check if the data exists.
	if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['displayname'])) {
		// Could not get the data that should have been sent.
		$message = "Please complete the registration form!";
	}

	// Make sure the submitted registration values are not empty.
	else if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['displayname'])) {
		// One or more values are empty.
		$message = "Please complete the registration form!";
		//exit('Please complete the registration form');
	}

	//Email Validation
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$message = "Email is not valid!";
		//exit('Email is not valid!');
	}

	//Invalid Characters Validation
	else if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
		$message = "Username is not valid!";
		//exit('Username is not valid!');
	}

	//Display name character Length Check
	else if (strlen($_POST['displayname']) > 20 || strlen($_POST['displayname']) < 5) {
		$message = "Display name must be between 5 and 20 characters long!";
		//exit('Display name must be between 5 and 20 characters long!');
	}

	//Password character Length Check
	else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
		$message = "Password must be between 5 and 20 characters long!";
		//exit('Password must be between 5 and 20 characters long!');
	}

	// We need to check if the account with that username exists.
	else {
		if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
			// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
			$stmt->bind_param('s', $_POST['username']);
			$stmt->execute();
			$stmt->store_result();
			// Store the result so we can check if the account exists in the database.
			if ($stmt->num_rows > 0) {
				// Username already exists
				$message = "Username exists, please choose another!";
				//echo 'Username exists, please choose another!';
			} else {
				// Username doesnt exists, insert new account
				if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email, displayname) VALUES (?, ?, ?, ?)')) {
					// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $_POST['displayname']);
					$stmt->execute();

					//echo 'You have successfully registered, you can now login!';
					$message = "You have successfully registered, you are now logged in!";
					session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['displayname'] = $_POST['displayname'];
					$_SESSION['usertype'] = "User";
					$_SESSION['id'] = $conn->insert_id;
					header('Location: ../index.php');
				} else {
					// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
					$message = "Something went wrong. Please try again later!";
					//echo 'Could not prepare statement!';
				}
			}
			$stmt->close();
		}
	}
	$conn->close();
}
?>