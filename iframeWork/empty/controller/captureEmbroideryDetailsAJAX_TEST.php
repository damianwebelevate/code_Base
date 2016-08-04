<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>
<?php
session_start();


// foreach($_POST as $key=>$value){
	// echo "<p><strong>".$key."</strong> => ".$value."</p>";
// }
if($_POST['total_for_text'] == 0.00){
	$value = "it is";
}
echo json_encode(array("Pants" => $_POST, "Value" => $value));

?>