<?php
$name = $_POST['txtname'] ;
$phone = $_POST['txtphone'] ;
$txtemail = $_POST['txtemail'] ;
$phone = $_POST['txtphone'] ;
$address = $_POST['txtaddress'] ;
$city = $_POST['txtcity'] ;
$postcode = $_POST['txtpostcode'] ;
$country = $_POST['txtcountry'] ;
$message = $_POST['msg'] ;

$sbuffer = "Full Name = $name<br />".
"Phone Number = $phone<br />".
"Email = $txtemail<br />".
"Address = $address<br />".
"City = $city<br />".
"Postcode = $postcode<br />".
"Country = $country<br />".
"Enquiries / Feedback = $message<br />";

$subject = 'Massimo Feedback Form';


$send = mail("kry183@hotmail.com", $subject, $sbuffer, "From:".$email);
if($send)
{
    echo "Your Account is Successfully Created. You must Activate your account.";
}
else
    echo "Failed to send";
?>