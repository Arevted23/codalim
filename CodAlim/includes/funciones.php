<?php

define('TEMPLATES_URL',__DIR__. '/templates');
define('FUNCIONES_URL',__DIR__. 'funciones.php');

function incluirTemplate(string $nombre){
    include TEMPLATES_URL . "/{$nombre}.php";
}
