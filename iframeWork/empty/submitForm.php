<?php header('Content-Type: application/json'); ?>
<?php

session_start();


if(isset($_POST["pants"])){

	$pants = $_POST['pants'];

	$_SESSION['data'] = $pants;

	// returning the image uploaded source
	// either output it from session Pants or from the json encoded string

	echo json_encode(array("uploaded" => "true" , "deadly" => $pants));

}else{
	echo "not set";
}

?>
