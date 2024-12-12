<?php
require_once __DIR__ . '/../models/Category.php';
use App\Models\Category;

$categoryModel = new Category();
$categories = $categoryModel->findAll(); // Récupérer toutes les catégories

// Variables pour stocker les catégories "Homme" et "Femme"
$hommeCategory = null;
$femmeCategory = null;

// Filtrer les catégories
foreach ($categories as $category) {
    if ($category->getName() == 'Homme') {
        $hommeCategory = $category;
    } elseif ($category->getName() == 'Femme') {
        $femmeCategory = $category;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Accueil - KELEN Paris</title>
</head>
<body>
    <section class="hero">
        <div class="banner">
            <?php if ($hommeCategory): ?>
                <div class="banner-item">
                    <img src="../images/<?= $hommeCategory->getPicture() ?>" alt="Homme">
                    <a href="<?= $hommeCategory->getSlug() ?>" class="button">HOMME</a>
                </div>
            <?php endif; ?>
            
            <?php if ($femmeCategory): ?>
                <div class="banner-item">
                    <img src="../images/<?= $femmeCategory->getPicture() ?>" alt="Femme">
                    <a href="<?= $femmeCategory->getSlug() ?>" class="button">FEMME</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
