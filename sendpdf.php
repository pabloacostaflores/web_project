<?php

	$namefile = $_SESSION["boleta"]."_PDF.pdf";
	
	include("./phpmailer/src/PHPMailer.php");
	include("./phpmailer/src/SMTP.php");
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	
	$email_user = "proyecto.tecweb.equipo9@gmail.com";
	$email_password = "TWequipo9";
	$the_subject = "PDF Examen - ".$_SESSION["boleta"];
	$address_to = $_SESSION["correo_alumno"];
	$from_name = "Proyecto - Equipo #9";
	$phpmailer = new PHPMailer();

	// ———- datos de la cuenta de Gmail ——————————-
	$phpmailer->Username = $email_user;
	$phpmailer->Password = $email_password; 
	//———————————————————————–
	// $phpmailer->SMTPDebug = 1;
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Host = "smtp.gmail.com"; // GMail
	$phpmailer->Port = 465;
	$phpmailer->IsSMTP(); // use SMTP
	$phpmailer->SMTPAuth = true;

	$phpmailer->setFrom($phpmailer->Username,$from_name);
	$phpmailer->AddAddress($address_to); // recipients email
	
	$phpmailer->Subject = $the_subject;	
	$phpmailer->Body .="<h1 style='color:Navy;'>Cita Exámen Diagnóstico</h1>";
	$phpmailer->Body .="<p style='color:Navy;'>Gracias por proporcionarnos tus datos, aqui esta tienes el pdf con los datos de tu cita para examen diagnóstico</p>";
	$phpmailer->Body .="<p style='color:Navy;'>Saludos, gracias.</p>";
	
	$phpmailer->IsHTML(true);
	$phpmailer->AddStringAttachment($_SESSION["doc"], $namefile, 'base64', 'application/pdf');


	$phpmailer->Send();
	session_destroy();
?>
