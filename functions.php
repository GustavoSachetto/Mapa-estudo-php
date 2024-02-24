<?php

// funções auxiliares
function toUpperName($item) {
    $item['nome'] = strtoupper($item['nome']);
    return $item;
}

function sum($total, $item) {
    $total += $item['saldo'];
    return $total;
}

function percentageCalculation($value,$percent) {
    return ($value / 100) * $percent;
}

?>