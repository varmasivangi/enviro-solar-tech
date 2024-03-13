<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["contact-name"];
    $email = $_POST["contact-email"];
    $phone = $_POST["contact-phone"];
    $address = $_POST["contact-address"];
    $selectedService = $_POST["selected-service"];

    // Create email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Address: $address\n";
    $message .= "Selected Service: $selectedService\n";
    

    // Set recipient email address
    $to = "r.skanda1101@gmail.com"; // Replace with the actual recipient's email address

    // Set subject
    $subject = "New Form Submission";
    

    // Send email
    $success = mail($to, $subject, $message);

    if ($success) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request method.";
}
?>
