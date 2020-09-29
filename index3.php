<?php

class Pessoa
{

    //public, protected, private

    private $name;
    
    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName() : String
    {
        return $this->name;
    }

}

$carlos = new Pessoa;
$carlos->setName('Carlos');
echo $carlos->getName();