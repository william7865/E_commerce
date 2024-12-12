<?php
namespace App\Models;
use App\Utils\Database;
use PDO;

class Product extends CoreModel
{
    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $brand_id;
    private $category_id;
    private $type_id;

    public function findAll()
    {
        $sql = "SELECT * FROM product";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    public function findByCategory($id_category)
    {
        $sql = "SELECT * FROM product WHERE category_id = $id_category";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    public function findByType($id_type)
    {
        $sql = "SELECT * FROM product WHERE type_id = $id_type";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    public function findByBrand($id_brand)
    {
        $sql = "SELECT * FROM product WHERE brand_id = $id_brand";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM product WHERE id = " . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $product = $pdoStatement->fetchObject(Product::class);
        return $product;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getBrand_id()
    {
        return $this->brand_id;
    }

    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function getCategory_id()
    {
        return $this->category_id;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    public function getType_id()
    {
        return $this->type_id;
    }

    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }
}
