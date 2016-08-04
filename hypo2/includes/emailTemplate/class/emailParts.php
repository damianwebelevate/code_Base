<?php

// a file to house all of the bits and bobs associated with the email template
$date = date("Y");

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
						                <td align="center" style="background-color: #ffffff; padding: 30px;">	
						                    <img width="300" src="http://dev.triplecrowncustom.com/hypo/images/logo2.png" />
						                </td>
						            </tr>
			                    </table>';

$emailFooter = '	<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;">
						<tr>
							<td align="center" style=" padding: 30px 30px 10px 30px;">
								<img width="278" src="http://dev.triplecrowncustom.com/hypo/images/HWLogo.png" />
							</td>
						</tr>
						<tr>
							<td width="100" align="center">
								<a style="text-decoration: none;" href="https://www.facebook.com/Horseware/" target="_blank">
				            		<img src="http://dev.triplecrowncustom.com/hypo/images/facebook_icon.jpg" width="31" height="31" title="Horseware on Facebook" id="facebook" alt="Hypocare on Facebook">
				            	</a>
								<a style="text-decoration: none;" href="https://twitter.com/horseware" target="_blank">
				            		<img src="http://dev.triplecrowncustom.com/hypo/images/twitter.jpg" width="31" height="31" title="Horseware on Twitter" id="twitter" alt="Hypocare on Twitter">
				            	</a>
								<a style="text-decoration: none;" href="https://www.youtube.com/c/horsewareofficial" target="_blank">
				            		<img src="http://dev.triplecrowncustom.com/hypo/images/youtube.jpg" width="31" height="31" title="Horseware on Youtube" id="youtube" alt="Horseware on Youtube">
				            	</a>
							</td>
						</tr><!-- social media icons -->
						<tr>
							<td align="center" style="text-align: center; color: #000000; padding: 10px 0px; background-color: #ffffff; font-family: \'Arial\';">
								Copyright &copy; '.$date.' <strong>Hypocare by Horseware&reg;</strong>
							</td>
						</tr>
					</table>
			    </body>
			</html>';



define('VSPACE', $verticalSpace);
define('HEAD', $emailHeader);
define('FOOT', $emailFooter);



?>		