<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$aahar = $_POST["aahar"];
$company = $_POST["company"];

$EmailTo = "dinesh.hnh@gmail.com,info@helioshotelwares.com";
$EmailFrom = "info@webanaya.com";
$Subject = "Helios - You have received New Enquiry";

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "AAhar Visit Date: ";
$Body .= $aahar;
$Body .= "\n";

$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$EmailTo);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>
