<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	// require 'includes/PHPMailer.php';
	// require 'includes/SMTP.php';
	// require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require("phpmailer/src/Exception.php");
	require("phpmailer/src/PHPMailer.php");
	require("phpmailer/src/SMTP.php");

	if (isset($_POST["submit"])) {
		//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "gdmirkplays1@gmail.com";
//Set gmail password
	$mail->Password = "kbrhvszidijtsrlw";
//Email subject
	$mail->Subject = "AquaCity Bratislava";
//Set sender email
	$mail->setFrom('gdmirkplays1@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Email body
	$mail->Body = $_POST["message"];
//Add recipient
	$mail->addAddress($_POST["email"]);
//Finally send email
	if ( $mail->send() ) {
		echo "<h1 class='succes'>Vaša správa bola úspešne odoslaná. Ďakujeme!</h1>";
		echo "<br>";
		echo "<a href='contact.php'>Späť</a>";
	}else{
		echo "Správu sa nepodarilo odoslať skúste to znovu!";
	}
//Closing smtp connection
	$mail->smtpClose();
	}
