<?php


require_once 'Category.php';

// Definizione della classe Product
class Product
{
    private string $title;
    private int $price;
    private string $image;
    private Category $category;

    public function __construct(string $_image, string $_title, int $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function printProduct()
    {
        echo 'image: ' . $this->image . '<br>';
        echo 'title: ' . $this->title . '<br>';
        echo 'price: ' . $this->price . '€' . '<br>';
        echo 'category: ' . $this->category->getName() . '<br>';
        echo 'icon: ' . $this->category->getIcon() . '<br>';
    }
}

// Definizione delle classi derivate (Food, Toy, Bed)

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
