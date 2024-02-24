<?php

include 'variables.php';
include 'functions.php';

/* ========= MANIPULAÇÃO DE ARRAYS ========== */

// ((( ARRAY_UNIQUE )))

/**
 * O array_unique retorna apenas os dados não repetitivos no array.
 * Exemplo: [
 *   1,
 *   2,
 *   2,
 *   3
 * ]
 * Retorno: [
 *   1,
 *   2,
 *   3
 * ]
 */

$result = $duplicate;

$result = array_unique($result);

var_dump($result);

// ((( ARRAY_FILTER )))

/**
 * O array_filter ignora campos onde o valor é igual ou relacionado a falso.
 * Exemplo: [
 *   'teste' => 'Sim',
 *   'dois' => null,  
 *   'tres' => false,   
 *   'quatro' => 0   
 * ]
 * Retorno: [
 *  'teste' => 'Sim'
 * ]
 */

$result = $nullable;

$result = array_filter($result);

var_dump($result);

$result = $nullable;

// Esse é um filtro com função
$result = array_filter($result, function($value) {
    return !is_null($value);
});

var_dump($result);

// ((( ARRAY_DIFF )))

/**
 * O array_diff verifica a diferença entre dois arrays.
 */

$result = array_diff($arrayA, $arrayB);

var_dump($result);

$result = array_diff($arrayB, $arrayA);

var_dump($result);

// ((( ARRAY_INTERSECT )))

/**
 * O array_intersect verifica a semelhança entre dois arrays.
 */

$result = array_intersect($arrayA, $arrayB);

var_dump($result);

// ((( ARRAY_COLUMN )))

/**
 * O array_column serve para buscar dados especificos em arrays multdimencionais.
 */

$result = array_column($maps, 'nome');

var_dump($result);

// ((( ARRAY_COMBINE )))

/**
 * O array_combine serve para unir dois arrays de mesmo tamanho.
 * Exemplo: [
 *   'array_one_value' => 'array_two_value',
 *   'array_one_value' => 'array_two_value',
 *   'array_one_value' => 'array_two_value'
 * ]
 */

$result = array_combine($arrayA, $arrayB);

var_dump($result);

//  ((( ARRAY_MERGE )))

/**
 * O array_merge serve para mesclar dois arrays.
 * Exemplo1: [
 *   'a',
 *   'b'
 * ]
 * Exemplo2: [
 *   'c',
 *   'd',
 *   'e'
 * ]
 * Retorno: [
 *   'a',
 *   'b', 
 *   'c',
 *   'd',
 *   'e'
 * ]
 */

$result = array_merge($arrayA, $arrayB);

var_dump($result);

// ((( ARRAY_PAD )))

/**
 * O array_pad é utilizado para incluir posições onde não há dados inseridos no array.
 * Exemplo: [
 *   'açucar',
 *   'leite',
 *   'sal'
 * ]
 * Resultado: [
 *   'açucar',
 *   'leite',
 *   'sal',
 *   'nada',
 *   'nada',
 *   'nada',
 *   'nada'
 * ]
 */

$result = array_pad($nums, 10, 'nada');

var_dump($result);

// ((( ARRAY_SHIFT )))

/**
 * O array_shift é utilizado para retornar um valor em fila no array, após ser retornado o valor é removido do array.
 * Exemplo: [
 *   'a',
 *   'b',
 *   'c'
 * ]
 * Retorno: [
 *   'b',
 *   'c'
 * ]
 */

$result = array_shift($nums);

var_dump($nums);

// ((( ARRAY_UNSHIFT )))

/**
 * O array_unshift é utilizado para adicionar um valor no começo da fila do array.
 * Exemplo: [
 *   'a',
 *   'b',
 *   'c'
 * ]
 * Retorno: [
 *   'd',
 *   'f',
 *   'a',
 *   'b',
 *   'c'
 * ]
 */

$result = array_unshift($nums, 1000, 2000);

var_dump($result);

// ((( ARRAY_REDUCE )))

/**
 * O array_reduce serve para somar valores especificos em um array.
 */

$result = array_reduce($maps, 'sum');

var_dump($result);

// ((( ARRAY_SUM )))
/**
 * O array_sum soma todos os valores de um array simples.
 */

$result = array_sum($nums);

var_dump($result);

/* ========================================== */

?>