<?php

class Product
{
    private string $title;
    private int $price;
    private string $image;
    private Category $category;

    //costruttore
    public function __construct(string $_image, string $_title, int $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }

    //funzione per stampare
    public function printProduct()
    {
        echo 'image: ' . $this->image . '<br>';
        echo 'title: ' . $this->title . '<br>';
        echo 'price: ' . $this->price . '€' . '<br>';

        //l'istanza deve acceder alla funzione get per ricevere le info
        echo 'category: ' . $this->category->getName() . '<br>';
        echo 'icon: ' . $this->category->getIcon() . '<br>';
    }
}

//le string per le category potrebbero essere icone fontawesome = string
class Category
{
    protected string $name;
    protected string $icon;

    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}

//definizione della caegoria food
//questa classe eredita tutti gli attributi e metodi dalla classe Product
class Food extends Product
{
    //origine del prodotto
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


$foodProduct = new Food('food_image.jpg', 'Croccantini per Cani', 15, new Category('Cani', 'dog_icon'), 'Italy');
$foodProduct->printProduct();
echo '<br>';

$toyProduct = new Toy('toy_image.jpg', 'Palla da Gioco per Gatti', 8, new Category('Gatti', 'cat_icon'), '0-5 anni');
$toyProduct->printProduct();
echo '<br>';

$bedProduct = new Bed('bed_image.jpg', 'Cuccia Morbida per Cani', 50, new Category('Cani', 'dog_icon'), 'Grande');
$bedProduct->printProduct();
echo '<br>';

// Debug: Visualizzazione dettagliata dell'oggetto $foodProduct
var_dump($foodProduct);
