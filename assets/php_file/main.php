 <?php 

// $company=$_POST['company-name'];
// $name = $_POST['name'];
// $email= $_POST['email'];

// $message= $_POST['message'];
// $to = "kumaragururf123@gmail.com";
// $subject = "Mail From website";
// $txt = "Company =". $company . "\r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//    $response = mail($to,$subject,$txt,$headers);
//    print_r($response);
// }

// header("Location:thankyou.html");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email address to receive the form submission
    $to = 'kumaragururf123@gmail.com';
    
    // Subject of the email
    $subject = 'New Form Submission';
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";
    
    // Send the email
    $mail_sent = mail($to, $subject, $email_message);
if (!$mail_sent) {
    $error_message = error_get_last()['message'];
    echo "Error: $error_message";
}
 else {
        // If there was an error sending the email, display an error message
        echo 'There was a problem sending your message. Please try again later.';
    }
} else {
    // If the form was not submitted, display an error message
    echo 'Sorry, something went wrong.';
}

?> 