<?php 
// 15
require_once "data/Product.php";

$product = new Product("Macbook Pro", 19500000);

// echo $product->name; //error, karena property name di set private

echo $product->get_name() .PHP_EOL;
echo $product->get_price() .PHP_EOL;


$produk1 = new ProductDummy("Laptop Dell", 7000000);
$produk1->info();
