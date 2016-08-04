<?php

// a file to house all of the bits and bobs associated with the email template


$verticalSpace = '	<table cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;">
						<tr><td style="padding: 10px;"><!-- gap in flow of doc --> </td><td></td></tr>
					</table>';


$emailHeader = '	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html xmlns="http://www.w3.org/1999/xhtml">
						    <head>
						        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						        <title>Customer Receipt</title>
						    </head>
						    <body yahoo style="background-color: #ffffff; padding: 0; margin: 0; min-width: 100%!important;" >
								<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 500px; margin: 0 auto;">
						            <tr>
						                <td align="center" style="background-color: #0D416E; padding: 30px;">	
						                    <img width="200" src="http://triplecrowncustom.com/wp-content/themes/triple/img/tcc-logo.png" />
						                </td>
						            </tr>
						            <tr>
				                    	<td style="background-color: #B8A14F; padding: 20px;">
				                    		<!-- empty for now the gold (#B8A14F) band across the page -->
				                    	</td>
			                    	</tr>
			                    </table>';

$emailFooter = '	<table bgcolor="#F4F5F0" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;">
						<tr>
							<td align="center" style=" padding: 30px 30px 10px 30px;">
								<img width="278" src="https://triplecrowncustom.com/wp-content/themes/triple/img/emailImages/section.png" />
							</td>
						</tr>
						<tr>
							<td width="100" align="center">
								<a style="text-decoration: none;" href="https://www.facebook.com/TripleCrownCustom" target="_blank" title="Join Us on Facebook">
									<img width="30" style="border: none;" src="https://triplecrowncustom.com/wp-content/themes/triple/img/facebook.png" />
								</a>
							
								<a style="text-decoration: none;" href="https://www.instagram.com/triplecrowncustom/" target="_blank" title="Join Us on Instagram">
									<img width="30" src="http://triplecrowncustom.com/wp-content/themes/triple/img/instagram.png" />
								</a>
							
								<a style="text-decoration: none;" href="https://www.youtube.com/user/triplecrowncustom" target="_blank" title="Visit our Youtube channel">
									<img width="30" src="https://triplecrowncustom.com/wp-content/themes/triple/img/youtube.png" />
								</a>
							</td>
						</tr><!-- social media icons -->
						<tr>
							<td align="center" style="text-align: center; color: #B8A14F; padding: 10px 0px; background-color: #F4F5F0;">
								Copyright &copy; 2016 <strong>Triple Crown Custom</strong>
							</td>
						</tr>
					</table>
			    </body>
			</html>';



define('VSPACE', $verticalSpace);
define('HEAD', $emailHeader);
define('FOOT', $emailFooter);



?>		