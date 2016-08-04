<?php 
session_start();

$receipt = "";

if(isset($_SESSION['receipt'])){
	$receipt = "<h1 class='title'>Thank you</h1>
				<p id='noprint'>Your order was successful</p>
				<input style='float: right; display: block;' type='button' onclick='window.print();' value='Print' /><br/>";
	$receipt .= $_SESSION['receipt'];
	unset($_SESSION['new_single_order_two']);
	unset($_SESSION['total']);
	unset($_SESSION['Cart']);
}else{
	$receipt = "";
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
* Template Name: Thank you page
*
*/

// after the colors are selected then go to this page for text and logo

get_header();?>

<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">
						<a name="top"></a>
						<article>
							<header>
								<h1 class="title"><span></span>Your Receipt</h1>
							</header>
								<?php echo $receipt; ?>

						</article>

						<a href="/" style="float: left;" title="Home Page">Home Page</a>
						<a style="float: right;" href="#top">Top</a>
					</div> <!-- #site-content -->
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