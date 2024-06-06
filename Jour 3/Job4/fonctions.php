<?php
// Fonction pour appliquer la réduction en fonction du prix
function applyDiscount(&$products) {
    foreach ($products as &$product) {
        if ($product['price'] > 100) {
            $product['price'] *= 0.90; // Appliquer une réduction de 10%
        }
    }
}

// Fonction pour afficher les produits dans un tableau HTML
function displayProducts($products) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>{$product['name']}</td>";
        echo "<td>" . number_format($product['price'], 2) . " €</td>";
        echo "<td>{$product['quantity']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
