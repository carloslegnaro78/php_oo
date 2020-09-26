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

    function setName(String $name)
    {
        $this->name = $name;
    }

    function getName(): String
    {
        return strtolower($this->name);
    }

}

$tv = new Product;
$tv-> setName('TV');
$tv->description = 'Smart TV';
$tv->price = 4.500;
echo $tv->getName();
echo $tv->get();  

$geladeira = new Product;
$geladeira-> setName('Geladeira');
$geladeira->description = 'Degelo automático';
$geladeira->price = 2.900;

echo $geladeira->get();


