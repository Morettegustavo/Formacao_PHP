<?php

echo "Olá mundo" . PHP_EOL;
print 'Hello world' . PHP_EOL;

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá mundo!');

// fazendo sair na saída de erro
$tela = fopen('php://stderr', 'w');
fwrite($tela, 'Mensagem de erro!');

$cursos = fopen('zip://arquivos.zip#cursos-php', 'r');
stream_copy_to_stream($cursos, STDOUT);