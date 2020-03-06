<?php require('auth/config.php');

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: index.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'The username must be longer than 3 chars.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'The username is already used.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'The password must be longer than 3 chars.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'The password must be longer than 3 chars.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Password and Confirm password do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter valid e-mail address.';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'The e-mail is already used.';
		}

	}

	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = $_POST['email'];
			$subject = "Account confirmation ";
			$body = "<p>You made an account in Saling Club Fontys website.</p>
			<p>To activate your account, open this link: <a href='".DIR."user/activate.php?x=$id&y=$activasion'>".DIR."user/activate.php?x=$id&y=$activasion</a></p>
			<p>Copyright: Kristiyan Strahilov, Michael Groenewegen van der Weijden, Nikola Bolic</p>";

			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();

			//redirect to index page
			header('Location: register.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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

        <h1>Register</h1>

        <div class="form">

            <form role="form" method="post">
            <h3>Enter your personal data:</h3>
            
            <hr>

            <?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Registration is successful. Please enable your account with the confirmation link sent to your e-mail.</h2>";
				}
				?>
            
            <input type="username" id="username" name="username" placeholder="Username">

            <input type="email" id="email" name="email" placeholder="E-mail">
            
            <input type="password" id="password" name="password" placeholder="Password">

            <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm password">

            <hr>

            <input type="submit" value="Register">
            <h3>Already registered? <a href='login.php'>Login</a></h3>

            </form>
        </div>

    </div>

    <footer>
        <?php require_once("footer.php"); ?>
    </footer>

</body>

</html>