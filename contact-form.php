<?php

$to ="gmg8r251@ufl.edu";
$subject = "Appointment Request";
$message = Trim(stripslashes($_POST['Message']));
$from = Trim(stripslashes($_POST['Email']));
$name = Trim(stripslashes($_POST['Name']));

$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$body = " ";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Number: ";
$body .= $number;
$body .= "\n";
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

$success = mail($to, $subject, $body, "From: <$from>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL= http://julioaenlle.net/slicksautobody/index.php/thankyou\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
