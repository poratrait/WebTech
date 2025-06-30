<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h2>Send Email</h2>

    <?php
    session_start();
    $message = $_SESSION['message'] ?? '';
    unset($_SESSION['message']);
    ?>

    <?php if ($message): ?>
        <p style="color: green; font-weight: bold;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <form action="send_mail.php" method="post">
        <label for="from">Your Email:</label><br>
        <input type="email" name="from" required><br><br>

        <label for="To">Enter Recipient Email:</label><br>
        <input type="email" name="To" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" cols="50" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>
</body>
</html>
