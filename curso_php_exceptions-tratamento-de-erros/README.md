# PHP studies 🚀🐘
*** 
![elefantinho-do-bem-250](https://user-images.githubusercontent.com/88351614/183260985-d5341984-bdd4-4a1b-8a7a-74bb34254763.jpg)

# Cursos
***
- [ ] PHP Exceptions: tratamento de erros
* Aprenda a lançar uma exception
* Customize uma exception
* Capture várias exceções ao mesmo tempo
* Utilize o bloco try-catch
* Veja a utilidade do bloco finally
<hr>

># Comandos e sintaxes aprendidas durante curso
***
# Pilha de execução
## Tratamento de exceções
* Agora já sabemos como fazer com que o nosso código saiba reagir quando alguma exceção acontece durante a execução.

```
try {
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3];
} catch (RuntimeException $erro){
    echo "Aconteceu um erro na função 1" . PHP_EOL;
}
```
> Não é posssível ter uma instrução catch, sem uma instrução try
> 
> Em nosso catch nós informamos qual tipo de exceção nós queremos pegar e além disso, definimos uma variável que vai conter essa exceção.




