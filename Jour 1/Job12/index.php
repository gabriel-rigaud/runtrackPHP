<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator Function</title>
</head>
<body>

<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur invalide";
    }
}

// Test de la fonction avec différents paramètres
echo "5 + 3 = " . calcule(5, '+', 3) . "<br>";
echo "10 - 4 = " . calcule(10, '-', 4) . "<br>";
echo "6 * 2 = " . calcule(6, '*', 2) . "<br>";
echo "15 / 3 = " . calcule(15, '/', 3) . "<br>";
echo "8 % 3 = " . calcule(8, '%', 3) . "<br>";
?>

</body>
</html>
