<?php
require_once 'category.php';
// Product.php
class Product
{
    private string $title;
    private int $price;
    private string $image;
    private Category $category;

    // Costruttore
    public function __construct(string $_image, string $_title, int $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }

    // Metodo per ottenere l'immagine
    public function getImage(): string
    {
        return $this->image;
    }

    // Metodo per ottenere il titolo
    public function getTitle(): string
    {
        return $this->title;
    }

    // Metodo per ottenere il prezzo
    public function getPrice(): int
    {
        return $this->price;
    }

    // Metodo per ottenere la categoria
    public function getCategory(): Category
    {
        return $this->category;
    }


    public function printProduct()
    {
    }
}


class Food extends Product
{
    private string $origin;

    public function __construct(string $_image, string $_title, int $_price, Category $_category, string $_origin)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->origin = $_origin;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function printProduct()
    {
        parent::printProduct();
        echo 'origin: ' . $this->origin . '<br>';
    }
}


class Toy extends Product
{
    private string $ageRange;

    public function __construct(string $_image, string $_title, int $_price, Category $_category, string $_ageRange)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->ageRange = $_ageRange;
    }

    public function getAgeRange(): string
    {
        return $this->ageRange;
    }

    public function printProduct()
    {
        parent::printProduct();
        echo 'age range: ' . $this->ageRange . '<br>';
    }
}

class Bed extends Product
{
    private string $size;

    public function __construct(string $_image, string $_title, int $_price, Category $_category, string $_size)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->size = $_size;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function printProduct()
    {
        parent::printProduct();
        echo 'size: ' . $this->size . '<br>';
    }
}
