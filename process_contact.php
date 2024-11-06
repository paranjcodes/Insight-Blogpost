<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error_log.txt');
include 'db_connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'E:\xampp\htdocs\insight\PHPMailer\Exception.php';
require 'E:\xampp\htdocs\insight\PHPMailer\PHPMailer.php';
require 'E:\xampp\htdocs\insight\PHPMailer\SMTP.php';

// Include the database connection file

// Get form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insert data into the 'contacts' table
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
    // Send confirmation email
    $mail = new PHPMailer;

    try{

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreplyinsightt@gmail.com';             // SMTP username
    $mail->Password = 'pepa sqmx ukgn zoio';                    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('noreplyinsightt@gmail.com', 'Your Name');
    $mail->addAddress($email);                            // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = "Thank you, $name, for reaching out to us. We will get back to you soon.";

    $mail->send();
        
    // Display success message in a popup box
    echo "<script>alert('Message sent successfully.'); window.location.href='contact.html';</script>";

  } catch (Exception $e) {
    // Display error message in a popup box
    echo "<script>alert('Failed to send confirmation email. Error: {$mail->ErrorInfo}'); window.location.href='contact.html';</script>";
}
} else {
// Display SQL error in a popup box
echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href='contact.html';</script>";
}


// Close the connection
$conn->close();
?>
