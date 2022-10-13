<?php

// file_get_contents(), abre o arquivo, lê, e fecha o arquivo
$cursos = file_get_contents('lista-cursos.txt');

echo ('Conteúdo do arquivo: ' . $cursos . PHP_EOL); 

echo '---------------------------------------------------' . PHP_EOL;

// file() pega cada linha e coloca dentro de um array
$cursosArray = file('lista-cursos.txt');

var_dump($cursosArray);
