<?php

// Autoloader for PHPMailer
function autoloadPHPMailer($className)
{
    $libsDir = __DIR__ . '/libs/';
    $classMap = [
        'PHPMailer\\PHPMailer\\PHPMailer' => 'PHPMailer.php',
        'PHPMailer\\PHPMailer\\Exception' => 'Exception.php',
        'PHPMailer\\PHPMailer\\SMTP' => 'SMTP.php',
    ];

    if (isset($classMap[$className])) {
        require_once $libsDir . $classMap[$className];
    }
}

spl_autoload_register('autoloadPHPMailer');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $messageContent = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Create the email content
    $message = "
        <h2>New Forum Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Email:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> $messageContent</p>
    ";

    // Send email using PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP server configuration
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '80b4f1001@smtp-brevo.com';
        $mail->Password = 'LkV7qCUrm0gKZBhy'; // Securely store your password in an environment variable
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Use a verified sender email address in the "From" field
        $mail->setFrom('botkarmadevi@gmail.com', 'KDG Enquiery Form');

        // Add the user's email as a "Reply-To" address
        if ($email) {
            $mail->addReplyTo($email, $name);
        }

        // Set the recipient email
        $mail->addAddress('info@karmadevigroup.in'); // Principal's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
<?php

// Autoloader for PHPMailer
function autoloadPHPMailer1($className)
{
    $libsDir = __DIR__ . '/libs/';
    $classMap = [
        'PHPMailer\\PHPMailer\\PHPMailer' => 'PHPMailer.php',
        'PHPMailer\\PHPMailer\\Exception' => 'Exception.php',
        'PHPMailer\\PHPMailer\\SMTP' => 'SMTP.php',
    ];

    if (isset($classMap[$className])) {
        require_once $libsDir . $classMap[$className];
    }
}

spl_autoload_register('autoloadPHPMailer');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
        // Prepare the thank-you message
        $thankYouSubject = "Thank You for Your Submission!";
        $thankYouMessage = "
            <h2>Dear $name,</h2>
            <p>Thank you for submitting your form. We have received your information and will get back to you soon.</p>
            <p>Best Regards,<br>k.D. Group Team</p>
        ";

        // Send thank-you email using PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // SMTP server configuration
            $mail->isSMTP();
            $mail->Host = 'smtp-relay.brevo.com';
            $mail->SMTPAuth = true;
            $mail->Username = '7fc513001@smtp-brevo.com';
            $mail->Password = 'TcsW5fk8DtbXLPgV'; // Securely store your password in an environment variable
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender and recipient settings
            $mail->setFrom('botkarmadevi@gmail.com', 'K.D. Enquiery Form');
            $mail->addAddress($email, $name); // Send to the form filler

            $mail->addReplyTo('info@karmadevigroup.in', 'KD GROUP');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = $thankYouSubject;
            $mail->Body = $thankYouMessage;

            $mail->send();
            echo 'Thank-you email has been sent.';
        } catch (PHPMailer\PHPMailer\Exception $e) {
            echo "Thank-you email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email address. Cannot send thank-you email.";
    }
}
?>












