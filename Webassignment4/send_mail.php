<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $subject = trim($_POST['subject'] ?? '');
    $messageBody = trim($_POST['message'] ?? '');
    $userEmail = trim($_POST['from'] ?? '');
    $to = trim($_POST['To'] ?? '');

    // Validate basic fields
    if (empty($subject) || empty($messageBody) || empty($userEmail) || empty($to)) {
        $_SESSION['message'] = "All fields are required.";
        header("Location: form.php");
        exit();
    }

    // A valid email address for "From"
    $from = "noreply@yourdomain.com"; // <-- Replace with a valid sender email

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $userEmail\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $messageBody, $headers)) {
        $_SESSION['message'] = "Thank you! Your message has been sent to: $to";
    } else {
        $_SESSION['message'] = "Sorry, something went wrong. Please try again.";
    }
} else {
    $_SESSION['message'] = "Invalid request.";
}

header("Location: form.php");
exit();
?>
