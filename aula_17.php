<?php

include 'variables.php';

/* ===== CONST, SELF E PARENT (CLASSES) ===== */

// ((( SELF )))

/**
 * O self serve para acessar atribustos e métodos constantes de sua classe.
 */

class PrimaryColor {
    public const NAME = 'Vermelho';

    public function showColor()
    {
        echo self::NAME;
    }
}

$objectPrimaryColor = new PrimaryColor();
$objectPrimaryColor->showColor();

// ((( PARENT )))

/**
 * O parent serve para acessar atributos e métodos constantes de uma classe pai atráves da classe filha.
 */

class SecundaryColor extends PrimaryColor {
    public const NAME = 'Laranja';

    public function showColor()
    {
        echo self::NAME;
    }

    public function showParentColor()
    {
        echo parent::NAME;
    }
}

$objectSecundaryColor = new SecundaryColor();

$objectSecundaryColor->showColor();
$objectSecundaryColor->showParentColor();

/* ========================================== */


?>