<?php

// phpinfo();
// function sendEmail($email_from, $email_message) {
// 	$headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
	
// 	echo $headers."<br /><br />";
// 	$email_to = 'amber.l.hampton@gmail.com';
// 	$email_subject = 'Power of Good Message';

//     mail($email_to, $email_subject, $email_message, $headers);
// }

// sendEmail($_REQUEST['emailaddress'], $_REQUEST['emailmessage']);                

$email_from = 'ahmad@ccs.neu.edu';
ini_set('display_errors', 'On');
$headers = array("From: ahmad@ccs.neu.edu",
    "Reply-To: ahmad@ccs.neu.edu",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);

// 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
echo $headers;
if(mail("amber.l.hampton@gmail.com","Subject","Email message", $headers)){
	echo "Sent Good";
}else{
	echo "Sent fAIL";
}


if(mail("ahmad@ccs.neu.edu","Subject","Email message", $headers)){
	echo "Sent Good";
}else{
	echo "Sent fAIL";
}

?>