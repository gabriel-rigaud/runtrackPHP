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

    // Requête SQL pour sélectionner le nom des salles et le nom de leur étage
    $sql = 'SELECT salle.nom AS nom_salle, etage.nom AS nom_etage 
            FROM salle 
            INNER JOIN etage ON salle.id_etage = etage.id';
    $stmt = $pdo->query($sql);

    // Récupération des résultats
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats dans un tableau HTML
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nom de la Salle</th>';
    echo '<th>Nom de l\'Étage</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Affichage des données
    foreach ($resultats as $resultat) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($resultat['nom_salle']) . '</td>';
        echo '<td>' . htmlspecialchars($resultat['nom_etage']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    echo 'Erreur : ' . $e->getMessage();
}
?>
