<?php
$servername = "localhost";
$username = "u617208335_stunetdata";
$password = "Stunet@1509";
$dbname = "u617208335_registereddata";

$firstname=$_POST["first-name"];
$lastname=$_POST["last-name"];
$email=$_POST["your_email"];
$phone=$_POST["phone"];
$tech=$_POST["tech"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$sql = "INSERT INTO userdata (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";*/
$sql = "INSERT INTO userdata_test (firstname,lastname,email,phone,technology)
VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$tech."')";

$VALUE = $conn->query($sql);


if ($VALUE) {
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Welcome Champ@poolup.4not5.com";
    $to = "madhu.anandam@gmail.com";
    $subject = "Thank you for Registering";
    $message = ' 
    <html> 
    <head> 
        <title></title> 
    </head> 
    <body> 
        <h1>Yayyy! We are delighted to welcome to on board!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Email:</th><td>'.$email.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Phone:</th><td>'.$phone.'</td> 
            </tr> 
            <tr> 
                <th>Technology:</th><td>'.$tech.'</td> 
            </tr> 
        </table> 
    </body> 
    </html>';
    
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	
	$headers .= 'From: '.$from . "\r\n"; 



    if(mail($to,$subject,$message, $headers)) { 
		
		
	 //header('Location: success.html');

    } else {
    	echo "The email message was not sent.";
    }
} 

if($VALUE){
	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Yayyy@poolup.4not5.com";
    $to = "madhu.anandam@gmail.com";
    $subject = 'We got a new user named '.$firstname.' '.$lastname.'';
    $message = ' 
    <html> 
    <head> 
        <title></title> 
    </head> 
    <body> 
        <h1>Yayyy! We got a new user named '.$firstname.' '.$lastname.'</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Email:</th><td>'.$email.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Phone:</th><td>'.$phone.'</td> 
            </tr> 
            <tr> 
                <th>Technology:</th><td>'.$tech.'</td> 
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
}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>