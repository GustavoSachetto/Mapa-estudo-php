<?php

include 'variables.php';

/* =========== TIPOS DE FUNÇÕES ============= */

// ((( FUNÇÃO SIMPLES )))

/**
 * Uma função deve conter apenas um objetivo para existir. 
 * Lembrando que a função deve conter um nome, e se necessário é possivel adicionar parâmetros ela função.
 */

function clearUpSpaces($variable) {
    return str_replace(' ', '', $variable);
}

var_dump(clearUpSpaces($spacing));

// ((( FUNÇÃO ANONIMA )))

/**
 * A função anonima é uma função onde ela não contem nome. 
 * Esse tipo de função é declarada dentro de uma variável onde é possivel acessa-la através do uso da dela.
 * Ese tipo de função não consegue acessar dados do escopo global, apenas utilizando a palavra use(--nome da variavel--).
 */

$total = 5;

$multiply = function($variable) {
    return $variable * 3;
};

var_dump($multiply($num1));

// usando variável do escopo global
$multiplyByTotal = function($variable) use ($total) {
    return $variable * $total;
};

var_dump($multiplyByTotal($num2));

$functions = [
    'sum' => function($n1, $n2) {
        return $n1 + $n2;
    },
    'subtract' => function($n1, $n2) {
        return $n1 - $n2;
    }
];

var_dump($functions['sum']($num1, $num2));
var_dump($functions['subtract']($num1, $num2));

// ((( FUNÇÃO ARROW )))

/**
 * A arrow function é utilizada como uma função normal, o diferencial dela é o tamanho e o retorno automatico.
 */

$testNumber = fn($number) => is_numeric($number);

var_dump($testNumber('10'));

/* ========================================== */

?>