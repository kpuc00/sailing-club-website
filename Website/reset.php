<?php require('auth/config.php');

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: index.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter valid e-mail address..';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['email'])){
			$error[] = 'A user with that e-mail does not exist.';
		}

	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE members SET resetToken = :token, resetComplete='No' WHERE email = :email");
			$stmt->execute(array(
				':email' => $row['email'],
				':token' => $token
			));

			//send email
			$to = $row['email'];
			$subject = "Password change";
			$body = "<p>Somebody wanted to change your password.</p>
			<p>If this was not you, you can ignore this message.</p>
			<p>To change your password, open this link: <a href='".DIR."auth/resetPassword.php?key=$token'>".DIR."auth/resetPassword.php?key=$token</a></p>
			<p>Copyright: Kristiyan Strahilov, Michael Groenewegen van der Weijden, Nikola Bolic</p>";

			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();

			//redirect to index page
			header('Location: login.php?action=reset');
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
    <title>Reset password</title>
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

        <h1>Reset password</h1>

        <div class="form">

            <form role="form" method="post">
			<h3>Enter the required data:</h3>
			<h3><a href='login.php'>Back to login</a></h3>
            
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
							echo "<h2 class='bg-success'>Your account has been successfully activated.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>A link for password reset was sent to your e-mail.</h2>";
							break;
					}
				}
				?>

            <input type="email" id="email" name="email" placeholder="E-mail">

            <hr>

			<input type="submit" value="Submit">

            </form>
        </div>

    </div>

    <footer>
        <?php require_once("footer.php"); ?>
    </footer>

</body>

</html>