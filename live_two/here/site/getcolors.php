<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php  session_start(); ?>

<?php

// var_dump($_SESSION);
// var_dump($_POST);
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

require (dirname(__FILE__).'/resources.php');

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

// potentially two tokens can be in the session
// use this below to check if one or the other is there
// carry this through the process and echo both feilds into hidden elements
// or unset them and do again when outputting the form



session_start();


$page2Arr = joinArray($page2keys, $values);

// foreach($page2Arr as $key=>$value){
//   echo $key."<br />";
//   echo $value."<br />"; 
// }

$_SESSION['page2'] = $page2Arr;


      // unsetting index page here
      // unset($_SESSION['index']);
      // look for $_SESSION['page2']['Rug'] for the rug title text_page
  		header('location: https://triplecrowncustom.com/add-text-and-images');


?>

