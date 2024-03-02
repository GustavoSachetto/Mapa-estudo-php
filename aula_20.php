<?php

include 'variables.php';

/* ===== CONSTRUCT E DESTRUCT (CLASSES) ===== */

// ((( CONSTRUCT )))

/**
 * O construtor serve para implementar um método padrão obrigatório 
 * na criação de toda classe.
 */

class Student {
    private static $students = [];

    public function __construct($name) {
        self::$students[] = $name;
    }

    public function getStudents() {
        return self::$students;
    }
}

// instânciando o método construtor
$student1 = New Student('Gustavo');

$student2 = New Student('João');
$student3 = New Student('Jorge');
$student4 = New Student('Paulo');
$student5 = New Student('André');

var_dump($student4->getStudents());

// ((( DESTRUCT )))

/**
 * O destruct assim como o construct também serve para implementar um método obrigatório
 * só que na "destruição" de uma classe.
 */

class Historic {
    public static $number = 0;

    public function __construct()
    {
        self::$number++;
    }

    public function __destruct()
    {
        self::$number--;
    }
}

$historic1 = New Historic();
$historic2 = New Historic();
$historic3 = New Historic();

// apaga a variável na memória
unset($historic2);

$historic1 = New Historic();

var_dump($historic3::$number);

/* ========================================== */

?>