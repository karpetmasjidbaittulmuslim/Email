<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Set email tujuan
    $to = "aimamsholikhin@gmail.com";  
    $subject = "Contact Form Submission from $name";

    // Persiapkan isi email
    $email_content = "Name: $name\n";
    $email_content = "Email: $email\n\n";
    $email_content = "Message:\n$message\n";

    // Persiapkan header email
    $headers = "From: $name <$email>";

    // Kirim email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
