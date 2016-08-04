<?php


require dirname(__FILE__).'/mailer/PHPMailerAutoload.php';


class SendMail{

	public $report;

	public function __construct($email, $subject, $message){

		$mailer = new PHPMailer();

		$mailer->IsSMTP();
		$mailer->Host = "84.203.209.229";
		$mailer->Port = 25;

		$mailer->setFrom('noreply.info@hypocare.com', 'Hypocare Web Enquiry');
		$mailer->addReplyTo("info@hypocare.com", 'Hypocare Web Enquiry');
		$mailer->Subject = $subject;

		$mailer->MsgHTML($message);

		$mailer->addAddress($email);

		if(!$mailer->Send()){
			return $this->report = "Mailer Error: ".$mailer->ErrorInfo;
		}else{
			return $this->report =  true;
		}

		

	}

	public function getReport(){
		return $this->report;
	}
}



?>