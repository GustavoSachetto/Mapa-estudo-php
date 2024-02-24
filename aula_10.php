<?php

include 'variables.php';

/* ========= ESTRUTURAS DE CONDIÇÃO ========= */

// ((( IF, ELSEIF e ELSE )))

/**
 * Essa estrutura verifica se uma condição é atendida ou verdadeira. 
 * Se a condição for atendida é executado o código entre as chaves, se não é verificado outra condição, 
 * assim sucessivamente até que não haja mais nenhuma condição a ser executada.
 */

if ($num1 = 5) {
    $result = true;
} elseif ($num2 = 7) {
    $result = true;
} else {
    $result = false;
}

echo $result;

// ((( SWITCH CASE )))

/**
 * Essa estrutura verifica se uma condição é atendida. 
 * Igual a estrutura IF ela realiza uma verificação em cadeia, onde ela compara apenas se o valor é correspondente. 
 * Se o valor for correspondente é executado o código entre as duas palavras, se não é comparado os outros valores,
 * até que haja apenas o padrão de retorno da estrutura. 
 */

switch ($num1) {
    case 5:
        $result = true;
        break;
    case 7:
        $result = true;
        break;
    
    default:
        $result = false;
        break;
}

echo $result;

// ((( OPERADOR TÉRNARIO )))

/**
 * Essa estrutura verifica se uma condição é atendida ou verdadeira. 
 * Se a condição for atendida é executado o código depois da interrogação, se não é executado codigo depois dos dois pontos.
 */

$name == 'Gustavo' ? $result = true : $result = false; 

echo $result;

/* ========================================== */

?>