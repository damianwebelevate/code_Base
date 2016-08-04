<?php

//LIVE


// captureEmbroideryDetails:
// looks for the string created in the $_POST array and creates an image

if(!empty($_POST['Region'])){
	$generatedImage = $_POST[$filename];
	$parts    = explode(',', $generatedImage);
	$filepath = dirname(__FILE__) . "/embroidery_files/{$filename}_{$token}".".png";
	file_put_contents($filepath, base64_decode($parts[1]));
}
$fakePath = dirname(__FILE__) . "/embroidery_files/{$filename}_{$token}".".png";
$linkToFile = "https://triplecrowncustom.com/wp-content/themes/triple/site/embroidery_files/".$filename."_".$token.".png";

// end spare code from captureEmbroideryDetails.php



// newOrderSummary.php

// $source = $_POST['afterCanvasToImage'];
// $image = '<img src="'.$source.'" style="width: 300px; height: auto; margin: 0 auto; display: block;" />';
$filename = "filename";
$token = hash('sha256', uniqid(microtime(),true));

$price = $requests = "";
// create an image from the above information
if(!empty($_POST['afterCanvasToImage'])){
	$generatedImage = $_POST['afterCanvasToImage'];
	$parts    = explode(',', $generatedImage);
	$filepath = dirname(__FILE__) . "/site/product_images/{$filename}_{$token}".".png";
	file_put_contents($filepath, base64_decode($parts[1]));

$price = $_POST['price'];

if($_POST['rugCustomMessage'] == 'Null'){
	$requests = "No requests entered at this time";
}else{
	$requests = $_POST['rugCustomMessage'];
}

}


$fakePath = dirname(__FILE__) . "/embroidery_files/{$filename}_{$token}".".png";
$linkToFile = "https://triplecrowncustom.com/wp-content/themes/triple/site/product_images/".$filename."_".$token.".png";

$_SESSION['product_image'] = $linkToFile;
$source = $_SESSION['product_image'];
$image = '<img src="'.$source.'" style="width: 300px; height: auto; margin: 0 auto; display: block;" />';

$imageTwo = "<img src=\"".$source."\" width=\"300\" />";

// end spare code from newOrderSummary.php




?>