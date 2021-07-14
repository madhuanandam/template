
<?php

$firstname=$_POST["first-name"];
$lastname=$_POST["last-name"];
$email=$_POST["your_email"];
$phone=$_POST["phone"];
$tech=$_POST["tech"];

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "welcome@poolup.4not5.com";
    $to = "madhu.anandam@gmail.com,sowjanyachikka405@gmail.com,v.rakesh40@gmail.com";
    $subject = "Thank you for Registering";
    $message = "Hi Team \n".$firstname. " " .$lastname." with 
Email: ".$email.",
phone: ".$phone.",
Techonology: ".$tech." 
has registered with you for proxy";
    $headers = "From:" . $from;
	
    if(mail($to,$subject,$message, $headers)) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
?>