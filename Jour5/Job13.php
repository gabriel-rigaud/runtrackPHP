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

    // Requête SQL pour calculer la capacité moyenne des salles
    $sql = 'SELECT AVG(capacite) AS capacite_moyenne FROM salle';
    $stmt = $pdo->query($sql);

    // Récupération du résultat
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Capacité Moyenne</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>' . $resultat['capacite_moyenne'] . '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
