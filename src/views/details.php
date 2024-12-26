<?php
require_once __DIR__ . '/../models/Product.php';

use App\Models\Product;

if (isset($_GET['id'])) {
    $productId = (int) $_GET['id'];
    $productModel = new Product();
    $product = $productModel->find($productId);

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
    <div class="product-container">
        <div class="product-gallery">
            <div class="product-main-image">
                <img src="<?= $product->getPicture() ?>" alt="<?= $product->getName() ?>">
            </div>
        </div>
        <div class="product-info">
            <h1><?= $product->getName() ?></h1>
            <p class="product-price"><?=$product->getPrice()?> €</p>
            <p class="product-description"><?= $product->getDescription() ?></p>
            <div class="product-size">
                <label for="size">Taille :</label>
                <select id="size" name="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
            <a href ="panier" class="add-to-cart">AJOUTER AU PANIER</a>
            <div class="product-shipping">
                <p>Livraison offerte pour les commandes éligibles.</p>
                <a href="#">Consulter notre politique de livraison et de retours</a>
            </div>
        </div>
    </div>
</body>
</html>
