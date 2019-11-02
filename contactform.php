<?php 
if(isset($_POST['submit'])){
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$to = "toristidyup@gmail.com";
	$from = $_POST['emailaddress'];
	$body = $_POST['emailbody'];
	
	$subject = "New Request: ".$firstName." ".$lastName
	$headers = "From: ".$from;
	
	mail($to, $subject, $body, $headers);
	header("Location: contact.html?mailsent");
}
?>