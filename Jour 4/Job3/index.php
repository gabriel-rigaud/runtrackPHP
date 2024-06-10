<?php
session_start();

// Initialiser la variable de session pour stocker les prénoms si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter le prénom à la variable de session si le formulaire est soumis
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); // Sécuriser l'entrée utilisateur
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Prénoms</title>
</head>
<body>
<h2>Ajouter un Prénom</h2>

<form method="post" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <button type="submit">Ajouter</button>
</form>

<h2>Liste des Prénoms</h2>
<ul>
    <?php
    if (!empty($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
    } else {
        echo "<li>Aucun prénom ajouté.</li>";
    }
    ?>
</ul>

<form method="post" action="">
    <button type="submit" name="reset">Reset</button>
</form>
</body>
</html>
