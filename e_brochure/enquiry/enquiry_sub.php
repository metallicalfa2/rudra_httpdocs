<?php
print_r($_POST);
$cname= $_POST['name'];
$web= $_POST['web'];
$fname= $_POST['f_name'];
$lname= $_POST['l_name'];
$ph= $_POST['ph1']."-".$_POST['ph2']."-".$_POST['ph3'];
$email= $_POST['email'];
$add= $_POST['add']."\n\r".$_POST['add2']."\n\r".$_POST['city']."\n\r".$_POST['state']."\n\rZip : ".$_POST['zip']."\n\r".$_POST['country'];
$comment= $_POST['comm'];

$enquiry="\n\r Name : ".$cname."\n\rWebsite : ".$web."\n\r Contact person : ".$fname." ".$lname."\n\r phone : ".$ph."\n\r Email-ID : ".$email."\n\r Address : ".$add."\n\r Comments : ".$comment;

//Mail to Admin

	$sender = $email;
	$receiver = "info@rudrascales.com,creativewebfield@gmail.com";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Dear Admin, \n\rYou have an enquiry throuth your website, details are as follow\n\r".$enquiry."\n\r Thank you.";	
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	
		
	if( mail( $receiver, "Enquiry from e-Brochure RUDRA SYSTEMS", $email_body, $extra ) ) 
	{
		echo "<script language='javascript'>window.location='thanks.htm';</script>";
	}
	else
	{
		echo "Error sending mail.";
	}


//Mail to enquiry

	$sender =  "info@rudrascales.com,creativewebfield@gmail.com";
	$receiver = $email;
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Dear ".$fname." ".$lname." Thankyou for giving interest in our product. You had sent following details to us. \n\r".$enquiry."\n\r We will revert you soon.\n\r Thank you.\n\r Admin";	
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	
	
		
	if( mail( $receiver, "Enquiry from e-Brochure RUDRA SYSTEMS", $email_body, $extra ) ) 
	{
		echo "<script language='javascript'>window.location='thanks.htm';</script>";
	}
	else
	{
		echo "Error sending mail.";
	}


?>


	
