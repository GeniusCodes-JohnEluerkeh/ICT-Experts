<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$url = strip_tags($_POST['url']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "info@ictexpertss.com", "Contact Form",
"Name: $name\nEmail: $email\nMessage: $message\n",
"From: Forms <support@ictexpertss.com>" );
?>

