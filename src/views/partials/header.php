<?php
require_once __DIR__ . '/../../models/Brand.php';
require_once __DIR__ . '/../../models/Type.php';

use App\Models\Brand;
use App\Models\Type;

$brandModel = new Brand();
$brands = $brandModel->findAll();
$typeModel = new Type();
$types = $typeModel->findAll();
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
                        <li><a href="brands?id=<?= $brand->getId() ?>"><?= $brand->getName() ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Type de Produit <span class="arrow-down"></span></a>
                <ul class="dropdown-menu">
                    <?php foreach ($types as $type): ?>
                        <li><a href="types?id=<?= $type->getId() ?>"><?= $type->getName() ?></a></li>
                    <?php endforeach; ?>
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
