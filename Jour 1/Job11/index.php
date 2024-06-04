<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Hello Function</title>
</head>
<body>

<?php
function getHello() {
    return "Hello LaPlateforme!";
}

// Appel de la fonction et récupération de sa valeur de retour
$message = getHello();
echo $message;
?>

</body>
</html>
