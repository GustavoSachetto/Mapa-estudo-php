<?php

include 'variables.php';

/* ========== ESTRUTURA REPETIÇÃO =========== */

// ((( FOR )))

/**
 * Essa estrutura executa um código repetidamente enquanto o contador ($i) for menor do que o valor comparado. 
 */

for ($i=0; $i < count($nums); $i++) { 
    echo $nums[$i];
}

// ((( FOREACH )))

/**
 * Essa estrutura executa um código repetidamente enquanto houver itens dentro do array. 
 */

foreach ($nums as $value) {
    echo $value;
}

// ((( WHILE )))

/**
 * Essa estrutura executa um código repetidamente enquanto a condição não for atendida. 
 */

$count = 0;
while ($count < count($nums)) {
    echo $nums[$count];
    $count++;
}

// ((( DO WHILE )))

/**
 * Essa estrutura executa um código repetidamente enquanto a condição não for atendida. 
 * Diferente do while a verificação é realizada no fim de cada execução, sendo que se 
 * a condição no for atendida ela executará ao menos uma vez o bloco de código.
 */

$count = 0;
do {
    echo $nums[$count];
    $count++;
} while ($count < count($nums));

/* ========================================== */

/* ============ CONTINUE E BREAK ============ */

// ((( CONTINUE )))

/**
 * O continue serve para pular um indice no laço de repetição.
 * Por exemplo: 
 * 
 * Esse algoritimo abaixo vai exibir os numeros de 0 á 9, se o inidice for igual a 6 
 * ele irá diretamente pular para o proximo indice assim não executando a parte de exibição. 
 * 
 * Resultado: 0,1,2,3,4,5,7,8,9
 */

for ($i=0; $i < 10; $i++) { 
    if ($i == 6) {
        continue;
    }
    echo $i;
}

// ((( BREAK )))

/**
 * O break serve para finalizar/parar a execução de um laço de repetição.  
 * Por exemplo: 
 * 
 * Esse algoritimo abaixo vai exibir os numeros de 0 á 9, se o inidice for igual a 5 
 * ele irá finalizar o laço de repetição.
 * 
 * Resultado: 0,1,2,3,4
 */

for ($i=0; $i < 10; $i++) { 
    if ($i == 5) {
        break;
    }
    echo $i;
}

/* ========================================== */

?>