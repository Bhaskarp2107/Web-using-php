<?php
use Twilio\Rest\Client;
$successMessage = “”;
if ($_SERVER[“REQUEST_METHOD”] == “POST”) {
 $name = $_POST[“name”];
 $email = $_POST[“email”];
 $mobile = $_POST[“mobile”];
 $message = $_POST[“message”];
 // Perform form validation here (e.g., check for empty
fields, validate email format).
 // If the form is valid, you can proceed with further actions
like sending an email and SMS notification.
 // Send Email Notification
 $to = “restaurant_mail@gmail.com”; // Replace with the
restaurant’s email address
 $subject = “New Feedback from $name”;
 $email_body = “Name: $name\nEmail: $email\nMobile:
$mobile\nFeedback: $message”;

 // You can customize the headers if needed, e.g., to set the
‘From’ address
 $headers = ‘From: feedback-form@example.com’ . “\r\n”;

 mail($to, $subject, $email_body, $headers);
 // Send SMS Notification using Twilio (You need to replace
with your Twilio credentials)
 require ‘vendor/autoload.php’; // Include Twilio PHP library

// Your Twilio credentials
$accountSid = ‘your_twilio_ID’;
$authToken = ‘your_twilio_token’;
// Create a Twilio client
$twilio = new Twilio\Rest\Client($accountSid, $authToken);
// Get form data
$name = $_POST[‘name’];
$email = $_POST[‘email’];
$message = $_POST[‘message’];
// Your Twilio phone number (must be purchased from Twilio)
$twilioPhoneNumber = ‘your_twilio_number’;
// Recipient’s phone number
$recipientPhoneNumber = ‘restaurant_phone_number’; // Include the
country code
// Compose the SMS message
$smsMessage = “New contact form submission:\n\nName:
$name\nEmail: $email\nMessage: $message”;
// Send the SMS
$twilio->messages->create(
 $recipientPhoneNumber,
 [
 ‘from’ => $twilioPhoneNumber,
 ‘body’ => $smsMessage,
 ]
);
}
?>