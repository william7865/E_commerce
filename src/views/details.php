<?php
require_once __DIR__ . '/../models/Product.php';

use App\Models\Product;

// Vérifier si l'ID du produit est passé en paramètre
if (isset($_GET['id'])) {
    $productId = (int) $_GET['id'];

    $productModel = new Product();
    $product = $productModel->find($productId); // Récupérer le produit par son ID

    if (!$product) {
        echo "Produit introuvable.";
        exit;
    }
} else {
    echo "Aucun produit spécifié.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit - <?= $product->getName() ?></title>
    <link rel="stylesheet" href="../css/details.css">
</head>
<body>
    <h1>Détails du produit</h1>
    <div class="product-detail">
        <div class="product-image">
            <img src="<?= $product->getPicture() ?>" alt="<?= $product->getName() ?>">
        </div>
        <div class="product-info">
            <h2><?= $product->getName() ?></h2>
            <p><strong>Description :</strong> <?= $product->getDescription() ?></p>
            <p><strong>Prix :</strong> <?= $product->getPrice() ?> €</p>
            <p><strong>Note :</strong> <?= $product->getRate() ?> / 5</p>

            <!-- Sélection de la taille -->
            <label for="size">Choisir la taille :</label>
            <select id="size" name="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

            <!-- Bouton Ajouter au panier -->
            <button class="add-to-cart">Ajouter au panier</button>
        </div>
    </div>
</body>
</html>
