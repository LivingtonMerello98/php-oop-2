
<?php

class Product
{
    private string $title;
    private int $price;
    private string $image;
    private Category $category;

    //costruttore
    public function __construct($_image, $_title, $_price, Category $_category)
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
        echo 'category: ' . $this->category . ' ';
    }
}


class Category
{
    protected $name;
    protected $icon;
}


//debug
$product1 = new Product('product_image', 'Product 1', 10, new Category('Category 1', 'product_image'));
echo $product1->printProduct();
