<?php

/* =========== INCLUINDO ARQUIVOS =========== */

// ((( INCLUDE )))

/**
 * O include serve para incluir um arquivo (.php) no arquivo atual. 
 * Quando um arquivo php é incluido todo o bloco de código é interpretado a este 
 * arquivo na qual está sendo trabalhado.
 */

include 'variables.php';

// ((( INCLUDE_ONCE )))

/**
 * O include_once também serve para incluir um arquivo (.php) no arquivo atual. 
 * A grande diferença é que o include_once garante que este arquivo seja incluido apenas 
 * uma vez neste arquivo na qual está sendo trabalhado.
 */

include_once 'variables.php';

// ((( REQUIRE )))

/**
 * O require serve para incluir um arquivo (.php) no arquivo atual. 
 * Sua diferença é que se não for possível incluir o arquivo informado
 * o projeto retornará um erro.
 */

require 'variables.php';

// ((( REQUERI_ONCE )))

/**
 * O require_once também serve para incluir um arquivo (.php) no arquivo atual. 
 * A grande diferença é que o require_once garante que este arquivo seja incluido apenas 
 * uma vez neste arquivo na qual está sendo trabalhado. 
 * 
 * Se não for possivel incluir o programa retornará um erro.
 */

require_once 'variables.php';


/* ========================================== */

?>