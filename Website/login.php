<?php
require 'php/includes.php';
require 'auth/auth.php';
$message='';
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
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

    <nav>
       <?php require_once("php/navbar.php"); ?>
    </nav>

    <div class="content">

        <h1>Login</h1>

        <div class="form">

            <form method="post">
            <h3>Enter your credentials:</h3>

            <div class="error"><?php echo $message; ?></div>
            
            <hr>
            
            <input type="username" id="username" name="username" placeholder="Username" required>
            
            <input type="password" id="password" name="password" placeholder="Password" required>            
			<!--<h3>Forgot your password? <a href='reset.php'>Reset</a></h3>*/-->

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