
<?php

$firstname=$_POST["first-name"];
$lastname=$_POST["last-name"];
$email=$_POST["your_email"];
$phone=$_POST["phone"];
$tech=$_POST["tech"];

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Yayyy@poolup.4not5.com";
    $to = "madhu.anandam@gmail.com";
    $subject = "Thank you for Registering";
    $message = ' 
    <html> 
    <head> 
        <title>Yayyy! We got a new user named '.$firstname.' '.lastname.'</title> 
    </head> 
    <body> 
        <h1>Yayyy! We got a new user named '.$firstname.' '.$lastname.'</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Email:</th><td>CodexWorld</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Phone:</th><td>contact@codexworld.com</td> 
            </tr> 
            <tr> 
                <th>Technology:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>';
    
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	
$headers .= 'From: '.$from . "\r\n"; 
    if(mail($to,$subject,$message, $headers)) { 	
	 header('Location: success.html');

    } else {
    	echo "The email message was not sent.";
    }
	
	
	
    
	
	//include("subscribe2.php");
	/*$from = "welcome@poolup.4not5.com";
    $to = "sowjanyachikka405@gmail.com";
    $subject = "Thank you for Registering";
    $message = "Thank you \n".$firstname. " " .$lastname." for trusting us, we will search a suitable proxy
	for you!" 

    $headers = "From:" . $from;
	
    if(mail($to,$subject,$message, $headers)) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }*/
	
?>