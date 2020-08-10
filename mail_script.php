<?php
	if(isset($_POST['send'])){
		require 'mail/PHPMailerAutoload.php';

		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
		$mail->SMTPAutoTLS = false;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
	
		$mail->Username = 'tuhel.musa096@gmail.com';
		$mail->Password = 'tuhel96musa'; 
		$mail->SetFrom('tuhel.musa096@gmail.com','');
		$mail->addAddress($_POST['email']);

		$mail->Subject = 'Forget Password';
		$code=$_POST['new_pass'];
		$mail->msgHTML("Your Password   .$code is activated."); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
		$mail->AltBody = 'HTML messaging not supported';
		if(!$mail->Send()) {
		// 	$error = 'Mail error: '.$mail->ErrorInfo; 
		// 	return false;
		} else {
			header("location:home.php");
		// 	$error = 'Message sent!';
		// 	return true;
		}
	}
?>