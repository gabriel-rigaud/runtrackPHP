<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Déclaration des variables de types primitifs
$intVar = 10;              // Integer
$floatVar = 3.14;          // Float
$stringVar = "Hello!";     // String
$boolVar = true;           // Boolean
$nullVar = null;           // Null

// Tableau des variables avec leurs types, noms et valeurs
$variables = [
    ['type' => gettype($intVar), 'name' => '$intVar', 'value' => $intVar],
    ['type' => gettype($floatVar), 'name' => '$floatVar', 'value' => $floatVar],
    ['type' => gettype($stringVar), 'name' => '$stringVar', 'value' => $stringVar],
    ['type' => gettype($boolVar), 'name' => '$boolVar', 'value' => $boolVar ? 'true' : 'false'],
    ['type' => gettype($nullVar), 'name' => '$nullVar', 'value' => 'null'],
];
?>

<table>
    <thead>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($variables as $variable): ?>
        <tr>
            <td><?php echo htmlspecialchars($variable['type']); ?></td>
            <td><?php echo htmlspecialchars($variable['name']); ?></td>
            <td><?php echo htmlspecialchars($variable['value']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
