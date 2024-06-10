<?php
// Définir le cookie de durée de vie en secondes (1 an)
$cookie_duration = 365 * 24 * 60 * 60;

// Vérifier si le cookie "nbVisites" existe
if (isset($_COOKIE['nbVisites'])) {
    // Incrémenter le compteur de visites
    $nbVisites = $_COOKIE['nbVisites'] + 1;
} else {
    // Initialiser le compteur de visites
    $nbVisites = 1;
}

// Mettre à jour le cookie "nbVisites"
setcookie('nbVisites', $nbVisites, time() + $cookie_duration);

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    setcookie('nbVisites', '', time() - 3600); // Expirer le cookie en le mettant à une date passée
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter le re-posting du formulaire
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites avec Cookie</title>
</head>
<body>
<h2>Compteur de Visites</h2>
<p>Nombre de visites : <?php echo $nbVisites; ?></p>

<form method="post" action="">
    <button type="submit" name="reset">Reset</button>
</form>
</body>
</html>
