<?php

function generateFormToken($form) {
    
   // generate a token from an unique value
	// $token = md5(uniqid(microtime(), true));  
	$token = hash('sha256', uniqid(microtime(),true));
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token; 
	
	return $token;

}


function checkToken($form){
	if(!isset($_SESSION[$form.'_token'])){


		return false;
	}
	if(!isset($_POST['token'])){


		return false;
	}

	if($_SESSION[$form.'_token'] !== $_POST['token']){


		return false;
	}

	return true;
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>