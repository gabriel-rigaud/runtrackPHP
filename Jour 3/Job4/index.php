<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Produits</title>
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
<h2>Liste de Produits</h2>

<?php
// Inclure le fichier contenant les fonctions
include 'fonctions.php';

// Liste des produits
$products = [
    ['name' => 'Lait', 'price' => 2, 'quantity' => 2],
    ['name' => 'Eau', 'price' => 1.90, 'quantity' => 5],
    ['name' => 'Café', 'price' => 5, 'quantity' => 1],
    ['name' => 'Orange', 'price' => 8, 'quantity' => 3],
];

// Appliquer les réductions sur les produits
applyDiscount($products);

// Afficher les produits
displayProducts($products);
?>
</body>
</html>
