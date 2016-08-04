<?php header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST'); 
?> 

<?php

$processed = array();

// error_reporting(E_ALL | E_STRICT);
// ini_set('display_errors', 1);


foreach ($_FILES['files']['name'] as $key => $name) {

	$allowed = array('gif', 'png', 'jpg', 'JPEG', 'bnp', 'jpeg');

	
	$uploaded = dirname(__FILE__).'/uploads/';
	// $uploaded = 'http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/uploads/';

	if($_FILES['files']['error'][$key] === 0){

		$temp = $_FILES['files']['tmp_name'][$key];
		$ext = explode('.', $name);
		$ext = strtolower(end($ext));
		$file = $name . "_" .uniqid('', true). time() . '.' .$ext;
		
		$uploaded .= $file;

		if(in_array($ext, $allowed) && move_uploaded_file($temp, $uploaded)){
		// if(move_uploaded_file($temp, $uploaded)){
			$processed[] = array(

				'name' => $name,

				'file' => $file,

				'uploaded' => true

				);

		}else{

			$name = $file;
			
			$processed[] = array(

				'name' => $name,

				'uploaded' => false

				);

			
		}//close if else

	}
}



echo json_encode($processed);



?>