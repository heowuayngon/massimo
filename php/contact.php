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

$sbuffer = "Full Name = $name \n\n".
"Phone Number = $phone \n\n".
"Email = $txtemail \n\n".
"Address = $address \n\n".
"City = $city \n\n".
"Postcode = $postcode \n\n".
"Country = $country \n\n".
"Enquiries / Feedback = $message \n\n";

$subject = 'Massimo Feedback Form';

/*
mail("jacque.chin@cenxus.com", $subject, $sbuffer, "From:".$txtemail);
mail("laikf@ffmb.com.my", $subject, $sBuffer, "From:".$txtemail);
*/

$send = mail("customercare@theitalianbaker.com.my", $subject, $sbuffer, "From:".$txtemail);
if($send)
{
     header( "Location: ../contact_us.php?send=1" );
}
else
   header( "Location: ../contact_us.php?send=0" );
?>