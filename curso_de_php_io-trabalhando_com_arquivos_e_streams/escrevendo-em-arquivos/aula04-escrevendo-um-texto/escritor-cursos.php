<?php

$file = fopen('cursos-php.txt', 'w');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($file, $curso);

// se quisermos informar a quantidade de caracteres a serem escritos podemos adicionar um terceiro paramêtro
fwrite($file, $curso, 21);

fclose($file);