<?php header('Content-Type: application/json');?>
<?php session_start();

require dirname(__FILE__).'/emailTemplate/class/EmailTemplate.php';

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

print_r($_POST);


?>
