<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/Amsterdam');

//database credentials
define('DBHOST','studmysql01.fhict.local');
define('DBUSER','dbi431062');
define('DBPASS','Chios-82100');
define('DBNAME','dbi431062');

//application address
define('DIR','localhost/Website');
define('SITEEMAIL','no_reply@scfontys.nl');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>