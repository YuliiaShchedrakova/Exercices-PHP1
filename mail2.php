<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Mail 2 PHP</title>
</head>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail= new PHPMailer(true);

//désactivation de SMTP:
$mail->SMTPAuth =false;

//configuration du port SMTP:
$mail->port =1025;

// l'adresse du serveur SMTP:
$mail->Host ='127.0.0.1';

//destinataire: adresse + nom(falcutatif):
    $mail->addAddress('client1@gmail.com','mr prospect');
    $mail->addAddress('client2@gmail.com','mme prospect');

//expediteur: adresse mail + nom(falcutatif):
$mail->setFrom('entreprise.de.brouette@gmail.com','BrouetteLand');

//adresse mail pour renvoie le réponse du client:
$mail->addReplyTo("reponse@acheterUneBrouette.com","reponse"); 

//pour avoir un email en format HTML:
    $mail->isHTML(true);

// CC recois une copie du message (BCC reçois une copie invisible du message):
$mail->addCC('cc@copie.com');
$mail->addBCC('bcc@copieInvisible.com');

//sujet du mail:
$mail->Subject='Nouvelle offre sur le marché immobilier';

//message:
$mail->Body="Maison dans le région 80 - le prix vous surprendra !";

//ajout des pièces jointes:
$mail->addAttachment('image2.jpg');

//envoie le mail :
if($mail){
    try{
        $mail->send();
        echo 'Email envoyé ';}
        catch(Exception $ex){
            echo"L'erreur est suivante  : ", $mail->ErrorInfo;
        }
}

//protocole d'envoi de courrier):
// $mail->isSMTP(); -> ça n'a pas fonctionné ( code 111: connection refusée)

?>

</body>
</html>