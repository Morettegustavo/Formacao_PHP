# PHP studies 🚀🐘
*** 
![elefantinho-do-bem-250](https://user-images.githubusercontent.com/88351614/183260985-d5341984-bdd4-4a1b-8a7a-74bb34254763.jpg)

* **`Meus estudos de PHP, e laravel(framework PHP).`**
# Cursos
***
- [ ] PHP I/O: trabalhando com arquivos e streams
* Utilize arquivos, console e teclado
* Aplique wrappers e filtros nos streams
* Use streams e trabalhe com ZIP
* Leia e escreva o formato CSV
* Conheça encodings e character sets
<hr>

# Comandos e sintaxes aprendidas durante curso
***

### Lendo linha a linha
Quando falamos em trabalhar com arquivos na programação, a primeira coisa que devemos pensar é que devemos abrir o arquivo.
A função que usamos no php para isso é fopen f = file (arquivo), open (abrir).
```
A função que usamos no php para isso é fopen f = file (arquivo), open (abrir).
```
Podemos fazer um loop para ler linha por linha do arquivo
```
while(!feof($file)){
	$curso = fgets($file);
}
```
> <strong>feof()</strong> - A função verifica se o “fim do arquivo (EOF)” foi atingido. 

> <strong>fgets()</strong> - A função fgets é usada para ler uma linha do arquivo.

> <strong>fclose()</strong> - Se os deixarmos abertos, mais ninguém poderá utilizá-los, ou seja, nenhum outro programa conseguirá manipular o arquivo que você abriu. A função <strong>fclose()</strong> fechará o arquivo, ou seja, liberamos ele para que outros programas possam utilizá-lo sem problemas.
<hr>

### Lendo o arquivo todo
* Para lermos um arquivo todo usamos a função <strong>fread()</strong> e a função <strong>filesize()</strong>
> A função <strong>fread()</strong> lê um arquivo aberto. O primeiro parâmetro de <strong>fread()</strong> contém o nome do arquivo a ser lido e o segundo parâmetro especifica o número máximo de bytes a serem lidos.

> A função <strong>filesize()</strong> retorna o tamanho do arquivo

```
fread($myfile,filesize("webdictionary.txt"));
```
<hr>





