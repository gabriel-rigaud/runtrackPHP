<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformations de chaîne</title>
    <style>
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h2>Transformations de chaîne</h2>
<form action="" method="post">
    <label for="str">Chaîne de caractères :</label>
    <input type="text" id="str" name="str" required>
    <br>
    <label for="transformation">Choix de transformation :</label>
    <select name="transformation" id="transformation">
        <option value="gras">Gras (majuscules)</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <br>
    <input type="submit" value="Valider">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $transformation = $_POST["transformation"];

    switch ($transformation) {
        case 'gras':
            echo "<p style='font-weight: bold;'>" . ucwords($str) . "</p>";
            break;
        case 'cesar':
            function césar($str, $shift = 2) {
                $result = "";
                $length = strlen($str);
                for ($i = 0; $i < $length; $i++) {
                    $char = $str[$i];
                    if (ctype_alpha($char)) {
                        $ascii = ord($char);
                        $offset = ($ascii <= 90) ? 65 : 97;
                        $result .= chr(($ascii - $offset + $shift) % 26 + $offset);
                    } else {
                        $result .= $char;
                    }
                }
                return $result;
            }
            echo "<p>" . césar($str) . "</p>";
            break;
        case 'plateforme':
            function plateforme($str) {
                $words = explode(" ", $str);
                foreach ($words as &$word) {
                    if (substr($word, -2) === "me") {
                        $word .= "_";
                    }
                }
                echo "<p>" . implode(" ", $words) . "</p>";
            }
            plateforme($str);
            break;
        default:
            echo "Sélectionnez une transformation.";
            break;
    }
}
?>

</body>
</html>
