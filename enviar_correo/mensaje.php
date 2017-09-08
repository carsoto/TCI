<?php

error_reporting(E_ALL ^ E_STRICT);

require_once 'sendmail.php';
$send_mail = new Send_Messages;
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;
/*$from = "Frontend Premium";
$to = "carmen.soto@insignia.com.ve";
$subject = "Notificación de pruebas FE-PREMIUM";
$body = "<html>
        <body bgcolor='gainsboro'>
          <h2 style='color: red;'>AVISO IMPORTANTE!!</h2>
          <br>Estimado usuario <strong>carmen.soto</strong>, TEST DE ENVIO
          <br>
          <br><strong>Equipo de Insignia Mobile Communications, C.A.</strong>".date("d-m-Y H:i:s")."
        </body>
      </html>";   
echo($send_mail->element_login($from, $to, $subject, $body));*/
?>