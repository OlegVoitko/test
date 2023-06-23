<!-- <?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	$mail->setFrom('pel6men6@mail.ru', 'Oleg');
	$mail->addAddress('pel6men6.oleg@gmail.com');
	$mail->Subject = 'Hello'

	$body = '<h1>AAAAAAAA</h1>'

	if (!$mail->send()){
		$message = 'Error'
	}else {
		$message = 'Ok'
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?> -->