<?php 

/* ========== RELAÇÃO ENTRE CLASSES ========= */

// ((( ASSOCIAÇÃO )))

/**
 * A associação entre classes é uma variavel na qual será guardada uma classe dentro da outra.
 */

class Customer 
{
    private int $age;
    private string $name;

    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}

class Request 
{
    public int $number;
    public Customer $customer;

    public function __construct(int $number, Customer $customer)
    {
        $this->number = $number;
        $this->customer = $customer;
    }

    public function getRequest(): array
    {
        return [
            'numero' => $this->number,
            'nome_cliente' => $this->customer->getName(),
            'idade_cliente' => $this->customer->getAge()
        ];
    }
}

$request = new Request(10, (new Customer(17, 'Gustavo Sachetto')));

var_dump($request->getRequest());

// ((( AGREGAÇÃO )))

/**
 * Agregação nada mais é do que a junção de muitas classes em apenas uma.
 */

/* ========================================== */
