<?php

// On va imaginer qu'il y a un dossier App puis un dossier controller dedans et on va ranger cette classe (CatalogController) dedans
namespace App\Controllers; // Maintenant jai rangé CatalogController dans le dossier imaginaire App\Controllers

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;


class CatalogController extends CoreController
{
    /**
     * Affiche la page Catégories
     */
    public function category($params)
    {
        // je vais récupérer tous les produit qui ont pour id_category, l'id de la category courante
        // dump($params);
        // ci dessous je stock dans $id_category la valeur de l'id de la categorie
        $id_category = $params['id'];

        $categoryModel = new Category;
        $category = $categoryModel->find($id_category);

        // Je veux récupérer les produits qui ont pour category_id l'id de la category (ici $id_category)
        // Pour ce faire, je vais d'abord devoir créer une instance de la classe Product
        $productModel = new Product();
        // Maintenant je peux executer la méthode findByCategory()
        $products = $productModel->findByCategory($id_category);
        // Donc $products c'est TOUS les produits qui ont pour category_id => $id_category

        $this->show('category', [
            'categoryId' => $params['id'],
            'category' => $category,
            'products' => $products // tous les produits en fonctiond ela catégorie
        ]);
    }

    /**
     * Show list of products attached to a type
     *
     * @param [type] $params => valeurs dynamique passées à l'url (id)
     */
    public function type($params)
    {
        $id_type = $params['id'];

        $typeModel = new Type();
        $type = $typeModel->find($id_type);
        $productModel = new Product();

        $products = $productModel->findByType($id_type);

        $this->show('type', [
            'typeId' => $params['id'],
            'type' => $type,
            'products' => $products
        ]);
    }

    /**
     * Show list of products attached to a brand
     *
     * @param [type] $params => valeurs dynamique passées à l'url (id)
     */
    public function brand($params)
    {
        $id_brand = $params['id'];

        // Je créer un objet Brand pour afficher le nom de la marque
        $brandModel = new Brand();
        $brand = $brandModel->find($id_brand);

        $productModel = new Product();

        $products = $productModel->findByBrand($id_brand);
        dump($products);

        $this->show('brand', [
            'brandId' => $params['id'],
            'brand' => $brand,
            'products' => $products
        ]);
    }

    /**
     * Show detail of a product by his id
     *
     * @param [type] $params => valeurs dynamique passées à l'url (id), on les envoie dans index.php et on les intercepte ici
     */
    public function product($params)
    {
        // On va récupérer la liste de tous nos produits
        // On va se servir de notre model Product
        $productModel = new Product();
        // On stock dans $product le produit que je veux afficher en fonction de son id
        $product = $productModel->find($params['id']);
        // find() prend un parametre id, et fait une requete SQL qui va chercher une élément en fonction de son id
        dump($product);

        // 1er param => la vue qu'on veut afficher
        // 2eme param => les données qu'on veut envoyer a la vue
        $this->show('product', [
            'productId' => $params['id'],
            'product' => $product
        ]);
    }
}