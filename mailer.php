<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Mailer PHP</title>
</head>

<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host ='localhost';
$mail->SMTPAuth=false;
$mail->Port =8025;
$mail->setFrom('from@thedistrict.com','The district company'); 

$mail->addAddress('client1@example.com', "Mr Client01");
$mail->addAddress("client2@example.com");  

$mail->addReplyTo("reply@thedistrict.com", "Reply"); 

$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com"); 

$mail->isHTML(true); 

$mail->addAttachment('/path/to/file.pdf');


?>


</body>
</html>