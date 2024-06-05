<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
<h2>Formulaire de Connexion</h2>

<form action="" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Se connecter">
</form>

<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs des champs
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérification des identifiants
    if ($username === "John" && $password === "Rambo") {
        echo "<p>Ce n'est pas ma guerre.</p>";
    } else {
        echo "<p>Votre pire cauchemar.</p>";
    }
}
?>
</body>
</html>
