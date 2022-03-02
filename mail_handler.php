<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['e-mail'];
		$msg=$_POST['msg'];

		$to='office@novayachts.eu'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission'; 
		$message="Name: ".$name. "\nWrote the following: "."".$msg. "\n\nMail: ".$email;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		//	echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		header("Location: http://www.novayachts.eu/ ");
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

