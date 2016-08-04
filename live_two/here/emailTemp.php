<?php  

// var_dump($_POST);

// phpinfo();


// require dirname(__FILE__).'/site/email.php';


error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);


// $subject = "testing emails from development site - Please Ignore";

// $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
//           <html xmlns="http://www.w3.org/1999/xhtml">
//            <head>
//             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
//             <title>Order Summary</title>
//             <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
//           </head>
//           <body><div style="max-width: 1100px; margin: 0 auto;">testing emails from development site - Please Ignore</body></html>';

// $email_from = "noreply.orders@triplecrowncustom.com";

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= "From: Triple Crown Custom <noreply.orders@triplecrowncustom.com>" . "\r\n" . "Reply-To: noreply.orders@triplecrowncustom.com";



// $emailOne = "info@triplecrowncustom.com";
// $emailTwo = "damian.orourke@horseware.com";
// $emailThree = "damiano_rourke@hotmail.com";



// if(!empty($_POST['email'])){

// 	//do email function
// 	// mailToPeople($emailOne, $subject, $message, $headers);

// 	// mailToPeople($emailTwo, $subject, $message, $headers);

// 	// wp_mail($emailThree, $subject, $message, $headers);

// 	mailToPeople($emailThree, $subject, $message, $headers);

// }else{
// 	echo "Not set";
// }


$email_to = "damian.orourke@horseware.com";
$email_from = "noreply.orders@triplecrowncustom.com";
$email_headers = "From: TripleCrownCustomm <noreply.orders@triplecrowncustom.com>" . "\r\n" . "Reply-To: info@TripleCrownCustomm.com";
$email_subject = "Checking Delivery";
$email_body = "Checking Delivery Of Message From Website";

// Send Email
$mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $email_from);

// Check For Errors
if($mailerResult) {

    echo "Mail Sent!";

} else {

    echo "Error Sending Email!" . "<br><br>";

    print_r(error_get_last());
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
* Template Name: Email Temp Page
*
*/


?>

<?php
get_header(); ?>
<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">
						<form style="margin-top: 100px;" method="post" action="http://dev.triplecrowncustom.com/dev/email-temp/">
							<input type="hidden" name="email" value="go" />
							<input type="submit" class="readmore gold" value="email" />
						</form>

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

?>

