<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre d'arguments $_POST</title>
</head>
<body>
<h2>Nombre d'arguments $_POST</h2>

<?php
// Vérification si $_POST est défini et n'est pas vide
if (isset($_POST) && !empty($_POST)) {
    // Compter le nombre d'éléments dans $_POST
    $count = count($_POST);
    echo "<p>Nombre d'arguments dans \$_POST : $count</p>";
} else {
    // Affichage d'un message si $_POST est vide
    echo "<p>Aucun argument trouvé dans \$_POST.</p>";
}
?>

</body>
</html>
