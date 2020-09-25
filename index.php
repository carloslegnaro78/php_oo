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

echo $tv->name;
