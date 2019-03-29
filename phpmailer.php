<?php
include("phpmailer/PHPMailerAutoload.php");
$name="Php Mailer";
$tomail='to@example.com';//to mail
$hashck="Php Mailer";
$mail = new PHPMailer;
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                              
$mail->Username = 'user@example.com'; //user mail 
$mail->Password = 'password';
$mail->SMTPSecure = 'ssl';                        
$mail->Port = 465;                                  
$mail->From = 'from@example.com';//from
$mail->FromName = 'PHP Mailer';
$mail->isSMTP();                                                                 
$mail->addAddress(''.$tomail.'');    
$mail->addReplyTo(''.$tomail.'');
$mail->isHTML(true);  
$mail->Subject = 'PHP Mailer';
$mail->Body    = '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head></head>
<body>
<table cellspacing="0" cellpadding="0" style="border: none;"><tr>
<td>
<br><p><b>Hi,<b></p>
</td>
</tr>
<tr>
<td>
<span>&nbsp;&nbsp;&nbsp;</span>My name is '.$name.'.</br>
<p>Thank you!</p>
</td>
<br>
  </tr>
<tr>
<td>
<p>
<br/>
Regards,<br/>
'.$name.'<br/>
</p>
</td>
</tr>
</table>
</body>
</html>
';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
}
 else 
{
 echo 'Message sent successfully.';
} 
