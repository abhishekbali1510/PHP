<?php
include('smtp/PHPMailerAutoload.php');

echo smtp_mailer('receiver mail id','Subject','body of mail'); 
            //this line calls the function and send mail


function smtp_mailer($to,$subject,$msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "";   //sender's mail id
	$mail->Password = "";       // sender's mail password
	$mail->SetFrom("");     //sender's mail id
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	$mail->send();
	if(!$mail->Send()){
		echo $mail->ErrorInfo;                  // check code
	}else{
		return 'Sent';
	}
}

?>
