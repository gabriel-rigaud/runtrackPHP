<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arguments $_GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>Arguments $_GET et leurs valeurs associées</h2>

<table>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
    <?php
    // Vérification si $_GET est défini et n'est pas vide
    if (isset($_GET) && !empty($_GET)) {
        // Parcours de chaque élément de $_GET
        foreach ($_GET as $key => $value) {
            // Affichage de la clé et de sa valeur dans une ligne du tableau
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    } else {
        // Affichage d'un message si $_GET est vide
        echo "<tr><td colspan='2'>Aucun argument trouvé dans \$_GET.</td></tr>";
    }
    ?>
</table>
</body>
</html>
