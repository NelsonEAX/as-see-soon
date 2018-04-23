<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$formcontent="Name: $name\n\nEmail: $email\n\nMessage: $message";
	
	// Enter the email where you want to receive the notification when someone submit form
	$recipient = "nelsoneax@yandex.ru";
	
	$subject = "Заявка на перезвонить от availsoft.ru";
	
	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";
	$mailheader .= "MIME-Version: 1.0\\r\\n";
	
	$success = mail($recipient, $subject, $formcontent, $mailheader);
	
	if ($success == true){
	
?>
	
	<script language="javascript" type="text/javascript">
		alert('Благодарим вас за проявленный интерес! Скоро с вами свяжется наш представитель.');
		window.location = "../index.html";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Что-то пошло не так. Мы не смогли отправить сообщение. Просим вас связаться с нами по указанным контактам');
		window.location = "../index.html";
    </script>
	
<?php

    }
	
?>