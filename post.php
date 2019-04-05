<?php
//var_dump($_POST);
$filename = $_POST['horario'];
$dados = $_POST['html'];
file_put_contents ("conteudo/$filename.phtml", $dados);