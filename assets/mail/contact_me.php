<?php
/*+
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Falta algún argumento!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'amynahmas@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulario de contacto de la maravillosa página web:  $name";
$email_body = "Has recibido un nuevo mensaje desde el formulario de contacto de la web.\n\n"."Aquí están los detalles =):\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;*/

?>
