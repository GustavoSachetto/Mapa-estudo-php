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

class File 
{
    private string $content;
    private string $autor;

    public function __construct(string $content, string $autor) 
    {
        $this->content = $content;
        $this->autor = $autor;
    }

    public function getContent(): array
    {
        return [
            'content' => $this->content,
            'autor'   => $this->autor
        ];
    }
}

class Drawer 
{
    private string $section;
    private array $files;

    public function __construct(string $section) {
        $this->section = $section;
    }

    public function setFile(string $content, string $autor): void
    {
        $this->files[] = new File($content, $autor);
    }

    public function getFile(int $position): File
    {
        return $this->files[$position];
    }
}

$drawer = new Drawer('SECTION C2');

$drawer->setFile('Meu primeiro arquivo desta gaveta', 'Gustavo Sachetto');
$drawer->setFile('Meu segundo arquivo desta gaveta', 'Gustavo Sachetto');

var_dump($drawer->getFile(1)->getContent());

/* ========================================== */

?>