<?php
    $name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	
	$email_form = 'ramajay.shaw.143@gmail.com';
	
	$email_subject = "New form submission";
	
	$email_body = "user Name: $name.\n";
	                "user Email: $visitor_email.\n";
					  "user message: $message.\n";
					  
					  
	$to = "ramajay.shaw.143@gmail.com";
	
	$header = "form:email_from\r\n";
	
	$header.= "reply-to: $visitor_email\r\n";
	
	mail($to,email_subject,email_body,$headers);
	
	header("location: index.html");
	
	
	
?>