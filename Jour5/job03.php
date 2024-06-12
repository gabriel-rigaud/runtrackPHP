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

    // Préparation de la requête SQL
    $sql = 'SELECT * FROM etudiant';
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête
    $stmt->execute();

    // Récupération des résultats
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    // Affichage des noms des colonnes
    foreach ($etudiants[0] as $key => $value) {
        echo "<th>$key</th>";
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Affichage des données
    foreach ($etudiants as $etudiant) {
        echo '<tr>';
        foreach ($etudiant as $value) {
            echo "<td>$value</td>";
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
