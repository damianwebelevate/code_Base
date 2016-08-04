<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php  require (dirname(__FILE__).'/resources.php'); ?>


<?php

session_start();

if(isset($_SESSION['page2']['Image'])){
	unset($_SESSION['page2']['Image']);
}
if(isset($_SESSION['page2']['Product Info'])){
	unset($_SESSION['page2']['Product Info']);
}
if(isset($_SESSION['Page Two_token'])){
	unset($_SESSION['Page Two_token']);
}



// var_dump($_POST);
// echo "<hr />";
// foreach($_POST as $key=>$value){
// 	// echo "'".$key."',";
// 	echo "<p>Key: ".$key." => Value: ".$value."</p>";
// }

?>
<?php
/*
* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
*/
/*
*  This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>.
*/


if(checkToken('Page Three')){

$whitelist = array('rugNeckText','rugNeckTextStyleFont','rugNeckTextColor','neckOptions','rugCustomMessage','token','price','rugMiddleText','rugMiddleTextStyleFont','centerOptions','rugMiddleTextColor','rugBackText','rugBackTextStyleFont','hipOptions','rugBackTextColor','rugFrontText','rugFrontTextStyleFont','shoulderOptions','rugFrontTextColor','finalImage');
$values = array();
$afterClean = array();
$neckArray = array();
$centerArray = array();
$shoulderArray = array();



foreach($_POST as $key=>$value){
	if(!in_array($key, $whitelist)){
		die("Hack-Attempt Detected.");
	}else{

		$value = test_input($value);

		array_push($values, $value);
	}

}

// echo "<hr /> Values Array: <br />";

// var_dump($values);

// echo "<hr />";

$afterClean = joinArray($whitelist, $values);

}else{
	echo "Invalid Request - Token not set";
}


// echo "<hr /> AfterClean: <br />";

// foreach($afterClean as $key=>$value){
// 	echo "<p>Key: ".$key." => Value: ".$value."</p>";
// }

// echo "<hr /><p>The size of $afterClean: ".count($afterClean)."</p><hr />";


	
	// echo "<hr /><p>TRUE</p><hr />";
