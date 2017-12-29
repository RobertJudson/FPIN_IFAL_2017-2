<?php 

function carrega_pagina(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'candidatos_home';
    if($pagina == 'candidatos_home'){
        (isset($_GET['c'])) ? $pagina = $_GET['c'] : $pagina = 'candidatos_home';
        if($pagina == 'candidatos_home'){
            require_once($pagina.'.php');
        }else{
            require_once('cidade.php');
        }
    }else{
        require_once('estado.php');
    }
}

?>