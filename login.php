<?php
    include 'app/includes/main.inc.php'; 
?>

<?php
// If the user is logged in redirect to the index page...
// if (isset($_SESSION['loggedin'])) {
//     header('Location: index.php');
//     exit;
// }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="app/resources/css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="app/resources/css/login.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php include 'app/resources/views/layout/navbar.php'; ?>

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

                <input type="submit" name="submit" value="Login">
                <h3>Not registered? <a href='register.php'>Register</a></h3>

            </form>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <?php include 'app/resources/views/layout/footer.php'; ?>
    </footer>

</body>

</html>