<?php session_start(); 

$rug = isset($_SESSION['index']['Rug Selection']) ? $_SESSION['index']['Rug Selection'] : " "; 

$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";

$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";

$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silvergrey";


// $output = '<h1 class="title">There are no items in your Cart at this time</h1>';
// $output .= 'Please see our Products <a href="http://dev.triplecrowncustom.com/dev/products-list/">here</a>';
// $form = "";

$check = $output = $args = $form = $delete = "";


if(!(empty($_POST['delete']))){

	$check = $_POST['unique'];

	foreach($_SESSION['Cart']['Cart Number'] as $theKey=>$value){
		if($value == $check){
			unset($_SESSION['Cart']['Order'][$theKey]);
			unset($_SESSION['Cart']['Receipt'][$theKey]);
			unset($_SESSION['Cart']['Thumb'][$theKey]);
			unset($_SESSION['Cart']['Subtotal'][$theKey]);
			unset($_SESSION['Cart']['Cart Number'][$theKey]);

		}
	}
	
	// $output = '<h1 class="title">There are no items in your Cart at this time</h1>';
	// $output .= 'Please see our Products <a href="http://dev.triplecrowncustom.com/dev/products-list/">here</a>';
	// $form = "";
}




if(!(empty($_SESSION))){

	// echo "we have a session";


	$output = '<ul style="list-style-type: none; margin: 0;">';

	foreach($_SESSION['Cart']['Thumb'] as $key=>$value){
		if($value == 'None'){
			$output .= "<li></li>";
		}else if($key == 'Key in session'){
			$output .= "<li>Pants</li>";
		}else{
			$output .= "<li>".$value."</li>";
		}
		
		
	}

	$output .= "</ul>";

	$subtotal = "";
	$form = '<form method="POST" action="https://triplecrowncustom.com/triple-cart-page-2/">';

	foreach($_SESSION['Cart']['Subtotal'] as $key=>$value){
		if($value == 'None'){
			$subtotal += 0.00;
			$form .= "";
		}else{
			$subtotal += $value;
		}
		
	}

	$form .= '<input type="hidden" value="'.$subtotal.'" name="total" />';

	// foreach($_SESSION['Cart']['Details'] as $key=>$value){
	// 	if($value == 'None'){
	// 		$form .= "";
	// 	}else{
	// 	$form .= '<textarea style="display: none;" rows="200" name="'.$key.'" columns="500">'.$value.'</textarea>';
	// 	}
	// }

	$form .= '<input type="submit" name="CheckOut" value="Check Out All Products" />';
	$form .= "</form>";

}


if(count($_SESSION['Cart']['Cart Number']) == 1){
	$output = '<article><header><h1 class="title"><span></span>There are no items in your Cart at this time</h1></header></article>';
	$output .= 'Please see our Products <a href="https://triplecrowncustom.com/products-list/">here</a>';
	$form = "";
}



if(!(empty($_POST['CheckOut']))){

	$_SESSION['total'] = $subtotal;
	header('location: https://triplecrowncustom.com/order-form/');
}







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

/*
*
* Template Name: TCC Cart
*
*/

get_header(); ?>
<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">

<div class="wrapper wrapperMobile">
<?php echo $output; ?>
<?php echo $form; ?>
</div>


				</div><!-- #main-content -->
			</div><!-- container-fluid -->
			<!-- 
		</div>should be wrapper -->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->
<?php
get_footer();

?>

