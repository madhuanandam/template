
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
    $message = "Hi Team \n".$firstname. " " .$lastname." with 
Email: ".$email.",
phone: ".$phone.",
Techonology: ".$tech." 
has registered with you for proxy";
    $headers = "From:" . $from;
	
    if(mail($to,$subject,$message, $headers)) { 	

		//echo "The email message was sent."; 	
?>
		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form-v1 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
			<div style="    text-align: center;font-family: revert;font-size: 24px;margin: 10px;">A Creation of <a href="https:4not5.com" style="text-decoration: none;color: #dc7878;" target="_blank">4NOT5 Innovations</a> </div>
		        <form class="form-register" action="subscribe.php" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Who we are?</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Thank you</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
								</div>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" class="radio" name="radio1" id="plan-1" value="plan-1">
			                			<label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Specific Plan</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
			                			<input type="radio" class="radio" name="radio1" id="plan-2" value="plan-2">
			                			<label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Medium Plan</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" >
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Special Plan</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
			                		</div>
			                	</div>
							</div>
			            </section>
						
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html> <?php
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