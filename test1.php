<?php
require_once '\vendor\autoload.php';

// print_r(stream_get_transports());
//64.233.160.108
$Email = "realmunny@realtalk.com";
//hotmail   65.55.176.126
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('ha.ha.ha.matt@gmail.com')
  ->setPassword('Qpwoeiru10293847');


$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Mr. Anderson')
  ->setFrom(array('g2peee@hotmail.com' => 'wewewewewewe'))
  ->setTo(array('mattha0929@gmail.com'))
  ->setBody("From: <$Email> \n\n" . 'OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING. OKAY, PROBLEM IS WITH AVAST RUNNING.');

$result = $mailer->send($message);

?>
