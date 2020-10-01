<?php

class Escola
{
    const PID = 'FAFADE';
    static $saldo = 0.0; 
}

class Aluno
{
    public $name;
    private $saldo = 0.0;

    public function addSaldo(float $saldo)
    {
        $this->saldo  = $saldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function novaCompra(float $valor)
    {
        $this->saldo = $this->saldo - $valor;
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }
}

echo '<hr>';
$aluno01 = new Aluno;
$aluno01->name = 'Carlos';
echo $aluno01->getSaldo();
echo '<br>';
$aluno01->addSaldo(50.0);
echo $aluno01->getSaldo();

$response = $aluno01->novaCompra(100);
if (!$response){
    echo ' Saldo insuficiênte';
}
echo '<br>';
echo $aluno01->getSaldo();
echo '<hr>';

$aluno02  = new Aluno;
$aluno02->name = 'Outro Aluno';
echo $aluno02->getSaldo();
echo '<br>';
$aluno02->getSaldo();
$aluno02->addSaldo(100);
echo $aluno02->getSaldo();
