<?php 
// abrindo o arquivo
$file = fopen('lista-cursos.txt', 'r');

/* 
ALGORITMO

while (não chegar no fim do arquivo){
    // ler uma linha
}
*/

while(!feof($file)){
    $curso = fgets($file);

    echo $curso;
}

fclose($file);

