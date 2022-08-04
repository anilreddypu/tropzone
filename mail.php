<?php
	if(isset($_POST['submit'])) {
		// sample test mail
		require_once('PHPMailer/src/PHPMailer.php');
		require_once('PHPMailer/src/SMTP.php');
		require_once('PHPMailer/src/Exception.php');
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "mail.bharathianalyticals.com";
		$mail->Port = 465;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		$mail->Username = "non-reply@bharathianalyticals.com";
		$mail->Password = "QF+0sAR&fCV^";
		$mail->CharSet = 'windows-1250';
		$mail->SetFrom('non-reply@bharathianalyticals.com', 'Non-Reply');
		$mail->AddReplyTo('non-reply@bharathianalyticals.com', 'donot-reply');
		
		$mail->AddAddress('mp95anil@gmail.com', 'Anil');
		
		$mail->Subject = 'NITK Surathkal Non-Teaching Recruitment - Account Registration Details';
		$mail->ContentType = 'text/html';
		$mail->IsHTML(true);
		
		/* $email_data = array(
			'email' => $email,
			'name' => $name,
			'sec_code' => $sec_code,
			'email_template_form' => 'user_reg'
		); */
		
		// $message = $this->load->view('email_templates/autogen_mail', $email_data, TRUE);
		$mail->Body = "Test";
		
		$mail->send();
		
		// echo "Sent";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>