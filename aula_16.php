<?php

include 'functions.php';

/* ========== ABSTRAÇÃO (CLASSES) =========== */

// ((( ABSTRACT )))

/**
 * A abstração de classes serve para gerar um modelo onde outras classes devem seguir o mesmo padrão.
 * Quando uma classe é abstraída ela se torna incapaz de ser diretamente instanciada.
 * 
 * A abstração de métodos também serve como molde, só que obrigando a classe filha ter 
 * método de mesmo nome e padrao da classe pai.
 */

abstract class Bank {
    protected $balance;
    protected $limitWithdraw = 10;
    protected $interestRate = 10;

    public function setBalance($newBalance)
    {
        return is_numeric($newBalance) ? $this->balance = $newBalance : false;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    abstract protected function withDraw($amount);
    abstract protected function deposit($amount);
}

class Itau extends Bank {    
    public function __construct(private $identify,$initBalance = 0) {
        if (is_numeric($identify) and $identify > 0) {
            return $this->setBalance($initBalance);
        } else return false;
    }

    public function withDraw($amount)
    {
        $this->balance -= $amount + percentageCalculation($amount, $this->interestRate);
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }
}

$objectItau = new Itau(1,400);

var_dump($objectItau->getBalance());

// saque de 200
$objectItau->withDraw(200);

var_dump($objectItau->getBalance());

// deposito de 100
$objectItau->deposit(100);

var_dump($objectItau->getBalance());

/* ========================================== */

?>