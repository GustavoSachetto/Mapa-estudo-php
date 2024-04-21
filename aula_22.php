<?php 

/* ======== MÉTODOS MÁGICOS (CLASSES) ======= */

// ((( GET, SET, TOSTRING, CONSTRUCT, INVOKE )))

/** 
 * Métodos mágicos são métodos especiais que sobrescrevem o comportamento padrão de uma classe
*/

class Notes 
{
    private int $id;
    private array $dates;
    private string $text;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __invoke()
    {
        return $this;
    }

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }

    public function __get($name): mixed
    {
        return $this->$name;
    }
}

// Chamando o método mágico construct
$notes = new Notes(1);

// Chamando o método mágico set
$notes->text = 'Texto baseado em um simples teste';
$notes->dates = ['2023-08-31', '12:40:10'];

// Chamando o método mágico get
var_dump($notes->id);

// Chamando o método mágico invoke
var_dump($notes());

/* ========================================== */

?>