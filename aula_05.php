<?php

include 'variables.php';

/* ======== OPERADORES COMPARATIVOS ========= */

// ((( IGUAL )))

/**
 * Esse operador verifica se um valor é igual ao outro.
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name == 'Gustavo') {
    $result = true;
} 

echo $result;

// ((( MAIOR )))

/**
 * Esse operador verifica se um valor é maior que outro.
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($num1 > $num2) {
    $result = true;
} 

echo $result;

// ((( MENOR )))

/**
 * Esse operador verifica se um valor é menor que outro.
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($num1 < $num2) {
    $result = true;
} 

echo $result;

// ((( MAIOR OU IGUAL | MENOR OU IGUAL )))

/**
 * Esse operador verifica se um valor é maior ou igual, menor ou igual ao outro. 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($num1 >= 10) {
    $result = true;
} elseif ($num2 <= 5) {
    $result = true;
}

echo $result;

// ((( IDÊNTICO )))

/**
 * Esse operador verifica se um valor é igual e do mesmo tipo que o outro (exemplo: string). 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name === 'Gustavo') {
    $result = true;
} 

echo $result;

// ((( DIFERENÇA )))

/**
 * Esse operador verifica se um valor diferente do outro. 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name != 'Fernando') {
    $result = true;
}

if ($name <> 'Fernando') {
    $result = true;
}

echo $result;

// ((( NÃO IDÊNTICO )))

/**
 * Esse operador verifica se um valor e o tipo é diferente do outro. 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name !== 'Fernando') {
    $result = true;
}

echo $result;

/* ========================================== */

/* =========== OPERADORES LÓGICOS =========== */

// ((( NÃO )))

/**
 * Esse operador verifica se um valor não é correspondido.
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if (!$name == 'Gustavo') {
    $result = true;
} 

echo $result;

// ((( AND/E )))

/**
 * Esse operador verifica se um valor e o outro é correspondido. 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name == 'Gustavo' && $age == 17) {
    $result = true;
}

if ($name == 'Gustavo' and $age == 17) {
    $result = true;
}

echo $result;

// ((( OR/OU)))

/**
 * Esse operador verifica se um valor ou o outro é correspondido. 
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name == 'Marquinhos' || $name == 'Gustavo') {
    $result = true;
}

if ($name == 'Gustavo' or $age == 17) {
    $result = true;
}

echo $result;

// ((( XOR )))

/**
 * Esse operador verifica se um valor ou o outro é correspondido. Mas não os dois ao mesmo tempo.
 * Se o operador for atendido é retornado verdadeiro, assim executando a estrutura de condição se. 
 */

if ($name == 'Marquinhos' xor $name == 'Gustavo') {
    $result = true;
}

echo $result;

/* ========================================== */

?>