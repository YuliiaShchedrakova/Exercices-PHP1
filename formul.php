<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formul_php</title>
</head>
<body>


<form action="post.php" method="post" enctype="multipart/form-data"><input type="file" name="fichier" ><input value="envoyer" type="submit">
</form>



<?php

var_dump($_FILES);
$n=$_POST['nom'];
echo "nom: ".$n;

?>
    
</body>
</html>