<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oui</title>
</head>
<body>

    <?php
    session_start();

    
    echo" Vous êtes connecté ".$_SESSION['p'];
    if($_SESSION["ok"]!=="okk");
    header("Login-form.php");
    exit();
    ?>
    
</body>
</html>