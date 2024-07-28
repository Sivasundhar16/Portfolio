<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Parax Contact Form'; 
		$to = 'vssiva18@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

	mail($to, $subject, $body, $from) or die("Error!");

	header("location: thank-you.html");
	
	}
	
?>


/////////////////////////

<!-- <?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Parax Contact Form';  // Sender's email address
		$to = 'vssiva18@gmail.com';  // Recipient's email address
		$subject = $_POST['subject']; 
		
		$body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";
		$headers = "From: $from";

		if(mail($to, $subject, $body, $headers)) {
			header("Location: thank-you.html");
		} else {
			die("Error!");
		}
	}
?> -->
