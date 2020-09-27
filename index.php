<?php

class ContaPfis
{
    var $number;
    var $name;
    var $cpf;

    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber() : String
    {
        return $this->number;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }
   
    public function getName() : String
    {
        return $this->name;
    }

    public function setCPF(String $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getData() : String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CPF: {$this->cpf}";
    }

}

class ContaPJUR
{
    var $number;
    var $name;
    var $cnpj;


    public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber() : string
    {
        return $this->number;
    }

    public function setName(String $name)
    {
        $this->name =$name;
    }

    public function getName() : String
    {
        return $this->name;
    }

    public function setCNPJ(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ() : String
    {
        return $this->cnpj;
    }

    public function getData() : String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CNPJ: {$this->cnpj}";
    }

}

$carlos = new ContaPfis;
$carlos->setNumber('123456');
$carlos->setName('Carlos Legnaro');
$carlos->setCPF('27314671922');
echo $carlos->getData();

echo '<hr>';

$egestao = new ContaPJUR;
$egestao->setName('e-gestao');
$egestao->setNumber('1234567');
$egestao->setCNPJ('5332235678');
echo $egestao->getData();

