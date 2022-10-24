<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (Throwable $erroOuExcecao){
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        echo $erroOuExcecao->getLine() . PHP_EOL;
        echo $erroOuExcecao->getFile() . PHP_EOL;
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
