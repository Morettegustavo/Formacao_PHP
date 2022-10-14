<?php
// o segundo parâmetro do fopen é o modo de abertura
$file = fopen('cursos-php.txt', 'a');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($file, $curso);

$curso = PHP_EOL . 'Design Patterns PHP II: Boas práticas de programação';

fwrite($file, $curso);

fclose($file);