if(count($afterClean) == 20){
	echo "<h1>After Clean Array size is 20</h1>";

$finalImage = $price = $requests = $neck = $neckText = $neckFont = $neckColor = $neckCharge = $center = $centerText = $centerFont = $centerColor = $centerCharge = $shoulder = $shoulderText = $shoulderFont = $shoulderColor = $shoulderCharge = $hip = $hipText = $hipFont = $hipColor = $hipCharge = "";

	$neckArray[0] = $afterClean['neckOptions']; // the region for the text


	if($afterClean['rugNeckText'] == 'Null'){
		$neckArray[1] = "No Text Entered";
		$neckArray[4] = number_format((float)0.00, 2, '.',' ');
	}else{
		$neckArray[1] = $afterClean['rugNeckText'];
		$neckArray[4] = countString($afterClean['rugNeckText'], 2.50);
	}

	if($afterClean['rugNeckTextStyleFont'] == 'Null'){
		$neckArray[2] = "Font Family: Times New Roman";
	}else{
		$neckArray[2] = $afterClean['rugNeckTextStyleFont'];
	}

	if($afterClean['rugNeckTextColor'] == '#ffffff;'){
		$neckArray[3] = "Font Color: White";
		
	}else{
		$neckArray[3] = $afterClean['rugNeckTextColor'];
	}


	$centerArray[0] = $afterClean['centerOptions']; // the region for the text

	if($afterClean['rugMiddleText'] == 'Null'){
		$centerArray[1] = "No Text Entered";
		$centerArray[4] = number_format((float)0.00, 2, '.',' ');
	}else{
		$centerArray[1] = $afterClean['rugMiddleText'];
		$centerArray[4] = countString($afterClean['rugMiddleText'], 4.50);
	}

	if($afterClean['rugMiddleTextStyleFont'] == 'Null'){
		$centerArray[2] = "Font Family: Times New Roman";
	}else{
		$centerArray[2] = $afterClean['rugMiddleTextStyleFont'];
	}

	if($afterClean['rugMiddleTextColor'] == '#ffffff;'){
		$centerArray[3] = "Font Color: White";
		
	}else{
		$centerArray[3] = $afterClean['rugMiddleTextColor'];
	}


	$hipArray[0] = $afterClean['hipOptions']; // the region for the text

	if($afterClean['rugBackText'] == 'Null'){
		$hipArray[1] = "No Text Entered";
		$hipArray[4] = number_format((float)0.00, 2, '.',' ');
	}else{
		$hipArray[1] = $afterClean['rugBackText'];
		$hipArray[4] = countString($afterClean['rugBackText'], 4.50);
	}

	if($afterClean['rugBackTextStyleFont'] == 'Null'){
		$hipArray[2] = "Font Family: Times New Roman";
	}else{
		$hipArray[2] = $afterClean['rugBackTextStyleFont'];
	}

	if($afterClean['rugBackTextColor'] == '#ffffff;'){
		$hipArray[3] = "Font Color: White";
		
	}else{
		$hipArray[3] = $afterClean['rugBackTextColor'];
	}

	$shoulderArray[0] = $afterClean['shoulderOptions']; // the region for the text

	if($afterClean['rugFrontText'] == 'Null'){
		$shoulderArray[1] = "No Text Entered";
		$shoulderArray[4] = number_format((float)0.00, 2, '.',' ');
	}else{
		$shoulderArray[1] = $afterClean['rugFrontText'];
		$shoulderArray[4] = countString($afterClean['rugFrontText'], 1.50);
	}

	if($afterClean['rugFrontTextStyleFont'] == 'Null'){
		$shoulderArray[2] = "Font Family: Times New Roman";
	}else{
		$shoulderArray[2] = $afterClean['rugFrontTextStyleFont'];
	}

	if($afterClean['rugFrontTextColor'] == '#ffffff;'){
		$shoulderArray[3] = "Font Color: White";
		
	}else{
		$shoulderArray[3] = $afterClean['rugFrontTextColor'];
	}

	if($afterClean['rugCustomMessage'] == 'Null'){
		$requests = "No requests entered at this time";
	}else{
		$requests = $afterClean['rugCustomMessage'];
	}

	$finalImage = $afterClean['finalImage'];
	$price = $afterClean['price'];
	// keys
	$neckKeys = array('Text Region: ', 'Text Entered: ', 'Font Family Selected: ', 'Color Selected: ', 'Font Price: ');
	$centerKeys = array('Text Region: ', 'Text Entered: ', 'Font Family Selected: ', 'Color Selected: ', 'Font Price: ');
	$hipKeys = array('Text Region: ', 'Text Entered: ', 'Font Family Selected: ', 'Color Selected: ', 'Font Price: ');
	$shoulderKeys = array('Text Region: ', 'Text Entered: ', 'Font Family Selected: ', 'Color Selected: ', 'Font Price: ');

	$neckRegion = joinArray($neckKeys, $neckArray);
	$centerRegion = joinArray($centerKeys, $centerArray);
	$hipRegion = joinArray($hipKeys, $hipArray);
	$shoulderRegion = joinArray($shoulderKeys, $shoulderArray);

	// var_dump($neckRegion);

	$_SESSION['neck'] = $neckRegion;
	$_SESSION['center'] = $centerRegion;
	$_SESSION['hip'] = $hipRegion;
	$_SESSION['shoulder'] = $shoulderRegion;
	$_SESSION['message'] = $requests;
	$_SESSION['charge'] = $price;
	$_SESSION['finalImage'] = $finalImage;


	if(count($neckRegion) == 5){
		header('location: https://triplecrowncustom.com/order-summary/');
	}else{
		echo "Invalid Request - Values Not Populated Internal";
	}




}else{
	echo "Invalid Request - Values Not Populated Main";
}

?>