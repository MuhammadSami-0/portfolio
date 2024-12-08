<?php
// Retrieve JSON data from the request
$data = json_decode(file_get_contents("php://input"), true);

// Assign data to variables
$name = htmlspecialchars($data["name"]);
$email = htmlspecialchars($data["email"]);
$message = htmlspecialchars($data["message"]);

// Email recipient and subject
$to = "your-email@example.com";
$subject = "New Message from Portfolio Site";

// Format the email content
$emailContent = "Name: $name\n";
$emailContent .= "Email: $email\n";
$emailContent .= "Message:\n$message\n";

// Set headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $emailContent, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
