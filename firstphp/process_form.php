<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 // You can perform validation here
 if (empty($name) || empty($email) || empty($message))
{
 // Handle errors - one or more fields are empty
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
 // Handle errors - invalid email format
}
else
{
 // Data is valid; proceed to data processing
}
 // Process the data (e.g., send an email, save to a
database, etc.)
 // Redirect to a thank you page or display a success
message
 header("Location: thank_you.php");
 exit;
}
?>