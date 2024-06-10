<?php
// Durée de vie du cookie (1 jour)
$cookie_duration = 24 * 60 * 60;

// Vérifier si le formulaire de connexion est soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); // Sécuriser l'entrée utilisateur
    setcookie('prenom', $prenom, time() + $cookie_duration); // Créer le cookie
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter le re-posting du formulaire
    exit;
}

// Vérifier si le formulaire de déconnexion est soumis
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Expirer le cookie
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter le re-posting du formulaire
    exit;
}

// Vérifier si le cookie "prenom" existe
$prenom = isset($_COOKIE['prenom']) ? htmlspecialchars($_COOKIE['prenom']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
<?php if ($prenom): ?>
    <h2>Bonjour <?php echo $prenom; ?> !</h2>
    <form method="post" action="">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php else: ?>
    <h2>Connexion</h2>
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br>
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php endif; ?>
</body>
</html>
