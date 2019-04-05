<?php
include('geral.php');

$localtime = localtime(time(), true);

$conteudo = '';
$hora = $localtime['tm_hour'];

if ($localtime['tm_min'] >= 30){
    $minuto = '30';
} else {
    $minuto = '00';
}
$contador = 0;

while($conteudo == ''){
    //print_r("<p>$hora.$minuto</p>");
    $conteudo = conteudo("$hora.$minuto", true);
    //var_dump($conteudo);
    if ($conteudo === false|| $conteudo==''){        
        if ($minuto != '30'){
            $minuto = '30';
            //print_r("<p>30 $hora.$minuto</p>");
            $hora--;
        } else {
            $minuto = '00';
            //print_r("<p>00 $hora.$minuto</p>");
        }
    } else {
        break;
    }
    $contador++;
    if ($hora <=5 || $contador> 24){
        $conteudo = conteudo("$hora.$minuto", false);
        break;
    }
    //print_r("<p>$hora.$minuto</p>");
    //echo "<hr>";
}

echo $conteudo;

