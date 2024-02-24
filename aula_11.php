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

?>