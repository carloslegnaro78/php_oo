<?php

class Product
{
    var $name;
    var $description;
    var $price;

    function get()
    {
        return "{$this->name} # {$this->description} # {$this->price} <hr>";
    }

}

$tv = new Product;
$tv-> name = 'TV';
$tv->description = 'Smart TV';
$tv->price = 4.500;

echo $tv->get();  

$geladeira = new Product;
$geladeira->name = 'Geladeira';
$geladeira->description = 'Degelo automático';
$geladeira->price = 2.900;

echo $geladeira->get();


