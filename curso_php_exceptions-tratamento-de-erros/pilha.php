<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3];
    } catch (RuntimeException $erro){
        echo "Aconteceu um erro na função 1" . PHP_EOL;
    }

    //    $divisao = intdiv(5, 0);
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
