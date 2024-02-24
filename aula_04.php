<?php

include 'variables.php';

/* ========= OPERADORES ARITMÉTICOS ========= */

// ((( IDENTIDADE )))

/**
 * Converte um número para positivo.
 */

$result = +$num1;

echo $result;

// ((( NEGAÇÃO )))

/**
 * Converte um número para negativo.
 */

$result = -$num1;

echo $result;

// ((( ADIÇÃO )))

/**
 * Soma um valor ao outro.
 */

$result = $num1 + $num2;

echo $result;

// ((( SUBTRAÇÃO )))

/**
 * Subtrai um valor ao outro.
 */

$result = $num1 - $num2;

echo $result;

// ((( DIVISÃO )))

/**
 * Divide um valor por outro.
 */

$result = $num1 / $num2;

echo $result;

// ((( MÓDULO )))

/**
 * Resto da divisão de um valor pelo outro.
 */

$result = $num1 % $num2;

echo $result;

// ((( MULTIPLICAÇÃO )))

/**
 * Multiplica um valor ao outro.
 */

$result = $num1 * $num2;

echo $result;

// ((( EXPONENCIAÇÃO )))

/**
 * Eleva um valor ao outro.
 */

$result = $num1 ** $num2;

echo $result;

// ((( NULO )))

/**
 * Se o valor da variavel for nulo, outro valor é atribuido.
 */

$result ?? $num2;

echo $result;

/* ========================================== */

?>