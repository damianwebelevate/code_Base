<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>

<?php
require dirname(__FILE__).'/sessionStart.php';

if(!getEndOfSession()){
	echo json_encode(array("Session" => "good", "Data" => $_SESSION));
}else{
    echo json_encode(array("Session" => "http://localhost/fromSite/endofsession.php"));
}