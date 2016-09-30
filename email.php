<?php

$EmailTo = "spgreenbaum@gmail.com";
$Subject = “Thank You For the Inquiry”;
$Name = Trim(stripslashes($_POST['name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$headers = 'From: ' . $Email . "\r\n" .
    'Reply-To: ' . $Email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

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
//$Body .= "\n";
//$Body .= "Tel: ";
//$Body .= $Tel;
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
?>