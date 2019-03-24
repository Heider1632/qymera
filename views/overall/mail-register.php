<?php

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = PHPMAILER_HOST;                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = PHPMAILER_USER;                     // SMTP username
    $mail->Password = PHPMAILER_PASS;                     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port =PHPMAILER_POST;                          // TCP port to connect to

    //Recipients
    $mail->setFrom(PHPMAILER_USER, APP_TITLE);

    $mail->addAddress($email, $nombre . $apellido);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Activacion de tu cuenta';
    $mail->Body    = Emailtemaplate($nombre, $apellido, $link);
    $mail->AltBody = 'Hola' . $nombre.','.$apellido. 'Para activar tu cuenta accede al siguiente enlace: ' .$link;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>