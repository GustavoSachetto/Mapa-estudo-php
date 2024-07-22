<?php 

/* ============= FILAS E PILHAS ============= */

// ((( FILAS )))

/**
 * As filas são utilizadas no processamento de dados e obedecem a 
 * ordem FIFO (First in, First Out), primeiro a chegar primeiro a sair.
 * 
 * Exemplo: Fila do banco na hora de ser atendido
 */

class Queue
{
    private array $itens = [];

    public function insert(string $item, string $priority): void
    {
        $this->itens[] = " [{$item} - {$priority}] ";
    }

    public function remove(): ?string
    {
        if (!empty($this->itens)) 
            return array_shift($this->itens);

        return null;
    }
}

$test = new Queue;
$test->insert('Deficiente', 'alto'); // primeiro a sair
$test->insert('Idoso', 'médio'); // segundo a sair
$test->insert('Jovem', 'baixo');
$test->insert('Motorista', 'alto');
$test->insert('Adulto', 'médio');
$test->insert('Gestante', 'alto');
$test->insert('Criança', 'baixo');

echo $test->remove();
echo $test->remove();
echo $test->remove();

echo "<br>";

// ((( PILHAS )))

/**
 * Assim como as filas as pilhas também são utilizadas no processamento de dados 
 * e obedecem a  ordem LIFO (Last in, First Out), ultimo a chegar primeiro a sair.
 * 
 * Exemplo: Pilha de pratos na hora de lavar a louça
 */

class Stack
{
    private array $itens = [];

    public function insert(string $item): void
    {
        $this->itens[] = " [{$item}] ";
    }

    public function remove(): ?string
    {
        if (!empty($this->itens)) 
            return array_pop($this->itens);

        return null;
    }
}

$test = new Stack;
$test->insert('Lavar carro'); // ultimo a sair
$test->insert('Lavar prato'); // penultimo a sair
$test->insert('Lavar casa');
$test->insert('Lavar rua');

echo $test->remove();
echo $test->remove();
echo $test->remove();
echo $test->remove();