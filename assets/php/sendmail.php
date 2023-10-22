<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $company = $_POST["company"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set recipient email address
  $to = "hamzahbdeveloper@gmail.com"; // Replace with your Gmail address

  // Subject and email message
  $subject = "New message from $company";
  $email_message = "From: $company\nEmail: $email\n\n$message";

  // Additional headers
  $headers = "From: $email";

  // Send email
  $mailSent = mail($to, $subject, $email_message, $headers);

  if ($mailSent) {
    echo "Message sent successfully!";
  } else {
    echo "Error: Message not sent.";
  }
} else {
  echo "Invalid request method.";
}
?>
