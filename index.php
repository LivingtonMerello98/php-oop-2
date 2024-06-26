<?php

require_once 'Product.php';

//creazione array 
$productCategory = array(
    'food' => array(
        new Food('food_image.jpg', 'Croccantini per Cani', 15, new Category('Cani', 'dog_icon'), 'Italy'),
        new Food('food_image2.jpg', 'Pasticcini per Gatti', 10, new Category('Gatti', 'cat_icon'), 'France')
    ),
    'toy' => array(
        new Bed('bed_image.jpg', 'Cuccia Morbida per Cani', 50, new Category('Cani', 'dog_icon'), 'Grande'),
        new Bed('bed_image2.jpg', 'Lettiera per Gatti', 30, new Category('Gatti', 'cat_icon'), 'Media')
    ),
    'bed' => array(
        new Bed('bed_image.jpg', 'Cuccia Morbida per Cani', 50, new Category('Cani', 'dog_icon'), 'Grande'),
        new Bed('bed_image2.jpg', 'Lettiera per Gatti', 30, new Category('Gatti', 'cat_icon'), 'Media')
    ),
);






// $foodProduct = new Food('food_image.jpg', 'Croccantini per Cani', 15, new Category('Cani', 'dog_icon'), 'Italy');
// $foodProduct->printProduct();
// echo '<br>';

// $toyProduct = new Toy('toy_image.jpg', 'Palla da Gioco per Gatti', 8, new Category('Gatti', 'cat_icon'), '0-5 anni');
// $toyProduct->printProduct();
// echo '<br>';

// $bedProduct = new Bed('bed_image.jpg', 'Cuccia Morbida per Cani', 50, new Category('Cani', 'dog_icon'), 'Grande');
// $bedProduct->printProduct();
// echo '<br>';