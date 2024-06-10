<?php
session_start();

// Initialiser la grille de jeu
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
}

// Gérer les clics des joueurs
if (isset($_POST['cell'])) {
    $index = intval($_POST['cell']);
    if ($_SESSION['grid'][$index] == '-') {
        $_SESSION['grid'][$index] = $_SESSION['turn'];
        $_SESSION['turn'] = $_SESSION['turn'] == 'X' ? 'O' : 'X';
    }
}

// Vérifier si un joueur a gagné
function checkWinner($grid) {
    $winning_combinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];

    foreach ($winning_combinations as $combo) {
        if ($grid[$combo[0]] != '-' && $grid[$combo[0]] == $grid[$combo[1]] && $grid[$combo[1]] == $grid[$combo[2]]) {
            return $grid[$combo[0]];
        }
    }
    return null;
}

$winner = checkWinner($_SESSION['grid']);
$draw = !in_array('-', $_SESSION['grid']) && $winner == null;

if ($winner || $draw) {
    if ($winner) {
        echo "<p>$winner a gagné !</p>";
    } else {
        echo "<p>Match nul !</p>";
    }
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 60px; height: 60px; text-align: center; vertical-align: middle; }
        form { display: inline; }
        button { width: 100%; height: 100%; font-size: 24px; }
    </style>
</head>
<body>
<h2>Jeu du Morpion</h2>
<table border="1">
    <?php for ($i = 0; $i < 3; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 3; $j++): ?>
                <td>
                    <form method="post" action="">
                        <button type="submit" name="cell" value="<?php echo $i * 3 + $j; ?>"><?php echo $_SESSION['grid'][$i * 3 + $j]; ?></button>
                    </form>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<form method="post" action="">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>
</body>
</html>
