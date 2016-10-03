<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$EmailTo = 'spgreenbaum@gmail.com';
	$Subject = 'Thank You For the Inquiry';
	$Name = "";
	$Name = isset($_GET["name"]) ? $_GET["name"] : "UNDEFINED"; 
	$Email = "";
	$Email = isset($_GET['email']) ? $_GET['email'] : "UNDEFINED";  
	$Message = isset($_GET['message']) ? $_GET['message'] : "UNDEFINED"; 
	$headers = 'From: ' . $Email . "\r\n" .
	    'Reply-To: ' . $Email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	// validation
	$validationOK=true;
	if (!$validationOK) {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	  exit;
	}

	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $Name;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $Message;
	$Body .= "\n";

	// send email 
	$success = mail($EmailTo, $Subject, $Body, $headers);

	// redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html#contact\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	}
}
?>