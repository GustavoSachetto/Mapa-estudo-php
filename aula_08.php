<?php

include 'variables.php';

/* ========== ORDENAÇÃO DE ARRAYS =========== */

// ((( SORT )))

/**
 * A função sort organiza os valores do array em ordem crescente.
 * Exemplo: [
 *   [0] => 3,
 *   [1] => 4,
 *   [2] => 1,
 *   [3] => 2,
 * ]
 * Resultado: [
 *   [0] => 1,
 *   [1] => 2,
 *   [2] => 3,
 *   [3] => 4,
 * ]
 */


$result = $nums;

sort($result);

var_dump($result);

// ((( ASORT )))

/**
 * A função asort organiza os valores do array em ordem crescente, porém mantém as chaves.
 * Exemplo: [
 *   [0] => 3,
 *   [1] => 4,
 *   [2] => 1,
 *   [3] => 2,
 * ]
 * Resultado: [
 *   [2] => 1,
 *   [3] => 2,
 *   [0] => 3,
 *   [1] => 4,
 * ]
 */

$result = $nums;

asort($result);

var_dump($result);

// ((( RSORT )))

/**
 * A função rsort organiza os valores do array em ordem decrescente.
 * Exemplo: [
 *   [0] => 3,
 *   [1] => 4,
 *   [2] => 1,
 *   [3] => 2,
 * ]
 * Resultado: [
 *   [0] => 4,
 *   [1] => 3,
 *   [2] => 2,
 *   [3] => 1,
 * ]
 */


$result = $nums;

rsort($result);
 
var_dump($result);

// ((( ARSORT )))

/**
 * A função arsort organiza os valores do array em ordem decrescente, porém mantém as chaves.
 * Exemplo: [
 *   [0] => 3,
 *   [1] => 4,
 *   [2] => 1,
 *   [3] => 2,
 * ]
 * Resultado: [
 *   [1] => 4,
 *   [0] => 3,
 *   [3] => 2,
 *   [2] => 1,
 * ]
 */

$result = $nums;

arsort($result);
 
var_dump($result);

// ((( KSORT )))

/**
 * A função ksort organiza as chaves do array em ordem crescente, porém mantém os valores.
 * Exemplo: [
 *   [d] => 3,
 *   [c] => 4,
 *   [a] => 1,
 *   [b] => 2
 * ]
 * Resultado: [
 *   [a] => 1,
 *   [b] => 2,
 *   [c] => 4,
 *   [d] => 3
 * ]
 */

$result = $array;

ksort($result);
  
var_dump($result);

// ((( KRSORT )))

/**
 * A função ksort organiza as chaves do array em ordem decrescente, porém mantém os valores.
 * Exemplo: [
 *   [d] => 3,
 *   [c] => 4,
 *   [a] => 1,
 *   [b] => 2
 * ]
 * Resultado: [
 *   [d] => 3,
 *   [c] => 4,
 *   [b] => 2,
 *   [a] => 1
 * ]
 */

$result = $array;

krsort($result);
  
var_dump($result);

// ((( USORT )))

/**
 * A função usort deixa com que a gente organize os valores de forma personalizada.
 */

$result = $maps;

usort($result, function($a, $b) {
    if ($a['saldo'] == $b['saldo']) return 0;
    return $a['saldo'] < $b['saldo'] ? 1 : -1;
});
   
var_dump($result);

// ((( UASORT )))

/**
 * A função uasort deixa com que a gente organize os valores de forma personalizada, porém não altera as chaves. 
 */

$result = $maps;

usort($result, function($a, $b) {
    if ($a['saldo'] == $b['saldo']) return 0;
    return $a['saldo'] < $b['saldo'] ? 1 : -1;
});
    
var_dump($result);

// ((( SHUFFLE )))

/**
 * O shuffle bagunça as posições dos valores aleatoriamente. 
 */

$result = $nums;

shuffle($result);

var_dump($result);

// ((( NATSORT )))

/**
 * O natsort é utilizado para reconhecer a ordenação padrão de numeros em formato de string.
 */

$result = $versions;

natsort($result);

var_dump($result);
 
/* ========================================== */

?>