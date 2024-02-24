<?php

/* ============ TIPOS PRIMITIVOS ============ */

// ((( STRING )))

/**
 * Esse tipo de dado representa caracteres.
 */

$result = 'Gustavo';

var_dump($result);

// ((( BOOLEAN )))

/**
 * Esse tipo de dado representa valores booleanos (sim) ou (nao).
 */

$result = true;

var_dump($result);

// ((( INTEGER )))

/**
 * Esse tipo de dado representa numeros inteiros
 */

$result = 17;

var_dump($result);

// ((( FLOAT )))

/**
 * Esse tipo de dado representa numeros de ponto flutuante.
 */

$result = 18.0;

var_dump($result);

// ((( NULL )))

/**
 * Esse tipo de dado representa valores nulos.
 */

$result = null;

var_dump($result);

// ((( ARRAY )))

/**
 * Esse tipo de dado representa vetores.
 */

$result = [1,2,3,4];

var_dump($result);

// ((( OBJECT )))

/**
 * Esse tipo de dado representa objetos compostos.
 */

class Result {
    public $idade = 17;
}

var_dump($result);

// ((( CALLABLE )))

/**
 * Esse tipo de dado representa uma função ou método de um objeto.
 */

$result = function ($teste = 1) {
    echo $teste;
};

var_dump($result);

// ((( RESOURCE )))

/**
 * Esse tipo de dado representa um recurso do php.
 */

$result = fopen('README.md', 'r');

var_dump($result);

/* ========================================== */

?>