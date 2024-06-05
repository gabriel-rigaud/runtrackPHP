<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre d'arguments $_GET</title>
</head>
<body>
<h2>Nombre d'arguments $_GET</h2>

<form action="" method="get">
    <label for="arg1">Argument 1 :</label>
    <input type="text" name="arg1" id="arg1">
    <br>
    <label for="arg2">Argument 2 :</label>
    <input type="text" name="arg2" id="arg2">
    <br>
    <input type="submit" value="Envoyer">
</form>

<?php
// Initialisation du compteur
$count = 0;

// Vérification de chaque clé de $_GET
foreach ($_GET as $key => $value) {
    // Si la clé est définie, incrémenter le compteur
    if (isset($key)) {
        $count++;
    }
}

// Affichage du nombre d'arguments $_GET
echo "<p>Nombre d'arguments dans \$_GET : $count</p>";
?>

</body>
</html>
