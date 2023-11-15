<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Générer un lien_PHP</title>
</head>

<?php  


function fun($url,$texte)
{
return "<a href='$url'>$texte</a>";
}
echo fun("https://www.reddit.com/","Reddit Hug");

?>

</body>
</html>