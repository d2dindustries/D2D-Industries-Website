<?php

$name = $_POST['name']; //'name' has to be the same as the name value on the form input element

$email = $_POST['email'];

$message = $_POST['message'];

$from = $_POST['email'];

$to = 'd2dindustries@gmail.com'; //set to the default email address

$subject = 'D2D Industries Contact Me Form';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";


$headers = "From: d2dindustries.rocks" . "\r\n" .

"Reply-To: $email" . "\r\n" .

"X-Mailer: PHP/" . phpversion();



if(isset($_POST['submit'])) {               

	$mailCheck = mail ($to, $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email

	if(mailCheck){
    	
    	echo "<p>Your message has been sent!</p>";

	}else{

    	echo "<p>Something went wrong, your message was not sent. Please email d2dindustries@gmail.com instead!</p>";

	}

} else { 

    echo "<p>Something went wrong, go back and try again! If the problem persists, please email d2dindustries@gmail.com instead!</p>"; 

}

?>