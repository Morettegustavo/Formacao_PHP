<?php

class MinhaExcecao extends DomainException
{
    public function exibeGustavo()
    {
        echo "Gustavo";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e){
    $e->exibeGustavo();
}
