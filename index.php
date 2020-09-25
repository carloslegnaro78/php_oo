<?php

class Product
{
    var $name;
    var $description;
    var $price;
}

$tv = new Product;
$tv-> name = 'TV';
$tv->description = 'Smart TV';
$tv->price = 4.500;

echo $tv->name; echo ', ';
echo $tv->description; echo ', ';
echo $tv->price; 
echo '<hr>'; 

$geladeira = new Product;
$geladeira->name = 'Geladeira';
$geladeira->description = 'Degelo automático';
$geladeira->price = 2.900;

echo $geladeira->name; echo ', ';
echo $geladeira->description; echo ', ';
echo $geladeira->price;
echo '<hr>';

