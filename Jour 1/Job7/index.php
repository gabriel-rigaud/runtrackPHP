<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
</head>
<body>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo "$i<br>";
    }
}
?>

</body>
</html>
