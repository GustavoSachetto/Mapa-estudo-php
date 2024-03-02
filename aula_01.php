<?php

/* ============= TIPO DE DADOS ============== */

// ((( VARIÁVEL )))

/**
 * Esse tipo de dado pode ser redeclarado ou alterado.
 */

$result = 1;
$result = 2;

echo $result;

// ((( VARIÁVEL DINÂMICA )))

/**
 * Esse tipo de dado pode ser declarado com o conteúdo presente dentro de outra variável.
 */

$result = 'carro';
$$result = 'Chevrolet';

echo $carro;

// ((( CONSTANTE )))

/**
 * Esse tipo de dado NÃO pode ser redeclarado ou alterado, apenas acessado.
 */

const NAME = 'Gustavo';
define('TESTE', 'Funcionou');

echo NAME;
echo TESTE;

/* ========================================== */

/* ======= PADRÃO DE ESCRITA DE DADOS ======= */

// ((( VARIÁVEIS )))

/**
 * Existe três padrões de escrita de variáriaveis, eles são:
 * 
 * NÃO É PERMITIDO O PADRÃO KEBAB CASE NO PHP.
 * X $kebab-case = 'kebab-case';
 */

// camel case
$camelCase = 'camelCase';

// pascal case
$PascalCase = 'PascalCase';

// snake case
$snake_case = 'snake_case';

// ((( CONSTANTES )))

/**
 * As constantes tem apenas um padrão de escrita, todo carácter deve estar em maiúsculo.
 */

// "maiusculo case"
const MAIUSCULA = 'MAIUSCULA_MAIUSCULA';

/* ========================================== */

?>