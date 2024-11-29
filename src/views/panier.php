<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - KELEN Paris</title>
    <link rel="stylesheet" href="../css/panier.css">
</head>
<body>
    <main class="page-panier">
        <h2>Votre Panier</h2>
        <div class="panier">
            <table class="tableau-panier">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Description</th>
                        <th>Quantité</th>
                        <th>Taille</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="../images/product.jpg" alt="Produit" class="panier-imgage">
                        </td>
                        <td>
                            Manteau haute qualité
                        </td>
                        <td>
                            <input type="number" value="1" class="quantite">
                        </td>
                        <td>
                            <select>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </td>
                        <td>
                            <span class="prix">99,00 €</span>
                        </td>
                        <td>
                            <button class="delete">✖</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="panier-final">
                <div class="totaux">
                    <p>Total: <span>99,00 €</span></p>
                </div>
                <button class="buy">PAYER</button>
            </div>
        </div>
    </main>
</body>
</html>
