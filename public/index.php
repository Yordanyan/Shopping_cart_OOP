<?php

require_once ('../vendor/autoload.php');

$product1 = new \App\Product(1,'iphone',2000,10);
$product2 = new \App\Product(2,'banana',200,10);

$cart  = new \App\Cart();

$cart->addProduct($product1,1);
$cart->addProduct($product2,10);


echo $cart->getTotalQuantity();
echo PHP_EOL;
echo $cart->getTotalSum();
