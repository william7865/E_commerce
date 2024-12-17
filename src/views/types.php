<?php
require_once __DIR__ . '/../models/Type.php';
require_once __DIR__ . '/../models/Product.php';

use App\Models\Type;
use App\Models\Product;

if (isset($_GET['id'])) {
    $typeId = (int) $_GET['id'];
    $typeModel = new Type();
    $productModel = new Product();
    $type = $typeModel->find($typeId);

    if (!$type) {
        echo "Type de produit introuvable.";
        exit;
    }
    $products = $productModel->findByType($typeId);
} else {
    echo "Aucun type de produit spécifié.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits du type - <?= $type->getName() ?></title>
    <link rel="stylesheet" href="../css/brands.css">
</head>
<body>
    <h1>Produits du type - <?= $type->getName() ?></h1>
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
        <p>Aucun produit disponible pour ce type.</p>
    <?php endif; ?>
</body>
</html>
