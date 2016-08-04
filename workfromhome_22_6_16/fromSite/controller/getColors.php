<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>


<?php
require dirname(__FILE__).'/sessionStart.php';

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



function joinArray($keyArray, $valueArray) {
  if(is_array($keyArray)) {
      foreach($keyArray as $key => $value) {
          $filledArray[$value] = $valueArray[$key];
        }
    }
          return $filledArray;
}


$whitelist = array('rugColorOut','rugColorOutA','bindColorOut','bindColorOutA','pipeColorOut','pipeColorOutA','imageJoined', 'rugSelection');
$values = array();
$page2keys = array('Body Color', 'rugID', 'Binding Color', 'bindID', 'Piping Color', 'pipeID', 'Image' , 'Rug Selection');
$page2Arr = array();


// checks against a known whitelist if more than that then no submit

foreach($_POST as $key=>$value){


	if(!in_array($key, $whitelist)){

		die("Hack-Attempt Detected.");
		
	}

	$value = test_input($value);

	array_push($values, $value);

}

$page2Arr = joinArray($page2keys, $values);


$filename = "joined_image";
$token = hash('sha256', uniqid(microtime(),true));


$generatedImage = $page2Arr['Image'];
$parts    = explode(',', $generatedImage);
$filepath = dirname(__FILE__) . "/../joined/{$filename}_{$token}".".png";
file_put_contents($filepath, base64_decode($parts[1]));

$linkToFile = "http://localhost/fromSite/joined/".$filename."_".$token.".png";
$pathToFile = $filepath;

$page2Arr['Image'] = $linkToFile;
$page2Arr['Path'] = $pathToFile;

$_SESSION['page2'] = $page2Arr;

echo json_encode(array("Image" => $linkToFile, "POSTED" => $_SESSION));






?>