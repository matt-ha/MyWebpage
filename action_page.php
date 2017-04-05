<?php
require_once '\vendor\swiftmailer\swiftmailer\lib\swift_required.php';

$Name = $_GET['Name'];
$Email = $_GET['Email'];
$Message = $_GET['Message'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('ha.ha.ha.matt@gmail.com')
  ->setPassword('Qpwoeiru10293847');


$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($Name)
  ->setFrom(array('g2peee@hotmail.com' => $Email))
  ->setTo(array('mattha0929@gmail.com'))
  ->setBody("From: <$Email> \n\n" . $Message);

$result = $mailer->send($message);
if ($result = 1) {
  header("Location: https://mywebpag3.herokuapp.com/index.php"); /* Redirect browser */
exit();

/*
header( "refresh:5;url=wherever.php" );
this is the php way to set header which will redirect you to wherever.php in 5 seconds
*/
}

// $all = array($Name,$Email,$Message);
//
// print_r($all);
//
// mail_utf8($Name,$Email,$Message);
//   //     echo "it work";
//    //
//   //   // }
//    //
//    //
// function mail_utf8($to = 'g2peee@hotmail.com', $Name, $Email, $subject = '(No subject)', $Message = '')
// {
//    $Name = "=?UTF-8?B?".base64_encode($Name)."?=";
//    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
//    $headers = "From: $Name <$Email>\r\n".
//               "MIME-Version: 1.0" . "\r\n" .
//               "Content-type: text/html; charset=UTF-8" . "\r\n";
//
//   return mail($to, $subject, $message, $headers);
// }

?>
