<?php
session_start();

// Initialisation du compteur de visites
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

// Incrémenter le compteur de visites
$_SESSION['nbVisites']++;

// Réinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter le re-posting du formulaire
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
<h2>Compteur de Visites</h2>
<p>Nombre de visites : <?php echo $_SESSION['nbVisites']; ?></p>

<form method="post" action="">
    <button type="submit" name="reset">Reset</button>
</form>
</body>
</html>
