<?php

$curso = 'Design Patterns PHP I: Boas práticas de programação';
file_put_contents('cursos-php.txt', $curso);

// FILE_APPEND Esta constante pré-definida pelo PHP é utilizada para informar que o conteúdo deve ser adicionado ao final do arquivo.
$curso = PHP_EOL . 'Design Patterns PHP II: Boas práticas de programação';
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);