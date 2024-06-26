<?php
require_once 'Product.php';

$productCategory = array(
    'food' => array(
        'croccantini_cani' => new Food('https://www.petsplanet.it/714-large_default/green-for-dog-crocchette-per-tutti-i-cani-12-kg.jpg', 'Croccantini per Cani', 15, new Category('Cani', 'dog_icon'), 'Italy'),
        'pasticcini_per_gatti' => new Food('https://www.ladetergenza.com/public/img/GATTO2SNACATBSA.jpg', 'Pasticcini per Gatti', 10, new Category('Gatti', 'cat_icon'), 'France'),
        'pedigree_cani' => new Food('https://static.zoomalia.com/prod_img/31535/xl_6346766aa2750c19aad2fa1b32f36ed4aee1648119331.jpg', 'Pedigree per Cani', 10, new Category('Cani', 'dog_icon'), 'France')
    ),
    'toy' => array(
        'Palla_da_Gioco_per_Gatti' => new Toy('https://m.media-amazon.com/images/I/71uKibKidBL.jpg', 'Palla da Gioco per Gatti', 8, new Category('Gatti', 'cat_icon'), '0-5 anni'),
        'Osso_per_Cani' => new Toy('https://m.media-amazon.com/images/I/613-9Ag-TfL.jpg', 'Osso per Cani', 12, new Category('Cani', 'dog_icon'), '0-3 anni'),
        'Topolino_di_peluche' => new Toy('https://media.zooplus.com/bilder/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', 'Topolino di peluche', 12, new Category('Gatti', 'dog_icon'), '0-3 anni')
    ),
    'bed' => array(
        'Cuccia_Morbida_per_Cani' => new Bed('https://m.media-amazon.com/images/I/51qkFK6j+HL._AC_SY355_.jpg', 'Cuccia Morbida per Cani', 50, new Category('Cani', 'dog_icon'), 'Grande'),
        'Lettiera_per_Gatti' => new Bed('https://m.media-amazon.com/images/I/71cQvfPNEBL._AC_UF894,1000_QL80_.jpg', 'Lettiera per Gatti', 30, new Category('Gatti', 'cat_icon'), 'Media'),
        'Cuccia_per_cani_esterno' => new Bed('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdvlbJ1QHP7356G2Bm5lrbYMJyniR_6aGjdg&s', 'Cuccia per cani esterno', 30, new Category('Gatti', 'cat_icon'), 'Media')
    ),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimaliShop - Prodotti per animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="bg-primary py-3 mb-4">
        <div class="container">
            <h1 class="text-white">AnimaliShop</h1>
        </div>
    </header>


    <div class="container py-5">
        <?php foreach ($productCategory as $categoryName => $products) : ?>
            <div class="">
                <h2 class="py-4"><?= ucfirst($categoryName) ?></h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($products as $productName => $product) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= $product->getImage() ?>" class="card-img-top" alt="<?= $product->getTitle() ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getTitle() ?></h5>
                                <p class="card-text">Prezzo: <?= $product->getPrice() ?>€</p>
                                <p class="card-text">Categoria: <?= $product->getCategory()->getName() ?></p>
                                <p class="card-text"><small class="text-muted">Icona:
                                        <img src="<?= $product->getCategory()->getIcon() ?>" class="category-icon" alt="<?= $product->getCategory()->getName() ?>"></small></p>
                                <a href="#" class="btn btn-acquista">Acquista</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>


    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 AnimaliShop. Tutti i diritti riservati.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>