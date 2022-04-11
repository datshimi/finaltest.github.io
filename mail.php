<?php 

	require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
	$ContactNumer=$_POST['ContactNumer'];
	$Name=$_POST['Name'];
	$EmailID=$_POST['EmailID'];
	// print_r($ContactNumer.$Name.$EmailID);die;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = 'ssl'; // tls or ssl
	$mail->Port     = "465";
	$mail->Username = "youremail-id";
	$mail->Password = "your password";
	$mail->Host     = "smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SetFrom("Your email", "name");
	$mail->AddAddress('your second email address where u want to receive mail');
	$mail->Subject = "New Lead";
	//$mail->MsgHTML("Name : ".$name);
	$mail->Body     .= "Name: $Name <br/>"; 
	$mail->Body     .= "Cantact Number: $ContactNumer<br/>";
	$mail->Body     .= "Email Number: $EmailID<br/>";
	//$mail->MsgHTML("Name : ".$name);
	$mail->IsHTML(true);		
	$result = $mail->Send();
	die;
	header("Location:reg.php");