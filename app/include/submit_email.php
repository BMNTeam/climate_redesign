<?php


if(isset ($_POST['g-recaptcha-response']) && ! $_POST['g-recaptcha-response']) {

	// show current $_POST files
	$secret = '6LcIUecSAAAAAIFoRXmzuQcFW3g87YzVLGBngG4V'; // secret key part
	$captcha = $_POST['g-recaptcha-response'];            // captcha part
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha"); //  validate

	// create array form $rsp variable

	$arr = json_decode($rsp, true); // make associative array from json

	if (!$arr['success']){
		$error = "";

		// Check empty name field
		if ( ! trim($_POST['recipient_name'])){

			$error = "<p> Введите ваше имя </p>";
		}

		// Check email validation
		if ( ! filter_var(trim($_POST['recipient_email']), FILTER_VALIDATE_EMAIL)){
			$error = "<p>Введите корректный email</p>";
		}

		// If message empty
		if ( ! trim($_POST['recipient_question'])) {
			$error = "<p>Укажите текст вапроса</p>";
		}


		// If all OK use standard php5 function to send email
		if ( ! $error) {
			$to         = 'maksimbender081991@gmail.com';
			$subject    = "Question";
			$txt        = trim($_POST['recipient_question']);
			$headers    = "From: ]" .$_POST['recipient_email']. "\r\n";
			$headers   .= "Reply-To: " . trim($_POST['recipient_email']);

			mail($to, $subject,$txt, $headers);
			//mail('maksim_bender08@mail.ru', "hi",'Cool');

			// Set a 200 (okay) response code.
	/*		http_response_code(200);*/
			echo "Thank You! Your message has been sent.";
		} else {
			echo $error;
		}
	}else {
		// Not a POST request, set a 403 (forbidden) response code.
		//http_response_code(403);
		echo "There was a problem with your submission, please try again.";
	}






} else {
	echo "А вы точно не робот?";
}


; ?>