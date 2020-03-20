<?php
require 'php/includes.php';
require 'auth/registeruser.php';

$msg = $message;
?>

<?php
// If the user is logged in redirect to the index page...
if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <?php require_once("php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Register</h1>

        <div class="form">

            <!--<form action="auth/registeruser.php" method="post">-->
            <form action="" method="post">
                <h3>Enter your personal data:</h3>

                <div class="error">
                    <p><?php echo $msg; ?></p>
                </div>

                <hr>

                <input type="username" id="username" name="username" placeholder="Username" required>

                <input type="text" id="displayname" name="displayname" placeholder="Display name" required>

                <input type="email" id="email" name="email" placeholder="E-mail" required>

                <input type="password" id="password" name="password" placeholder="Password" required>

                <!--<input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm password" required>-->

                <hr>

                <input type="submit" name="submit" value="Register">
                <h3>Already registered? <a href='login.php'>Login</a></h3>

            </form>
        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>