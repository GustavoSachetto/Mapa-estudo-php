<?php

include 'variables.php';

/* ============ TRATAR EXCEÇÕES ============= */

// ((( TRY/CATCH/FINALY )))

/**
 * O try funciona como uma tentativa na execução de um trecho específico de código. 
 * Se esse trecho de código não puder ser executado o trecho catch é executado imediatamente,
 * recebendo o erro em uma variável. Quando a tentativa for 
 * finalizada o finaly entra automaticamente em vigor.
 */

try {
    $result = $name + $age;
    echo 'successo.';
} catch (\Throwable $th) {
    $result = $th->getMessage();
    echo 'erro.';
} finally {
    echo $result;
}

// ((( THROW )))

/**
 * O throw permite personalizar tratamentos e lançamentos de exceções.
 */

if (!is_numeric($name)) {
    throw new Exception("Erro. A variável deve conter apenas numeros. ", 400);
}

/* ========================================== */

?>