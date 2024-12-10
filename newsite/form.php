<?php
$name= $_POST('');
$visior_email= $_POST('');
$subject= $_POST('');
$message= $_POST('');

$email_from = 'info@edutech.com';

$email_subject='new form submission';

$email_body = "User Name:$name.\n".
			  "User Email:$visitor_email.\n".
			  "subject:$subject.\n".
			  "User message:$message.\n";
			  
$to =	'miriamchimezie.mc@gmail.com';
$header =	"from:$email_from\r\n";
$header. = " "Reply-To: $visitors_email\r\n";

mail($to,$email_subject,$email_body,$header);
header("location:contact us.html");
	  
			  
			  
			  
			  ?>