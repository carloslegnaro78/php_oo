<?php

class Conta 
{
    var $number;
    var $name;

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
        return $this->name = $name;
    }

    public function getName() : String
    {
        return $this->name;
    }

}

class ContaPfis extends Conta
{
    var $cpf;

    public function setCPF(String $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getData() : String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CPF: {$this->cpf}";
    }

}

class ContaPJUR extends Conta
{
    var $cnpj;  

    public function setCNPJ(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ() : String
    {
        return $this->cnpj;
    }

    public function setName(String $name)
    {
        return $this->name =  strtoupper($name);
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
