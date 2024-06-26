
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


//debug
$product1 = new Product('product_image', 'Product 1', 10, new Category('Category 1', 'product_image'));
echo $product1->printProduct();

var_dump($product1);
