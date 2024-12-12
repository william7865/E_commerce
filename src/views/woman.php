<?php
require_once __DIR__ . '/../models/Product.php';

use App\Models\Product;
$productModel = new Product();

// ID de la catégorie "Femme"
$idCategory = 2;
$products = $productModel->findByCategory($idCategory);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits Femme</title>
    <link rel="stylesheet" href="../css/man.css">
</head>
<body>
    <h1>Collection Femme</h1>
    <?php if (!empty($products)): ?>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <a href="details?id=<?= $product->getId() ?>">
                            <img src="<?= $product->getPicture() ?>" alt="<?= $product->getName() ?>">
                        </a>
                    </div>
                    <div class="product-info">
                        <h2>
                            <a href="details?id=<?= $product->getId() ?>">
                                <?= $product->getName() ?>
                            </a>
                        </h2>
                        <p class="product-price"><?= $product->getPrice() ?> €</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucun produit disponible pour cette catégorie.</p>
    <?php endif; ?>
</body>
</html>
