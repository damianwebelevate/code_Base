<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>
<?php

require dirname(__FILE__).'/emailTemplate/class/EmailTemplate.php';
require dirname(__FILE__).'/email.php';

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$errors = array();

$name = test_input($name);
$email = test_input($email);
$message = test_input($message);

$nameLength = strlen($name);
$emailLength = strlen($email);
$messageLength = strlen($message);

// default values if they are empty then they are not valid

if($name == ""){
	array_push($errors, "Name is Required");
}else if(!preg_match("/^[a-zA-Z ]*$/", $name)){
	array_push($errors, "Name can only contain letters and white space");
}else if($nameLength > 30){
	array_push($errors, "Your name is too long, please try another");
}else if($email == ""){
	array_push($errors, "Email is Required");
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	array_push($errors, "That is not a valid email address, please try another");
}else if($emailLength > 240){
	array_push($errors, "That is not a valid email address, please try another");	
}else if($message == ""){
	array_push($errors, "Message field cannot be empty");
}else if($messageLength > 500){
	array_push($errors, "Message is too long");	
}else{

}


// Change the line below to your timezone!
date_default_timezone_set('Europe/Dublin');
$date = "Sent on the ";
$date .= date('d/m/Y');
$date .= " @ ";
$date .= date('h:i:s a',time());


$count = count($errors);

$body = '<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;">
	<tr>
		<td>
			<h1 style="font-family: \'Arial\'; color: #0084c8;">Sender: </h1>
		</td>
		<td>
			<h1 style="font-family: \'Arial\'; color: #7d6a6a;">'.$name.'</h1>
		</td>
	</tr>
	<tr>
		<td>
			<h1 style="font-family: \'Arial\'; color: #0084c8;">From: </h2>
		</td>
		<td>
			<p style="font-family: \'Arial\'; color: #7d6a6a;">'.$email.'</p>
		</td>
	</tr>
	<tr>
		<td>
			<p></p>
		</td>
		<td>
			<p style="font-family: \'Arial\'; color: #7d6a6a;">'.$date.'</p>
		</td>
	</tr>
	<tr>
		<td>
			<h1 style="color: #0084c8; font-family: \'Arial\';">Message: </h1>
		</td>
		<td>
			<p></p>
		</td>
	</tr>
	<tr>
		<td>
			<h1></h1>
		</td>
		<td>
			<p style="font-family: \'Arial\'; color: #7d6a6a;">'.$message.'</p>
		</td>
	</tr>
</table>';


if($count == 0){

	$messageTemplate = new EmailTemplate($body);
	$sendMessage = new SendMail('info@hypocare.com', 'New Email Enquiry - HYPOCARE BY HORSEWARE', $messageTemplate);
	$sendCustomer = new SendMail($email, 'Email Receipt - Many thanks for your enquiry', $messageTemplate);

	if($sendCustomer->getReport() == 1){
		echo json_encode(array("Mail" => "Mail Sent Thank you"));
	}else{
		$sendMailError = "Could not connect to mailing server ... Please try again later";
		array_push($errors, $sendMailError);
		echo json_encode(array("Error" => $errors));
	}

}else{
	echo json_encode(array("Error" => $errors));
}





	// echo $messageTemplate;
?>



