<?php

class Escola
{
    const PID = 'FAFADE';
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
        } else {
            return 'Saldo insuficiênte';
        }
    }
}

$aluno01 = new Aluno;
$aluno01->name = 'Carlos';
echo $aluno01->getSaldo();
echo '<br>';
$aluno01->addSaldo(50.0);
echo $aluno01->getSaldo();
$aluno01->novaCompra(20);
echo '<br>';
echo $aluno01->getSaldo();
