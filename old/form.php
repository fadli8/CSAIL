<?php

$to = "smith19930929@gmail.com";
$subject = $_POST['subject'];
$from = "from:" . $_POST['email'];
$message .= $_POST['message'];


if (mail($to, $subject, $message, $from)) {
	header('Location: contact.html?v=1'); ?>
<?php
}else {
	echo "oops! doesn't work";
}


?>