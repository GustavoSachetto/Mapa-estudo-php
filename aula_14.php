<?php

/* ====== CLASSES, ATRIBUTOS E MÉTODOS =======*/

// ((( CLASS )))

/**
 * A class é um modelo de objeto onde consiste em atributos e métodos.
 */

class Person {
    public $name = 'Gustavo';
}

// instanciar classe
$result = new Person();

var_dump($result);

// ((( ATRIBUTOS E MÉTODOS )))

/**
 * Os atributos são propriedades de uma classe. Já os métodos suas funções.
 */

class Sistem {
    // atributo
    private $version = '1.4v';
    
    // método
    public function getVersion() {
        return $this->version;
    }
}

$obSistem = new Sistem();

// acessar atributos e métodos.
$result = $obSistem->getVersion();

var_dump($result);

// ((( GET/SET )))

/**
 * Quando você tem um atributo privado, ele não pode ser acessado diretamente fora da classe.
 * Para isso trabalhamos com funções publicas onde elas são responsaveis por setar e acessar esses atributos.
 * Funções essas chamadas de Getters e Setters.
 */

class User {
    private $access = false;

    public function getAccess() {
        return $this->access;
    }

    public function setAccess($newAccess) {
        is_bool($newAccess) ? $this->access = $newAccess : $this->access = false;
    }
}

$objectUser = new User();

$objectUser->setAccess(true);
$result = $objectUser->getAccess();

var_dump($result);

// ((( CONSTRUTOR )))

/**
 * O construtor serve como padronizador de uma classe, toda vez que ela for iniciada deverá passar pela função construtora.
 */

class Study {
    private $status = false;

    public function __construct($newStatus)
    {
        is_bool($newStatus) ? $this->status = $newStatus : $this->status = false;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

$objectStudy = new Study(true);

$result = $objectStudy->getStatus();

var_dump($result);


/* ========================================== */

?>