<?php

include 'variables.php';
include 'functions.php';

/* =========== FUNÇÕES DE ARRAYS ============ */

// ((( COUNT )))

/**
 * O count trás o tamanho total do nosso array. 
 */

$result = count($nums);

var_dump($result);

// ((( RANGE )))

/**
 * Range cria um array de um dado até o outro, sendo possível adicionar etapas.
 * 
 * Exemplo: a, b, c, d, e, f
 * Exemplo: 0, 2, 4, 6, 8, 10
 */

$result = range('a','f');
$result = range(0, 10, 2);

var_dump($result);

// ((( ARRAY_MAP )))

/**
 * O array_map passa uma função e um array, onde cada item desse array pode ser utilizado nessa função.
 */

$result = array_map('toUpperName', $maps);

var_dump($result);

// ((( ARRAY_KEYS )))

/**
 * O array_keys mapeia todas as chaves do array associativo.
 * 
 * Exemplo: [
 *    'key' => 'value'
 * ]
 */

$result = array_keys($keys);

var_dump($result);

// ((( IN_ARRAY )))

/**
 * O in_array verifica se um valor existe dentro de um determinado array, sendo que o retorno é formato 
 * booleano.
 */

$result = in_array('value1',$keys);

var_dump($result);

// ((( ARRAY_KEY_EXISTS )))

/**
 * O array_key_exists retorna se uma chave existe em um determinado array.
 */

$result = array_key_exists('key1', $keys);

var_dump($result);
 

// ((( ARRAY_SEARCH )))

/**
 * O array_search retorna a posição do valor buscado, se o valor buscado não existir o retorno será false.
 */

$result = array_search(7, $nums);

var_dump($result);

// ((( ARRAY_KEY_FIRST | ARRAY_KEY_LAST )))

/**
 * Ambas funções são utilizadas para descobrir a chave do primeiro 
 * elemento do array e a ultima respectivamente.
 */

$result = array_key_first($keys);

var_dump($result);

$result = array_key_last($keys);

var_dump($result);

//  ((( ARRAY_FLIP )))

/**
 * O array_flip inverte as chaves do array com os valores.
 * 
 * Exemplo: 'key' => 'value'
 * Retorno: 'value' => 'key'
 */

$result = array_flip($keys);

var_dump($result);

// ((( IMPLODE )))

/**
 * O implode serve para juntar os valores de um array.
 * 
 * Exemplo: [
 *   'nome',
 *   'cep'
 * ]
 * Retorno: nomecep
 */

$result = implode(', ', $nums);

var_dump($result);

// ((( EXPLODE )))

/**
 * O expolode serve para separar os valores de uma variavel e transformar em um array.
 * 
 * Exemplo: nome,cep,estado
 * Retorno: [
 *   [0] => 'nome',
 *   [1] => 'cep',
 *   [3] => 'estado'
 * ]
 */

$result = explode(', ', $fruit);

var_dump($result);

/* ========================================== */

?>