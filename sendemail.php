<?php  
  
  //Email information
  /*$admin_email = "your@email.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['message'];
  


  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  */
  

 	  $mail = new PHPMailer();
    $correoSMTP = false;
    $mail->SetFrom('notificaciones.admin@insigniamobile.com','Prueba');
    $mail->Subject = $_REQUEST['subject'];
    $mail->Body = $_REQUEST['message'];
    $mail->IsHTML(true);
    
    $mail->AddCC("mariana280790@gmail.com");
    
    $mail->AddAddress($_REQUEST['email'], $_REQUEST['name']);
    
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->SMTPAuth = 'login';
    $mail->Host = 'mail.insigniamobile.com';//'mail.insignia.com.ve';
    $mail->Port = 26;
    $mail->Username = 'notificaciones.admin@insigniamobile.com';
    $mail->Password = 'qwe123#';


	if($mail->send()){
	    //echo 'exitoso: notificaciones.admin@insignia.net.ve';
	}else{
	    //echo 'error';
	    print_r($mail->ErrorInfo);
	    exit;
	}

	
  ?>