<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Numbers with Styles</title>
    <style>
        .italic {
            font-style: italic;
        }
        .underline {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<span class='italic'>$i</span><br>";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<span class='underline'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}
?>

</body>
</html>
