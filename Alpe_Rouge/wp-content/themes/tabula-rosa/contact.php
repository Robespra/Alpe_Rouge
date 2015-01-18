<?php 

require_once('recaptchalib.php'); 
$privatekey = "copy and paste your private key here"; 
$resp = recaptcha_check_answer ($privatekey, 
                                $_SERVER["REMOTE_ADDR"], 
                                $_POST["recaptcha_challenge_field"], 
                                $_POST["recaptcha_response_field"]); 

if (!$resp->is_valid) { 
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." . 
       "(reCAPTCHA said: " . $resp->error . ")"); 
} 

$EmailFrom = "robespra@visu-synect.com"; 
$EmailTo = "robespra@visu-synect.com"; 
$Subject = "Feedback for my topsites"; 
$Name = Trim(stripslashes($_POST['Name']));  
$City = Trim(stripslashes($_POST['City']));  
$Email = Trim(stripslashes($_POST['Email']));  
$Message = Trim(stripslashes($_POST['Message']));  

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
$Body .= "City: "; 
$Body .= $City; 
$Body .= "\n"; 
$Body .= "Email: "; 
$Body .= $Email; 
$Body .= "\n"; 
$Body .= "Message: "; 
$Body .= $Message; 
$Body .= "\n"; 

// send email  
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>"); 

// redirect to success page  
if ($success){ 
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.visu-synect.com/Alpe_Rouge/\">"; 
} 
else{ 
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.visu-synect.com/Alpe_Rouge/\">"; 
} 
?>