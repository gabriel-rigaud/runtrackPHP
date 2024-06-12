<?php
// Configuration des paramètres de connexion à la base de données
$host = 'localhost';
$dbname = 'jour6';
$username = 'root';
$password = '';

try {
    // Connexion à la base de données en utilisant PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête SQL pour récupérer le nombre total d'étudiants
    $sql = 'SELECT COUNT(*) AS nb_etudiants FROM etudiant';
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête
    $stmt->execute();

    // Récupération du résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    // Affichage du nom de la colonne
    echo '<th>nb_etudiants</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Affichage du nombre total d'étudiants
    echo '<tr>';
    echo '<td>' . htmlspecialchars($result['nb_etudiants']) . '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
