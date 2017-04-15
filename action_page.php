<?php
require_once getcwd() . '/vendor/autoload.php';

$Name = $_GET['Name'];
$Email = $_GET['Email'];
$Message = $_GET['Message'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername(getenv('app_email'))
  ->setPassword(getenv('app_pass'));


$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($Name)
  ->setFrom(array('myemail@hotmail.com' => $Email))
  ->setTo(array(getenv('app_email2')))
  ->setBody("From: <$Email> \n\n" . $Message);

$result = $mailer->send($message);
if ($result = 1) {
  header("Location: index.php"); /* Redirect browser */
exit();

}
?>
