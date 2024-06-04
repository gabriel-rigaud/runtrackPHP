<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonjour Function</title>
</head>
<body>

<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec true
bonjour(true);
echo "<br>";

// Appel de la fonction avec false
bonjour(false);
?>

</body>
</html>
