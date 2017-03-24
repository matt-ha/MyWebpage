<?php
$Message;
$Name;
$Email;
$to;


// $subject = 'the subject';
// $message = 'hello';
      //
      // $headers =  'MIME-Version: 1.0' . "\r\n";
      // $headers .= 'From: Your name <info@address.com>' . "\r\n";
  //     // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   //
  //  mail($to, $subject, $message, $headers);


   function mail_utf8($to = 'g2peee@hotmail.com', $Name, $Email,
                                                $subject = '(No subject)', $Message = '')
      {
         $Name = "=?UTF-8?B?".base64_encode($Name)."?=";
         $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

         $headers = "From: $Name <$Email>\r\n".
                  "MIME-Version: 1.0" . "\r\n" .
                  "Content-type: text/html; charset=UTF-8" . "\r\n";

        return mail($to, $subject, $message, $headers);
      }

?>
