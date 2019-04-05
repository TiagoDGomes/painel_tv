<?php

date_default_timezone_set('America/Sao_Paulo');


function conteudo($codigo, $real=false){  
    $arquivo = "conteudo/$codigo.phtml";  
    $conteudo = @file_get_contents ($arquivo);
    if (!$real){
        if($conteudo === false){
            $conteudo = @file_get_contents ("conteudo/default.phtml");
        }        
    }    
    return $conteudo;
}