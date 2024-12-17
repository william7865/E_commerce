<?php
require_once __DIR__ . '/../models/Brand.php';
require_once __DIR__ . '/../models/Product.php';

use App\Models\Brand;
use App\Models\Product;

if (isset($_GET['id'])) {
    $brandId = (int) $_GET['id'];
    $brandModel = new Brand();
    $productModel = new Product();
    $brand = $brandModel->find($brandId);

    if (!$brand) {
        echo "Marque introuvable.";
        exit;
    }
    $products = $productModel->findByBrand($brandId);
} else {
    echo "Aucune marque spécifiée.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits de la marque - <?= $brand->getName() ?></title>
    <link rel="stylesheet" href="../css/brands.css">
</head>
<body>
    <h1>Produits de la marque - <?= $brand->getName() ?></h1>
    <?php if (!empty($products)): ?>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <a href="details?id=<?= $product->getId() ?>">
                        <img src="<?= $product->getPicture() ?>" alt="<?= $product->getName() ?>" class="product-image">
                        <h3><?= $product->getName() ?></h3>
                        <p><?= $product->getPrice() ?> €</p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Aucun produit disponible pour cette marque.</p>
    <?php endif; ?>
</body>
</html>
