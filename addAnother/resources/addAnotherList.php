<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>

<?php


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



$blankets = array(
					"Pimlico Wool Dress Sheet" => "295.00",
					"Hollywood Cotton Cooler" => "145.00",
					"Gulfstream Net Cooler" => "169.00",
					"Extended Neck Lined Rain Sheet" => "179.00",
					"Santa Anita Stable Sheet" => "189.00",
					"200g Belmont Stable Blanket" => "249.00"
	);


$blanketName = "";

if(!(empty($_POST['rug']))){
	$blanketName = test_input($_POST['rug']);
}


$customisation = number_format(50.00, 2);
$blanketCost = number_format(295.00, 2);
$subTotal = number_format($customisation + $blanketCost, 2);


$output = "<ul style='list-style-type: none;' id='addAnotherBlanketList'>";

foreach($blankets as $blanket=>$price){

		if(!($blanket == $blanketName)){
			$output .= "<li id='".$blanket."' data-price='".$price."'>";
			$output .= $blanket . " " .$price;
			$output .= "</li>";
		}
	
}

$output .= "</ul>";

// echo $output;

echo json_encode(array("list" => $output, "customisation" => $customisation, "blanketCost" => $blanketCost, "subTotal" => $subTotal, "currentBlanket" => $blanketName));





?>