<?php
$to = "evanm900@gmail.com";
$name = Trim(stripslashes($_POST['contact_name']));
$email = Trim(stripslashes($_POST['contact_email']));
$message = Trim(stripslashes($_POST['contact_message']));
$from = $_POST['email'];
$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";
$go = mail($to, $subject, $body, $from);
if($go){
	echo("Success!");
}
else{
	echo("Unable to send!!");
}
?>