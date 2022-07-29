<?php 
//////////////////////////
//Specify default values//
//////////////////////////

//Your E-mail
$your_email = 'your@email.com';

//Default Subject if 'subject' field not specified
$default_subject = 'From My Contact Form';

//Message if 'name' field not specified
$name_not_specified = 'Please type a valid name';

//Message if e-mail sent successfully
$email_was_sent = 'Thanks, your message successfully sent';

//Message if e-mail not sent (server not configured)
$server_not_configured = 'Sorry, mail server not configured (function "mail()" disabled on your server?)';


//if you need to send your mail via SMTP, set following '$smtp' variable to 'true' and fill following variables
//https://github.com/PHPMailer/PHPMailer
	// Enable SMTP authentication
	$smtp = false;
	// Specify main and backup SMTP servers:
	// smtp1.example.com;smtp2.example.com
	$smtp_host = '';
	// SMTP username:
	// user@example.com
	$smtp_username = '';
	// SMTP password
	$smtp_password = '';
	// Enable TLS encryption, `ssl` also accepted
	$smtp_secure = 'tls';
	// TCP port to connect to
	$smtp_port = 587;



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//loading SMTP files if needed
if ( !empty($smtp)) {
	require __DIR__ . '/mail/src/Exception.php';
	require __DIR__ . '/mail/src/PHPMailer.php';
	require __DIR__ . '/mail/src/SMTP.php';
}

///////////////////////////
//Contact Form Processing//
///////////////////////////
$errors = array();

//"name" field required by this PHP script even if 
// there are no 'aria-required="true"' or 'required' 
// attributes on this HTML input field
if(isset($_POST['name'])) {
	
	if(!empty($_POST['name']))
		$sender_name  = stripslashes(strip_tags(trim($_POST['name'])));
	
	if(!empty($_POST['message']))
		$message      = stripslashes(strip_tags(trim($_POST['message'])));
	
	if(!empty($_POST['email']))
		$sender_email = stripslashes(strip_tags(trim($_POST['email'])));
	
	if(!empty($_POST['subject']))
		$subject      = stripslashes(strip_tags(trim($_POST['subject'])));


	//Message if no sender name was specified
	if(empty($sender_name)) {
		$errors[] = $name_not_specified;
	}

	$from = "MIME-Version: 1.0" . "\r\n" ;
	$from .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
	$from .= (!empty($sender_email)) ? 'From: '.$sender_email : '';

	$subject = (!empty($subject)) ? $subject : $default_subject;


	//sending message if no errors
	if(empty($errors)) {
		
		//duplicating email meta (from and subject) to email message body
		$message_meta = '';
			//From name and email
		$message_meta .= 'From: '. $sender_name . ' ' . $sender_email . "<br>";
			//Subject or default subject
		$message_meta .= 'Subject: '. ( $subject ? $subject : $default_subject ) . "<br>";

		//adding another CUSTOM contact form fields that added by user to email message body
		foreach ($_POST as $key => $value) {
			//checking for standard fields 
			if ($key == 'name' || $key == 'message' || $key == 'subject' || $key == 'email'  ) {
				continue;
			}
			//adding key-value pare to email message body
			$message_meta .= stripslashes(strip_tags(trim($key))) . ': ' . stripslashes(strip_tags(trim($value))) . "<br>";
		}

		$message = $message_meta . "<br>" . 'Message:' . "<br>" . $message;
		$message = wordwrap($message, 70);

		//default - sending via mail() function
		if( empty($smtp)) :
			if (mail($your_email, $subject, $message, $from)) {
				echo $email_was_sent;
			} else {
				$errors[] = $server_not_configured;
				echo '<span class="form-errors">' . implode('<br>', $errors ) . '</span>';
			}
		//using SMTP
		else:
			//https://github.com/PHPMailer/PHPMailer
			$mail = new PHPMailer(true);
			$from_email = (!empty($sender_email)) ? $sender_email : '';
			try {

				$mail->SMTPDebug = 0;
				$mail->isSMTP();
				$mail->Host = $smtp_host;
				$mail->SMTPAuth = true;
				$mail->Username = $smtp_username;
				$mail->Password = $smtp_password;
				$mail->SMTPSecure = $smtp_secure;
				$mail->Port = $smtp_port;


				$mail->setFrom($from_email, $sender_name);
				$mail->addAddress($your_email);

				//you can add your attachments here:
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');


				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body    = $message;
				$mail->AltBody = strip_tags($message);

				$mail->send();
				echo $email_was_sent;
			} catch (Exception $e) {
				echo '<span class="form-errors">' . $mail->ErrorInfo . '</span>';
			}
		endif; //smtp check
	} else {
		echo '<span class="form-errors">' . implode('<br>', $errors ) . '</span>';
	}
} else {
	// if "name" var not send ('name' attribute of contact form input field was changed or missing)
	echo '"name" variable were not received by server. Please check "name" attributes for your input fields';
}
