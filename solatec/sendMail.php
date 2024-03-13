<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$service = $_POST['service'];

// Construct email content
$mailContent = "Name: $name\n";
$mailContent .= "Email: $email\n";
$mailContent .= "Phone Number: $phoneNumber\n";
$mailContent .= "Address: $address\n";
$mailContent .= "Service: $service\n";

// Email configuration (replace with your SMTP server details)
$to = 'varmasivangi949@gmail.com';
$subject = 'New Contact Form Submission';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send email
$mailSuccess = mail($to, $subject, $mailContent, $headers);

// Send JSON response to the client-side
if ($mailSuccess) {
    echo json_encode(['message' => 'Email sent successfully']);
} else {
    echo json_encode(['message' => 'Failed to send email']);
}
?>
