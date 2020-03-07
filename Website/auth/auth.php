<?php
//database connection
require 'fetchData/connection.php';

if ( isset( $_POST['submit'] ) ) { 
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}
//$message = "";
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT id, password, displayname FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $displayname);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['displayname'] = $displayname;
            $_SESSION['id'] = $id;
            header('Location: ../index.php');
        } else {
            //echo 'Incorrect password!';
            $message = "Incorrect password!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    } else {
        //echo 'Incorrect username/password!';
        $message = "Incorrect username/password!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    $stmt->close();
}
}
?>