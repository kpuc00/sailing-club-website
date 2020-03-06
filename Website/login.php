<?php
//include config
require_once('auth/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: index.php');
		exit;
	
	} else {
		$error[] = 'Incorrect username/password.';
	}

}//end if submit
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="auth/auth.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav>
       <?php require_once("navigation_bar.php"); ?>
    </nav>

    <div class="content">

        <h1>Login</h1>

        <div class="form">

            <form role="form" method="post">
            <h3>Enter your credentials:</h3>
            
            <hr>

            <?php
            //check for any errors
            if(isset($error)){
                foreach($error as $error){
                    echo '<p class="bg-danger">'.$error.'</p>';
                }
            }

            if(isset($_GET['action'])){

                //check the action
                switch ($_GET['action']) {
                    case 'active':
                        echo "<h2 class='bg-success'>Your account is successfully activated.</h2>";
                        break;
                    case 'reset':
                        echo "<h2 class='bg-success'>A link for change your password has been sent to your e-mail.</h2>";
                        break;
                    case 'resetAccount':
                        echo "<h2 class='bg-success'>Your password has been successfully changed.</h2>";
                        break;
                }

            }				
            ?>
            
            <input type="username" id="username" name="username" placeholder="Username">
            
            <input type="password" id="password" name="password" placeholder="Password">            
			<h3>Forgot your password? <a href='reset.php'>Reset</a></h3>

            <hr>

            <input type="submit" value="Login">
            <h3>Not registered? <a href='register.php'>Register</a></h3>

            </form>
        </div>

    </div>

    <footer>
        <?php require_once("footer.php"); ?>
    </footer>

</body>

</html>