<?php header('X-Robots-Tag: noindex,nofollow'); ?>

<?php


function checkToken($form){
	if(!isset($_SESSION[$form.'_token'])){
		return false;
	}
	if(!isset($_POST['token'])){
		return false;
	}

	if($_SESSION[$form.'_token'] !== $_POST['token']){
		return false;
	}

	return true;
}


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

function countString($string, $rate){
	$str = strlen($string);
	$num = substr_count($string, " ", 0, $str);

	$totalLetters = $str - $num;

	return number_format((float)$totalLetters * $rate, 2, '.',' ');
}



?>
