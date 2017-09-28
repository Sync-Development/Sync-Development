<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='tim.uittenbogaard1997@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			 header('Refresh: 3; url=contact.html');
            echo 'Heel erg bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op!';
		}
		else{
			header('Refresh: 3; url=contact.html');
            echo 'Er is iets mis gegaan, u wordt terug gestuurd naar contact';
		}
	}
?>