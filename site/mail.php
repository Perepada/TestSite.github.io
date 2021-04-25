<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail ->CharSet = 'utf-8';
$name = $_POST['name'];
$phone = $_POST['topic'];
$email = $_POST['email'];
$text = $_POST['text'];

$ mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->SetForm('');
$mail->AddAddress('');

//$mail->AddAddress('info@example.com');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'image.jpg');

$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body = '' + .$name + "отправил вам письмо с темой " + .$topic + "c почты" + .$email;
$mail->AltBody = '';

if(!$mail->send()){
	echo "Error";
} else{
	header('location: thank-you.html');
}

?>