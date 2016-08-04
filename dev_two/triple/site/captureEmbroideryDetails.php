<?php
session_start();


// to see the value of the hiddenElement then set the name attribute back on the input box


// generate the appropriate string value for the posted element constructed as follows
// abstract the region
// append the string (could do in another way!!!)
// use this string to access post array to get value
// run the file_put_contents
// works now
// should work with any region value - STOP MESSING WITH IT:-)


// view the contents of the posted data:

// var_dump($_POST);
// echo count($_POST);

// basically if any less than two submitted ie the area is blank then ignore else run through the post array
if((count($_POST) > 2)&&(!($_POST['Region'] == "not set" ))){

// determins the region selected - used in switch statement:
if(!empty($_POST['Region'])){
	$region = $_POST['Region'];
	if($region == "not set"){
		header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	}else{
	$filename = $region;	
	}

}

// generates the appropriate string to search for the $_POST (ed) value:
$string = "_Generated_Image_DataToURL";
$filename .= $string;

// echo "<hr />".$filename."<hr />";
// makes the file name unique - allows for continous edit of files - will fill server so look into cron job older than x days delete
$token = hash('sha256', uniqid(microtime(),true));


// get the total value for the text that was entered
$submittedTotal = "";

if(!empty($_POST['total_for_text'])){
	$submittedTotal = $_POST['total_for_text'];
}else{
	$submittedTotal = 0.00;
}

// remove it from the post array
unset($_POST['total_for_text']);

// get the fullpath for the files in the session
$fullPath = dirname(__FILE__).'/embroidery_files';


$parts    = explode(',', $_POST[$filename]);
$filepath = $fullPath."/".$filename."_".$token.".png";
file_put_contents($filepath, base64_decode($parts[1]));

$linkToFile = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/embroidery_files/".$filename."_".$token.".png";

// usnet the Neck Generated Image DataToURL from the post array then put into session AFTER IMAGE CREATED
unset($_POST[$filename]);

// var_dump($_POST);

// this variable will hold the string of data created to hold the order details from the post array
$embroideryDetails = '';

// this variable will hold the new string so that the emails look good and start with table row declarations 
$newEmbroideryDetails = '';

// little check to see if there was an image uploaded or not 
// if there is one $chargeFoLogo is applied
$imageUploaded = $region ."_Image_Uploaded_Source";
$imgSrc = "";
$chargeForLogo = "";

// if there is an image then create a formatted string to house the values
// if not then do not include it
$imageString = $totalEmbroidery = $imageStringTwo = $salesLinkToFile = "";

// cycle throught the post array and see if there is an uploaded image
// create an image html and display this in the customer order
// sales order can see the text value of the link to file

if(isset($_POST[$imageUploaded])){
	// get the $region_Image_Width
	$width = $region."_Image_Width";
	// get the $region_Image_Height
	$height = $region."_Image_Height";
	// unset them from the post arr

	$imageWidth = $_POST[$width];
	$imageHeight = $_POST[$height];

	$imgSrc = "<img style='width: 97px; height: auto;' src='http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/uploads/";
	$imgSrc .= $_POST[$imageUploaded];
	$imgSrc .= "'/>";


	$imgSrcTwo = "<img width=\"97\" align=\"right\" src=\"";
	$imgSrcTwo .= "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/uploads/";
	$imgSrcTwo .= $_POST[$imageUploaded];
	$imgSrcTwo .= "\"/>";

	// any image that was uploaded to the server
	$salesLinkToFile = "<a href=\"http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/uploads/".$_POST[$imageUploaded]."\">Uploaded File Link</a>";

	$chargeForLogo = 50.00;

	// imageString for the receipt object
	$imageString = "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$region." Image Uploaded: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imgSrc."
						</div>
					</div>
					<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$region." Image Width: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imageWidth." inches
						</div>
					</div>
					<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$region." Image Height: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imageHeight." inches
						</div>
					</div>
					<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$region." Image Charge: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							$".$chargeForLogo.".00
						</div>
					</div>";

	$imageStringTwo = '	<tr>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
									'.$region.' Image Uploaded: 
								</h4>
							</td>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								'.$imgSrcTwo.'
							</td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
									'.$region.' Link to uploaded file: 
								</h4>
							</td>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
								'.$salesLinkToFile.'
							</td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
									'.$region.' Image Width: 
								</h4>
							</td>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
								'.$imageWidth.' inches
							</td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
									'.$region.' Image Height: 
								</h4>
							</td>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
								'.$imageHeight.' inches
							</td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
								<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
									'.$region.' Image Charge: 
								</h4>
							</td>
							<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
								$'.$chargeForLogo.'.00
							</td>
						</tr>';

	$totalEmbroidery = "$".number_format(($submittedTotal + $chargeForLogo), 2);

	unset($_POST[$imageUploaded]);
	unset($_POST[$width]);
	unset($_POST[$height]);
}else{
	$imageString = "";
	$imageStringTwo = "";
	$totalEmbroidery = number_format($submittedTotal, 2);
	$chargeForLogo = 0.00;
}


$newRegion = $region;
// unset the post region so that it doesn't show up in the order summary
unset($_POST['Region']);




foreach($_POST as $key=>$value){
	
$embroideryDetails .= "	<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$key = str_replace("_", " ", $key).": </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							<p style='margin: 10px 0px'>".$value."</p>
						</div></div>";
}


// loop through the remaining post values and create the table for email - details of the region
foreach($_POST as $key=>$value){

$newEmbroideryDetails .= '	<tr>
								<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
									<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
										'.$key = str_replace("_", " ", $key).':
									</h4>
								</td>
								<td style="border-bottom: 1px solid #B8A14F; padding: 5px; font-family: Arial;">
									<p style="margin: 10px 0px; text-align: right;">'.$value.'</p>
								</td>
							</tr>';
}

$embroideryDetails .= $imageString;

$newEmbroideryDetails .= $imageStringTwo;


switch($newRegion){
	case "Neck":

	$imgCreated = "<img style='width: 97px; height: auto;' src='".$linkToFile."'/>";

	// embroidery image would not display in email so using this:
	$imgCreatedTwo = "<img width=\"97\" align=\"right\" src=\"".$linkToFile."\"/>";

	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$newRegion." Embroidery Created Image: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imgCreated."
						</div></div>";
	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
 							<h4 style='margin: 10px 0px;'>".$newRegion." Total Charge: </h4>
 						</div>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
 							".$totalEmbroidery."
 						</div></div>";

	// add to the string that already exists and append the created image | total text/logo
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Embroidery Created Image: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										'.$imgCreatedTwo.'
									</td>
								</tr>';

		// create a link to the file created:
	$salesEmbroideryLink = "<a href='".$linkToFile."'>Embroidery Image Link</a>";
	// add to the newEmbroidery Details
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Link to Created Embroidery: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$salesEmbroideryLink.'
									</td>
								</tr>';

	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Total Charge: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$totalEmbroidery.'
									</td>
								</tr>';

	// the details for the receipt object:
	$_SESSION['embroidery_neck_details'] = $embroideryDetails;
	// the email receipt --wasteful
	$_SESSION['new_embroidery_neck'] = $newEmbroideryDetails;
	// this is the image itself for display on the blanket/horse
	$_SESSION['embroidery_neck'] = $linkToFile;
	// the total for the text on submission
	$_SESSION['total_neck_text_charge'] = $submittedTotal;
	// the total for the logo as added above
	$_SESSION['total_neck_logo_charge'] = $chargeForLogo;
	// the subtotal of the logo and text 
	$_SESSION['subtotal_charge_neck'] = $totalEmbroidery;

	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");

	break;
	case "Center":

	$imgCreated = "<img style='width: 97px; height: auto;' src='".$linkToFile."'/>";

	// embroidery image would not display in email so using this:
	$imgCreatedTwo = "<img width=\"97\" align=\"right\" src=\"".$linkToFile."\"/>";

	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$newRegion." Embroidery Created Image: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imgCreated."
						</div></div>";
	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
 							<h4 style='margin: 10px 0px;'>".$newRegion." Total Charge: </h4>
 						</div>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
 							".$totalEmbroidery."
 						</div></div>";

	// embroidery image would not display in email so using this:
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Embroidery Created Image: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										'.$imgCreatedTwo.'
									</td>
								</tr>';

		// create a link to the file created:
	$salesEmbroideryLink = "<a href='".$linkToFile."'>Embroidery Image Link</a>";
	// add to the newEmbroidery Details
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Link to Created Embroidery: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$salesEmbroideryLink.'
									</td>
								</tr>';

	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Total Charge: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$totalEmbroidery.'
									</td>
								</tr>';

	// the details for the receipt object:
	$_SESSION['embroidery_center_details'] = $embroideryDetails;
	// this is the image itself for display on the blanket/horse
	$_SESSION['embroidery_center'] = $linkToFile;
	// email receipt
	$_SESSION['new_embroidery_center'] = $newEmbroideryDetails;
	// the total for the text on submission
	$_SESSION['total_center_text_charge'] = $submittedTotal;
	// the total for the logo as added above
	$_SESSION['total_center_logo_charge'] = $chargeForLogo;
	// the subtotal of the logo and text 
	$_SESSION['subtotal_charge_center'] = $totalEmbroidery;

	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");

	break;

	case "Hip":

	$imgCreated = "<img style='width: 97px; height: auto;' src='".$linkToFile."'/>";

	// embroidery image would not display in email so using this:
	$imgCreatedTwo = "<img width=\"97\" align=\"right\" src=\"".$linkToFile."\"/>";

	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$newRegion." Embroidery Created Image: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imgCreated."
						</div></div>";
	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
 							<h4 style='margin: 10px 0px;'>".$newRegion." Total Charge: </h4>
 						</div>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
 							".$totalEmbroidery."
 						</div></div>";

	// embroidery image would not display in email so using this:
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Embroidery Created Image: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										'.$imgCreatedTwo.'
									</td>
								</tr>';

		// create a link to the file created:
	$salesEmbroideryLink = "<a href='".$linkToFile."'>Embroidery Image Link</a>";
	// add to the newEmbroidery Details
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Link to Created Embroidery: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$salesEmbroideryLink.'
									</td>
								</tr>';

	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Total Charge: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$totalEmbroidery.'
									</td>
								</tr>';

	// the details for the receipt object:
	$_SESSION['embroidery_hip_details'] = $embroideryDetails;
	// this is the image itself for display on the blanket/horse
	$_SESSION['embroidery_hip'] = $linkToFile;
	// email receipt
	$_SESSION['new_embroidery_hip'] = $newEmbroideryDetails;
	// the total for the text on submission
	$_SESSION['total_hip_text_charge'] = $submittedTotal;
	// the total for the logo as added above
	$_SESSION['total_hip_logo_charge'] = $chargeForLogo;
	// the subtotal of the logo and text 
	$_SESSION['subtotal_charge_hip'] = $totalEmbroidery;

	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	
	break;
	case "Shoulder":

	$imgCreated = "<img style='width: 97px; height: auto;' src='".$linkToFile."'/>";

	// embroidery image would not display in email so using this:
	$imgCreatedTwo = "<img width=\"97\" align=\"right\" src=\"".$linkToFile."\"/>";

	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
							<h4 style='margin: 10px 0px;'>".$newRegion." Embroidery Created Image: </h4>
						</div>
						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
							".$imgCreated."
						</div></div>";
	$embroideryDetails .= "<div style='margin: 2px 0px; border-top: 1px solid #B8A14F; overflow: auto; min-height: 50px;'>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%;'>
 							<h4 style='margin: 10px 0px;'>".$newRegion." Total Charge: </h4>
 						</div>
 						<div style='box-sizing: border-box; width: 50%; display: inline; float: left; padding-left: 2%; text-align: center;'>
 							".$totalEmbroidery."
 						</div></div>";

	// add to the string that already exists and append the created image | total text/logo
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Embroidery Created Image: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										'.$imgCreatedTwo.'
									</td>
								</tr>';

		// create a link to the file created:
	$salesEmbroideryLink = "<a href='".$linkToFile."'>Embroidery Image Link</a>";
	// add to the newEmbroidery Details
	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Link to Created Embroidery: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$salesEmbroideryLink.'
									</td>
								</tr>';

	$newEmbroideryDetails .= '	<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">
											'.$newRegion.' Total Charge: 
										</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										'.$totalEmbroidery.'
									</td>
								</tr>';

	// the details for the receipt object:
	$_SESSION['embroidery_shoulder_details'] = $embroideryDetails;
	// this is the image itself for display on the blanket/horse
	$_SESSION['embroidery_shoulder'] = $linkToFile;
	// email receipt
	$_SESSION['new_embroidery_shoulder'] = $newEmbroideryDetails;
	// the total for the text on submission
	$_SESSION['total_shoulder_text_charge'] = $submittedTotal;
	// the total for the logo as added above
	$_SESSION['total_shoulder_logo_charge'] = $chargeForLogo;
	// the subtotal of the logo and text 
	$_SESSION['subtotal_charge_shoulder'] = $totalEmbroidery;

	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
	
	break;
	default:
	$_SESSION['not_set'] = "Not Set";
	break;

}


}else{
	header("location: http://dev.triplecrowncustom.com/dev/add-text-and-images/");
}













?>