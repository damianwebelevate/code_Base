<?php


require dirname(__FILE__).'/mailer/PHPMailerAutoload.php';


class SendMail{

	public $report;

	public function __construct($email, $subject, $message){

		$mailer = new PHPMailer();

		$mailer->IsSMTP();
		$mailer->Host = "84.203.209.229";
		$mailer->Port = 25;
		// $mail->SMTDebug = 2;

		// $mail->SMTPAuth = false;
		$mailer->setFrom('noreply.orders@triplecrowncustom.com', 'TCC');
		$mailer->addReplyTo("info@triplecrowncustom.com", 'Sales@TCC');
		$mailer->Subject = $subject;

		// $mailer->Body($message);
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