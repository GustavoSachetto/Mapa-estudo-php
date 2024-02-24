<?php

include 'variables.php';

/* ====== MÉTODOS ESTÁTICOS (CLASSES) ======= */

// ((( STATIC )))

/**
 * Atributos e métodos estáticos não precisam ser necessariamente instanciados. 
 * Todo atributo e método será igual para todas as classes instanciadas.
 */

class Translator {
    public static $language = 'english';

    public static function translateByLanguage($textToTranslated)
    {
        echo 'Brasil';
    }
}

echo Translator::$language;

// acessando atributo
Translator::$language = 'portuguese';

echo Translator::$language;

// acessando método
Translator::translateByLanguage('Brazil');

/* ========================================== */

?>