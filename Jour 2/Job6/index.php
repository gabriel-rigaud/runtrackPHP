<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Type GET</title>
</head>
<body>
<h2>Formulaire de Type GET</h2>

<form action="" method="get">
    <label for="nombre">Nombre :</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <input type="submit" value="Valider">
</form>

<?php
// Vérification si le formulaire a été soumis
if (isset($_GET["nombre"])) {
    // Récupération de la valeur du champ "nombre"
    $nombre = $_GET["nombre"];

    // Vérification si c'est un nombre pair ou impair
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    } else {
        echo "<p>Entrée invalide. Veuillez saisir un nombre.</p>";
    }
}
?>
</body>
</html>
