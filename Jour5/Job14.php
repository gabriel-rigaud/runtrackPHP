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

    // Requête SQL pour sélectionner le prénom, le nom et la date de naissance des étudiants nés entre 1998 et 2018
    $sql = 'SELECT prenom, nom, naissance FROM etudiant WHERE YEAR(naissance) BETWEEN 1998 AND 2018';
    $stmt = $pdo->query($sql);

    // Récupération des résultats
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Prénom</th>';
    echo '<th>Nom</th>';
    echo '<th>Date de Naissance</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Affichage des données
    foreach ($etudiants as $etudiant) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($etudiant['prenom']) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant['nom']) . '</td>';
        echo '<td>' . htmlspecialchars($etudiant['naissance']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
