<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Numbers</title>
    <style>
        .special-number {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<span class='special-number'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}
?>

</body>
</html>
