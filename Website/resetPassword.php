<?php require('includes/config.php'); 

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

$stmt = $db->prepare('SELECT resetToken, resetComplete FROM members WHERE resetToken = :token');
$stmt->execute(array(':token' => $_GET['key']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

//if no token from db then kill the page
if(empty($row['resetToken'])){
	$stop = 'Wrong confirmation link! Please use the link provided in your e-mail.';
} elseif($row['resetComplete'] == 'Yes') {
	$stop = 'Your password has been already changed!';
}

//if form has been submitted process it
if(isset($_POST['submit'])){

	//basic validation
	if(strlen($_POST['password']) < 3){
		$error[] = 'The password must be longer than 3 chars.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'The password must be longer than 3 chars.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Password and Confirm password do not match.';
	}

	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		try {

			$stmt = $db->prepare("UPDATE members SET password = :hashedpassword, resetComplete = 'Yes'  WHERE resetToken = :token");
			$stmt->execute(array(
				':hashedpassword' => $hashedpassword,
				':token' => $row['resetToken']
			));

			//redirect to index page
			header('Location: login.php?action=resetAccount');
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
    <title>Change password</title>
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

        <h1>Change password</h1>

        <div class="form">

            <form role="form" method="post">
			<h3>Enter the required data:</h3>
            
            <hr>

            <?php
					//check for any errors
					if(isset($error)){
						foreach($error as $error){
							echo '<p class="bg-danger">'.$error.'</p>';
						}
					}

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Your account is now activated.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>A link for password reset was sent to your e-mail.
							</h2>";
							break;
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

<!DOCTYPE html>

<html>
 
<head>
<title>Групата на Алекс - Смяна на паролата</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/form.css">
<link rel="stylesheet" href="style/main.css">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="image_src" href="../images/thumbnail.png" />
<script type="text/javascript" src="../js/rclick.js"></script>
<script type="text/javascript" src="../js/googleanalytics.js"></script>
<meta name="theme-color" content="#ff8566" />
<meta name="thumbnail" content="../images/thumbnail.png" />
<meta name="description" content="Българска страница за Групата на Алекс">
<meta name="keywords" content="Групата на Алекс,Групата на Алекс епизоди,Групата на Алекс музика,Alex and Co, Alex and Co episodes,Disney Channel,Дисни България,Групата на Алекс България,сериал">
<meta name="author" content="© Kpuc">
</head>

<body>

<div id="mainnav">
<ul style="position: fixed; width: 100%;top: 0;">
<li><img src="../images/logo.png" width="100%" hspace="5" padding-top="3px"; padding-bottom="3px"; padding-left="3px"></li>
<li><a class="active" href="../index.php">Начало </a></li>
<li><a href="../episodes.php">Епизоди </a></li>
<li><a href="../songs.php">Песни </a></li>
<li><a href="../game.php">Игра </a></li>
<li style="float:right;">
<?php 
session_start();
if(isset($_SESSION['username'])){
    echo "Потребител:", $_SESSION['username'];
    echo "<a href='logout.php'>Изход</a></h4>";
}else{
    echo "<a href='login.php'>Вход</a><a href='register.php'>Регистрация</a></h4>";
}
?>
</li>
</ul>
</div>
<br>

<br>

<div id="wrapper">
<h3 align="center">Моля попълнете нужната информация.</h3>
<div class="form">

	    	<?php if(isset($stop)){

	    		echo "<p class='bg-danger'>$stop</p>";

	    	} else { ?>

				<form role="form" method="post" action="" autocomplete="off">
					<h2>Смяна на паролата</h2>
					<hr>

					<?php
					//check for any errors
					if(isset($error)){
						foreach($error as $error){
							echo '<p class="bg-danger">'.$error.'</p>';
						}
					}

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Профилът ви е активиран.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Изпратен е линк за смяна на паролата във вашата поща.</h2>";
							break;
					}
					?>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Парола" tabindex="1">
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Потвърди паролата" tabindex="1">
							</div>
						</div>
					</div>
					
					<hr>
					<div class="row">
						<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Смяна на паролата" class="btn btn-primary btn-block btn-lg" tabindex="3"></div>
					</div>
				</form>

			<?php } ?>
</div>
<br>
</div>

<div id="footer">
Copyright © Kpuc 2017
</div>
 
</body>
 
</html>
