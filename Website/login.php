<?php
require 'php/includes.php';
require 'auth/auth.php';

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
    <title>Login</title>
    <?php require_once("php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="content">

        <h1>Login</h1>

        <div class="form">

            <form action="" method="post">
                <h3>Enter your credentials:</h3>

                <div class="error">
                    <p><?php echo $msg; ?></p>
                </div>

                <hr>

                <input type="username" id="username" name="username" placeholder="Username" required>

                <input type="password" id="password" name="password" placeholder="Password" required>

                <hr>

                <input type="checkbox" id="rememberme" name="rememberme" value="Remember me">
                <label for="rememberme"> Remember me</label><br><br>

                <input type="submit" name="submit" value="Login">
                <h3>Not registered? <a href='register.php'>Register</a></h3>

            </form>
        </div>

    </div>

    <footer>
        <?php require_once("php/footer.php"); ?>
    </footer>

</body>

</html>