<?php


require dirname(__FILE__) .'/emailParts.php';

// an email template for reproducing emails from templates

class EmailTemplate{

	private $header;
	private $footer;
	private $gap;
	public $body;
	public $email;


	public function EmailTemplate($body){
		$this->setHeader();
		$this->setFooter();
		$this->setGap();
		$this->genEmail($body);
		return $this->__toString();
	}

	public function getHeader(){
		return $this->header;
	}

	public function getFooter(){
		return $this->footer;
	}
	
	public function getEmail(){
		return $this->footer;
	}

	public function getGap(){
		return $this->gap;
	}

	public function setHeader(){
		// $headerString = "<h1>Header String</h1>";
		return $this->header = HEAD;
	}

	public function setGap(){
		return $this->gap = VSPACE;
	}

	public function setFooter(){
		// $footerString = "<h1>Footer String</h1>";
		return $this->footer = FOOT;
	}

	public function genEmail($body){
		$emailString = $this->header;
		$emailString .= $this->gap;
		$emailString .= $body;
		$emailString .= $this->gap;
		$emailString .= $this->footer;

		return $this->email = $emailString;
	}

	public function __toString(){
		return $this->email;
	}
}



?>