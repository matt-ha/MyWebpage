<?php
require_once getcwd() . '/vendor/autoload.php';
$ini = parse_ini_file('/test/config.ini');

$Name = $_GET['Name'];
$Email = $_GET['Email'];
$Message = $_GET['Message'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername($ini['app_email'])
  ->setPassword($ini['app_pass']);


$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($Name)
  ->setFrom(array('myemail@hotmail.com' => $Email))
  ->setTo(array($ini['app_email2']))
  ->setBody("From: <$Email> \n\n" . $Message);

$result = $mailer->send($message);
if ($result = 1) {
  header("Location: index.php"); /* Redirect browser */
exit();

}
?>
