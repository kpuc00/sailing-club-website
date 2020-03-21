<?php
//database connection
require 'fetchData/connection.php';
$message = "";

if (isset($_POST['submit'])) {
    if (!isset($_POST['username'], $_POST['password'])) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $conn->prepare('SELECT id, password, displayname, usertype FROM accounts WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password, $displayname, $usertype);
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
                $_SESSION['usertype'] = $usertype;
                $_SESSION['id'] = $id;
                //update lastlogin
                $query = mysqli_query($conn, "UPDATE accounts SET lastlogin = NOW() WHERE username = '" . $_SESSION['username'] . "'");
                //redirect to homepage
                header('Location: ../index.php');
            } else {
                $message = "Incorrect password!";
            }
        } else {
            $message = "Incorrect username/password!";
        }

        $stmt->close();
    }
}
?>