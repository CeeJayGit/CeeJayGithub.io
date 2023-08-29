<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can save the data to a database or send it via email, etc.
    // For example, to send an email:
    mail("your@email.com", "New Form Submission", "Name: $name\nEmail: $email\nMessage: $message");
    
    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.html");
    exit;
}
?>
