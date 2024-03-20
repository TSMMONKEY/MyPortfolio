<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$serverName = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO( "mysql:host=$serverName;dbname=portfolio", $username, $password );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $firstName = $_POST[ 'firstName' ];
    $lastName = $_POST[ 'lastName' ];
    $email = $_POST[ 'email' ];
    $message = $_POST[ 'message' ];

    // m = Mailer PHP
    try {
        $mail = new PHPMailer();
        //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        //Enable verbose debug output
        $mail->isSMTP();
        //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';
        //Set the SMTP server to send through
        $mail->SMTPAuth   = true;
        //Enable SMTP authentication
        $mail->Username   = 'thabanimat24';
        //SMTP username
        $mail->Password   = 'sowg gnwc xobh qwqp';
        //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //Enable implicit TLS encryption
        $mail->Port       = 587;
        //TCP port to connect to use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        // $mail->setFrom( 'from@example.com', 'Mailer' );
        $mail->addAddress( $email, $lastName );
        //Add a recipient
        $mail->addAddress( $email, $lastName );
        //Name is optional
        $mail->addReplyTo( $email, $firstName );
        $mail->addCC( 'thabanimat3@gmail.com' );
        // $mail->addBCC( 'bcc@example.com' );

        //Attachments
        // $mail->addAttachment( '/var/tmp/file.tar.gz' );
        //Add attachments
        // $mail->addAttachment( '/tmp/image.jpg', 'new.jpg' );
        //Optional name

        //Content
        $mail->isHTML( true );
        //Set email format to HTML
        $mail->Subject = $lastName . 'contacted you from the portfolio';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            header('Location: ../thank-you');
        }
    } catch ( Exception $e ) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    //   Insert Data
    $sql = "INSERT INTO contact_info (firstName, lastName, email, message)
    VALUES ('$firstName', '$firstName', '$email', '$message')";

    if ( $conn->exec( $sql ) === TRUE ) {
        echo 'New record created successfully';
    }
} catch( PDOException $e ) {
    echo 'Connection failed: ' . $e->getMessage();
}