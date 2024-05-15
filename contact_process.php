<?php

    // $to = "lewinkng@gmail.com";
    // $from = $_POST['email'];
    // $name = $_POST['name'];
    // $subject = $_POST['subject'];
    // $number = $_POST['number'];
    // $cmessage = $_POST['message'];

    // $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your Portfolio.";

    // $logo = 'img/logo.png';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);


	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailheader = "From:" .$name."<".$email.">\r\n";

	$recipient = "lewinkng@gmail.com"

	$txt = "You have recieved an email from Portfolio Website"

	mail($recipient, $subject, $message, $mailheader)
	or die("Error!");

	echo "Thank you for contacting us. We will get back to you shortly.";

?>