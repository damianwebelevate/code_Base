<?php session_start(); ?>
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

?>
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

// function to return clean data from inputs

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

// function to join two arrays together

function array_fillkeys($keyArray, $valueArray) {
  if(is_array($keyArray)) {
      foreach($keyArray as $key => $value) {
          $filledArray[$value] = $valueArray[$key];
        }
    }
          return $filledArray;
}


$whitelist = array("rugSelection", "category", "token");
$values = array();
$keys = array('Rug Selection', 'Category');

// checks against a known whitelist if more than that then no submit

foreach($_POST as $key=>$value){

	if(!in_array($key, $whitelist)){

		die("Hack-Attempt Detected.");
		
	}

	$value = test_input($value);

	array_push($values, $value);

}

// potentially two tokens can be in the session
// use this below to check if one or the other is there
// carry this through the process and echo both feilds into hidden elements
// or unset them and do again when outputting the form


if(checkToken('Product Selected')||checkToken('Single Product')){

		$sessionStart = array_fillkeys($keys, $values);

		if(count($sessionStart == 2)){

			$_SESSION['index'] = $sessionStart;

			if(isset($_SESSION['Product Selected_token'])){

				unset($_SESSION['Product Selected_token']);
			}

			if(isset($_SESSION['Single Product_token'])){

				unset($_SESSION['Single Product_token']);
			}

			header('location: http://dev.triplecrowncustom.com/dev/add-colors/');
		}
}




?>

