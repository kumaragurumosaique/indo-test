<?php 
// print_r($_POST);exit;
//get data from form 

$company=$_POST['company-name'];
$name = $_POST['name'];
$email= $_POST['email'];

$message= $_POST['message'];
$to = "kumaragururf123@gmail.com";
$subject = "Mail From website";
$txt = "Company =". $company . "\r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
   $response = mail($to,$subject,$txt,$headers);
   print_r($response);
}
//redirect
header("Location:thankyou.html");
?>