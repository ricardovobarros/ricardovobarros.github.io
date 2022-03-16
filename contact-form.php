<html>
<body>


<?php 
if ($_POST){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$formcontent="From: $name \n Message: $message";
	$recipient = "ricardovobarros@live.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader): bool
	echo "Thank You!";
}
else {echo "<p> Somethinng went wrong</p>"}
?>

</body>
</html>
