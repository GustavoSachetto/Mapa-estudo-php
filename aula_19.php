<?php

include 'variables.php';

/* ========== INTERFACES (CLASSES) ========== */

// ((( INTERFACE )))

/**
 * O interface serve para gerar um modelo de classe, onde as classes que forem 
 * implementadas devem seguir obrigatóriamente os métodos do interface.
 */

interface Crud 
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class News implements Crud 
{
    public function create()
    {
        echo 'cadastrar';
    }

    public function read()
    {
        echo 'selecionar';
    }

    public function update()
    {
        echo 'atualizar';
    }

    public function delete()
    {
        echo 'deletar';
    }
}

$news = New News();

var_dump($news->create());

// ((( TRAIT )))

/**
 * A trait serve para criar atributos e métodos na qual será possivel implementa-los
 */

trait UserAccess
{
    private $user_access = "root9345";

    public function getUserAccess()
    {
        return $this->user_access;
    }
}

class User
{
    use UserAccess;

    public function getUser()
    {
        return $this->getUserAccess();
    }
}

/* ========================================== */

?>