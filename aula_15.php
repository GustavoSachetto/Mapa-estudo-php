<?php

include 'variables.php';

/* ============ HERANÇA (CLASSES) =========== */

// ((( HERANÇA )))

/**
 * A herança serve como extensor uma classe. Com a herança é possivel acessar 
 * atributos e métodos da classe pai através da classe filha.
 */

// classe pai
class Vehicle {
    public $numberOfWheels = 4;

    public function getNumberOfWheels()
    {
        return $this->numberOfWheels;
    }

    public function setNumberOfWheels($number = 4)
    {
        if (!is_numeric($number)) {
            throw new Exception("Erro a quantidade de rodas deve ser númerica.", 200);
        }

        $this->numberOfWheels = $number;
    }
}

// classe filha
class Car extends Vehicle {
    private $name;

    public function __construct($name, $numberWheels = 4)
    {
        $this->numberOfWheels = $numberWheels;
        $this->name = $name;
    }

    public function getCar()
    {
        return [
            'car_name' => $this->name,
            'number_of_wheels' => $this->numberOfWheels
        ];
    }
}

$obCar = new Car('Prisma');
$result = $obCar->getCar();

var_dump($result);

// classe filha
class Motorcycle extends Vehicle {
    private $name;

    public function __construct($name, $numberWheels = 2)
    {
        $this->numberOfWheels = $numberWheels;
        $this->name = $name;
    }

    public function getMotorcycle()
    {
        return [
            'car_name' => $this->name,
            'number_of_wheels' => $this->numberOfWheels
        ];
    }
}

$obMotorcycle = new Motorcycle('Kymco cv3',3);
$result = $obMotorcycle->getMotorcycle();

var_dump($result);

/* ========================================== */

/* ==== MODIFICADOR DE ACESSO (CLASSES) ===== */

// ((( PUBLIC )))

/**
 * Com o modificador de acesso public é possível acessar quaquer atributo ou método de uma classe,
 * independente do local em que for requisitado.
 */

class Dad {
    public $name = 'Eduardo';
}

$result = (new Dad())->name;

var_dump($result);

// ((( PROTECTED )))

/**
 * Com o modificador de acesso protected é possivel acessar um atributo ou método de uma classe pai ou filha.
 * Mas não é possivel acessa-lo diretamente.
 */

class Mom {
    protected $momName = 'Fernanda';

    public function getName()
    {
        return $this->momName;
    }
}

$result = (new Mom())->getName();

var_dump($result);

// ((( PRIVATE )))

/**
 * Com o modificador de acesso private só é possivel acessar um atributo dentro da classe em que ele foi gerado.
 * Sendo que será necessario funções publicas intermediarias para acessa-lo.
 */

class Son extends Mom {
    private $name = 'Gustavo';

    public function getName()
    {
        return $this->name;
    }

    public function getMomName() {
        return $this->momName;
    }
}

$result = (new Son())->getName();

var_dump($result);

// acessando o protected
$result = (new Son())->getMomName();

var_dump($result);

/* ========================================== */

?>