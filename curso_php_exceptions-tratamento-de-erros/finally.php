<?php

$arquivo = fopen('temp.txt', 'w');
try {
    fwrite($arquivo, 'Qualquer coisa');
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
    fclose($arquivo);
}