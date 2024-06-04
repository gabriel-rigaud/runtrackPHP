<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leet Speak Conversion</title>
</head>
<body>

<?php
function toLeetSpeak($str) {
    $leetTable = array(
        'A' => '4',
        'E' => '3',
        'I' => '1',
        'O' => '0',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'e' => '3',
        'i' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    );

    $leetStr = strtr($str, $leetTable);
    return $leetStr;
}

// Exemple d'utilisation de la fonction
$text = "Leet Speak Conversion";
echo "Texte original : $text <br>";
echo "Texte en Leet Speak : " . toLeetSpeak($text);
?>

</body>
</html>
