<?php
error_reporting(E_ALL ^ E_STRICT);
include_once('Mail.php');
include_once('mime.php');
  
  class Send_Messages{
   
   function element_login($from, $to, $subject, $body)
   { 
      //require_once "mailib/Mail-1.2.0/Mail/smtp.php";
      //require_once "SMTP.php";
      
      
      $from = $from." <notificaciones@insigniamobile.com.ve>";
     /* $to = "Jose Mendez <jose.mendez@insignia.com.ve>";
      $subject = "Hi!";
      $body = "Hi,\n\nHow are you?";*/
      $resultado = "";
      
      /*$host = "mail.insigniamobile.com.ve";
      $username = "notificaciones@insigniamobile.com.ve";
      $password = "qwe123";*/
      
      $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);
      
      
        $mime = new Mail_mime();
        $mime->setHTMLBody($body);
 
        $body = $mime->get();
        $headers = $mime->headers($headers);
      
      @$smtp =& Mail::factory('smtp',
        array ('host' => $host,
          'auth' => true,
          'username' => $username,
          'password' => $password));
      
      $mail = $smtp->send($to, $headers, $body);
      
      if (PEAR::isError($mail)) {
        $resultado = "<p>" . $mail->getMessage() . "</p>";
       } else {
        $resultado = "<p>Mensaje enviado exitosamente!</p>";
       }

    return $resultado;
   }
   
  }
  
 ?>


