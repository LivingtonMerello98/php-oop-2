
<?php

class Product
{
    private string $title;
    private int $price;
    private string $image;
    private Category $category;

    //costruttore
    public function __construct($_image, string $_title, string $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }

    //funzione per stampare
    public function printProduct()
    {
        echo 'image: ' . $this->image . ' ';
        echo 'title: ' . $this->title . ' ';
        echo 'price: ' . $this->price . ' ';

        //l'istanza deve acceder alla funzione get per ricevere le info
        echo 'category: ' . $this->category->getName() . ' ';
        echo 'category: ' . $this->category->getIcon() . ' ';
    }
}

//le string per le category potrebbero essere icone fontawesome = string
class Category
{
    protected $name;
    protected $icon;

    function __construct(string $_name, string $icon)
    {
        $this->name = $_name;
        $this->icon = $icon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}

//definizione della caegoria food
//questa classe eredita tutti gli attributi e metodi dalla classe Product
class Food extends Product
{
    //origine del prodotto
    private $origin;

    public function __construct($_image, $_title, $_price, $_category, $_origin)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->origin = $_origin;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function printProduct()
    {
        parent::printProduct();
        echo 'origing: ' . $this->origin . ' ';
    }
}

//definizione della caegoria toy
class Toy extends Product
{
    //range di età
    private $ageRange;

    public function __construct($_image, $_title, $_price, $_category, $ageRange)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->ageRange = $ageRange;
    }

    public function getAgeRange()
    {
        return $this->ageRange;
    }

    public function printProduct()
    {
        parent::printProduct();
        echo 'age range: ' . $this->ageRange . ' ';
    }
}
//definizione della caegoria bed

//debug
$product1 = new Product('product_image', 'Product 1', 10, new Category('Category 1', 'product_image'));
echo $product1->printProduct() . "<br>";
$product2 = new Product('product_image', 'Product 1', 10, new Category('Category 1', 'product_image'));
echo $product1->printProduct() . "<br>";
$product3 = new Product('product_image', 'Product 1', 10, new Category('Category 1', 'product_image'));
echo $product1->printProduct() . "<br>";

var_dump($product1);
