<?php

require_once 'Product.php';

//creazione array 
$productCategory = array(
    'food' => array(
        new Food('', 'Croccantini per Cani', 15, new Category('Cani', 'dog_icon'), 'Italy'),
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


// Funzione per stampare i prodotti per una data categoria
function printProductsByCategory(array $products, string $categoryName)
{
    echo '<h2>' . ucfirst($categoryName) . '</h2>';
    foreach ($products as $product) {
        echo '<div>';
        $product->printProduct();
        echo '</div><br>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Products by Category</title>

</head>

<body>
    <div class="container">
        <?php
        foreach ($productCategory as $categoryName => $products) {
            printProductsByCategory($products, $categoryName);
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>