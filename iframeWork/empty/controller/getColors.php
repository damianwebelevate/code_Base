<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>


<?php
session_start();

// from the choose colors submit
/*
blanket name
body color
binding color
piping color
token ???
clean the html !!!!!!
*/
$filename = "joined_image";
$token = hash('sha256', uniqid(microtime(),true));


$blanketName = $_POST['rugSelection'];
$bodyColor = $_POST['rugColorOut'];
$bindingColor = $_POST['bindColorOut'];
$pipingColor = $_POST['pipeColorOut'];

$_SESSION['blanketName'] = $blanketName;
$_SESSION['bodyColor'] = $bodyColor;
$_SESSION['bindingColor'] = $bindingColor;
$_SESSION['pipingColor'] = $pipingColor;



$generatedImage = $_POST['imageJoined'];
$parts    = explode(',', $generatedImage);
$filepath = dirname(__FILE__) . "/../joined/{$filename}_{$token}".".png";
file_put_contents($filepath, base64_decode($parts[1]));

$linkToFile = "http://dev.triplecrowncustom.com/app/joined/".$filename."_".$token.".png";
$_SESSION['imageJoinde'] = $linkToFile;

echo json_encode(array("Image" => $linkToFile, "POSTED" => $_SESSION));



?>