<?php
require_once __DIR__ . '/../../models/Brand.php';

use App\Models\Brand;

// Récupération des marques
$brandModel = new Brand();
$brands = $brandModel->findAll();
?>

<header class="header">
    <link rel="stylesheet" href="../../css/header.css">
    <div class="logo">
        <h1><a href="./">KELEN <span>PARIS</span></a></h1>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="woman">Femme</a></li>
            <li><a href="man">Homme</a></li>
            <li class="dropdown">
                <a href="#">Marques <span class="arrow-down"></span></a>
                <ul class="dropdown-menu">
                    <?php foreach ($brands as $brand): ?>
                        <li><a href="products.php?brand_id=<?= $brand->getId() ?>"><?= $brand->getName() ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Type de Produit <span class="arrow-down"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">T-Shirts</a></li>
                    <li><a href="#">Pantalons</a></li>
                    <li><a href="#">Chaussures</a></li>
                </ul>
            </li>
            <li><input type="text" placeholder="Rechercher"></li>
            <li><button><img src="../assets/images/loupe.png"></button></li>
        </ul>
    </nav>
    <div class="header-icons">
        <a href="connexion"><img src="../assets/images/user.png" alt="Profil"></a>
        <a href="panier"><img src="../assets/images/cart.png" alt="Panier"></a>
    </div>
</header>
