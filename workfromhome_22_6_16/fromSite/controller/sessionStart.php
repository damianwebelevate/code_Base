<?php
define("BASE_URI", "http://localhost/fromSite/");

session_start();
if(!isset($_SESSION['START'])){
	$_SESSION['START'] = time();
}

getEndOfSession();

function getEndOfSession(){
	global $_SESSION;
	if(time() - $_SESSION['START'] > 10){
		session_destroy();
		session_regenerate_id(true);
		return true;	
	}
	return false;
}

?>