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
    $sql = 'SELECT nom, capacite FROM salle';
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête
    $stmt->execute();

    // Récupération des résultats
    $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    // Affichage des noms des colonnes
    echo '<th>Nom</th>';
    echo '<th>Capacité</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Affichage des données
    foreach ($salles as $salle) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($salle['nom']) . '</td>';
        echo '<td>' . htmlspecialchars($salle['capacite']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
