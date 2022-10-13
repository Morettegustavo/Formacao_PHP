<?php 
// abrindo o arquivo
$file = fopen('lista-cursos.txt', 'r');

// pegando o tamanho do arquivo
$tamanhoDoArquivo = filesize('lista-cursos.txt');

// lendo todo o arquivo
$cursos = fread($file, $tamanhoDoArquivo);

echo $cursos;

// fechando o arquivo
fclose($file);

