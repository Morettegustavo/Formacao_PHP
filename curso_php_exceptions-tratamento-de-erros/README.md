# PHP studies 🚀🐘
*** 
![elefantinho-do-bem-250](https://user-images.githubusercontent.com/88351614/183260985-d5341984-bdd4-4a1b-8a7a-74bb34254763.jpg)

# Cursos
***
- [x] PHP Exceptions: tratamento de erros
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

<hr>

## Pegando mútiplas exceções
* Quando queremos personalizar todas as exception que temos podemos fazer dá seguinte maneira:
```
try {
    funcao2();
} catch (RuntimeException){
    echo 'Na função 1, eu resolvi o problema na função 2' . PHP_EOL;
} catch (DivisionByZeroError){
    echo 'Erro ao dividir um número por zero' . PHP_EOL; 
}
```
* Quando só queremos pegar a exception e não precisamos personalizar a mensagem de erro podemos fazer desssa maneira:

```
try {
    funcao2();
} catch (RuntimeException | DivisionByZeroError){
    echo 'Na função 1, eu resolvi o problema na função 2' . PHP_EOL;
}
```
 
* Podemos também pegar a mensagem de erro

```
try {
    funcao2();
} catch (RuntimeException | DivisionByZeroError $erroOuExcecao){
    echo $erroOuExcecao->getMessage() . PHP_EOL;
}
```
> Temos algumas informações que podemos pegar do erro:
* echo $erroOuExcecao->getMessage() . PHP_EOL;
* echo $erroOuExcecao->getLine() . PHP_EOL;
* echo $erroOuExcecao->getFile() . PHP_EOL;
* echo $erroOuExcecao->getTraceAsString() . PHP_EOL;

> getMessage() trás a mensagem de erro. 
> 
> getLine() trás a linha. 
> 
> getFile() trás o nome do arquivo que ocorreu o erro.
> 
> getTraceAsString() trás a pilha, todo o caminho que levou para chegar até o ponto do erro.

<hr>

### Lançar uma exceção
```
$exception = new RuntimeException();
throw $exception;
```

> 1 - Para lançar uma exceção, além de instanciá-la, é necessário lançá-la através do throw
> 
> 2- Quando uma exceção é lançada, o código para abruptamente, por padrão
> 
> 3- Podemos atribuir uma mensagem a uma exceção
> 
> 4 - Uma exceção nada mais é do que uma classe, logo, podemos instanciar exceções

### Hierarquia de exceções

> No PHP existe uma interface, chamada Throwable, que só é utilizada pelo próprio PHP, e tudo que implementa essa interface pode ser lançado por meio da palavra-chave throw. Não é possível criarmos uma classe própria que implemente diretamente a interface Throwable, ainda que seja possível criarmos classes de exceção

![img.png](img.png)

Falamos um pouco sobre a hierarquia dos tipos que podem ser lançados com a palavra throws, o tipo (classe ou interface) base de toda essa hierarquia é Throwable.

> Throwable essa interface é a base da hierarquia de erros e exceções do PHP.

### SPL Exceptions

> A linguagem PHP essencialmente não define nenhuma exceção. Entretanto, existe uma extensão do PHP, habilitada por padrão em qualquer instalação, chamada SPL - sigla para Standard PHP Library, ou "biblioteca padrão do PHP" - e que fornece diversas funcionalidades.

> Vimos como fazer um bloco catch pegar diversos "problemas", sem utilizar o multi-catch, informando apenas um tipo:
Como isso é possível?
> 
> Resposta: Através do polimorfismo da orientação a objetos
> * Podemos informar um tipo base do nosso problema, e qualquer outro tipo que estenda ele, ou seja, qualquer tipo que herde desse tipo informado, será pego pelo nosso catch

``` 
try {
    funcao2();
} catch (Throwable $erroOuExcecao){
    echo $erroOuExcecao->getMessage() . PHP_EOL;
    echo $erroOuExcecao->getLine() . PHP_EOL;
    echo $erroOuExcecao->getFile() . PHP_EOL;
    echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
}
```

<hr>

### Criando uma exceção
> Criamos a nossa primeira exceção de domínio, ou seja, uma exceção que faça sentido para as nossas regras de negócio.

* Para definirmos uma exceção válida é necessário criar uma classe que herde de alguma Exception, ou de uma classe filha.

<hr>

## Finally

> Quando usamos um try/catch, temos acesso ainda a um terceiro bloco não-obrigatório e pouco utilizado: o finally, que é executado independentemente da ocorrência de uma exceção.

``` 
<?php
$arquivo = fopen('temp.txt', 'w');

try  {
    fwrite($arquivo, 'Qualquer coisa');
    //throw new Exception('Exceção aqui');
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
    fclose($arquivo);
}
```
> O finally sempre é executado quer peguemos uma exceção ou não.

<hr>

### Tipos de erros
Antes da versão 7 do PHP, todos os erros gerados no código pelo próprio PHP eram lançados de uma forma bem peculiar e difícil de tratar.

A partir da versão 7, novos métodos e funções do próprio PHP estão começando a lançar exceções e erros que podemos tratar com try - catch, mas ainda falta muito para esse caso ser a maioria.

Então, vale muito a pena ler com mais calma a documentação sobre os erros no PHP: [Erros](https://www.php.net/manual/pt_BR/language.errors.basics.php)

<hr>

### Configurações de erros

* As duas principais configurações são error_reporting e display_errors.

> Existem duas formas de modificarmos este comportamento: editando o arquivo php.ini do seu computador, que é o método ideal; ou por meio da função ini_set(), passando o nome e o valor da configuração. Esta última faz exatamente o que faríamos editando diretamente o arquivo php.ini
> 
> Como essa configuração é tão importante, o PHP possui também uma função específica error_reporting() com a qual podemos definir que erros queremos exibir. Se passarmos E_ALL, por exemplo, exibiremos todos os erros, independentemente de quais forem.

``` 
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
```
[Documentação](https://www.php.net/manual/en/errorfunc.constants.php) contendo todos os erros

* Os principais tipos de erros do PHP:
  * Notice
  * Warning
  * Error (erro fatal)
> Tratar os erros utilizando a função set_error_handler
<hr>

# Certificado
***
![img_1.png](img_1.png)

