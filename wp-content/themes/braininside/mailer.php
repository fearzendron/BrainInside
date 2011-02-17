<?php
	$to = "fearzendron@gmail.com";
	$subject = "Contato BrainInside";
	$from = $_POST['txtemail'];
	$name = $_POST['txtname'];
	$message = $_POST['txtmessage'];
	
	if (isset($_POST['submit'])) {
		$body = "From: $name\n E-Mail: $from\n Message:\n $message";

		mail($to, $subject, $body);
		echo "Enviado com sucesso";
	} else {
		echo "error: no data sent!";
	}
?>