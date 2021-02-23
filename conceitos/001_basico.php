<!-- Control + ; (comentário em uma linha) -->
<!-- Shif + Alt + A (comentário em bloco) -->

<!-- Conceitos do PHP -->

<!-- 
O que o PHP pode fazer?
PHP pode gerar conteúdo de página dinâmica
O PHP pode criar, abrir, ler, gravar, excluir e fechar arquivos no servidor
PHP pode adicionar, excluir, modificar dados em seu banco de dados
PHP pode coletar dados de formulário
PHP pode enviar e receber cookies
PHP pode ser usado para controlar o acesso do usuário
PHP pode criptografar dados -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- SYNTAX BÁSICA DENTRO DO HTML -->

<!-- <!DOCTYPE html>
<html>
<body>
<h1>Syntaxe básica</h1>

<?php
echo "Meus comentários";

// Isto é um comentário de uma linha dentro do código php
# Isto é um comentário de uma linha dentro do código php

/* 
Isto é um comentário em bloco 
com multiplas linhas
*/

?>
</body>
</html> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- DECLARAÇÃO DE VARIÁVEIS -->

<!-- <?php

$texto = "Olá Mundo";
$x = 5;
$y = 10.5;

// Regras para variáveis ​​PHP:

// Uma variável começa com o sinal $, seguido pelo nome da variável
// Um nome de variável deve começar com uma letra ou o caractere de sublinhado
// Um nome de variável não pode começar com um número
// Um nome de variável pode conter apenas caracteres alfanuméricos e sublinhados (Az, 0-9 e _)
// Os nomes das variáveis ​​diferenciam maiúsculas de minúsculas ( $agee $AGEsão duas variáveis ​​diferentes)
?> -->


<!-- VARIÁVEIS DE SAÍDA -->

<!-- <?php
$youtube = "Youtube";
echo "Eu amo o $youtube !";
echo "Eu amo o" . $youtube . "!"; //produzirá a mesma saída que o exemplo acima
?> -->


<!-- SOMA DE DUAS VARIÁVEIS -->

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<!-- ESCOPO DAS VARIÁVEIS -->

<!-- As variáveis ​​podem ser declaradas em qualquer lugar no script.
O escopo de uma variável é a parte do script onde a variável pode ser referenciada / usada.
PHP tem três escopos de variáveis ​​diferentes:

-local
-global
-estático 
-->

<!-- ESCOPO GLOBAL -->

<!-- <?php
$x = 5; // escopo global pois está fora da função.

function meuTeste() {
  // usar a variável X dentro desta função irá gerar um erro
  echo "<p>A função interna da variável x é: $x</p>";
}

meuTeste();
echo "<p>A função interna da variável x é: $x</p>"; // aqui vai funcionar

?> -->


<!-- ESCOPO LOCAL -->

<!-- 
<?php

function meuTeste2() {
  $x = 5; // escopo local
  echo "<p>A função interna da variável x é: $x</p>";
}

meuTeste2();
// usar x fora da função irá gerar um erro
echo "<p>A função interna da variável x é: $x</p>";
?> -->

<!-- PALAVRA-CHAVE GLOBAL -->

<?php
//declaração das variáveis globais, fora da função
$x = 5;
$y = 10;

function meuTeste3() {
  global $x, $y; //a função GLOBAL foi chamada para a realização desta soma.
  $y = $x + $y;
}

meuTeste3();
echo $y; // resultado 15
?>

<!-- PALAVRA-CHAVE GLOBAL COM ARRAY (MATRIZ) -->

<!-- <?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // resultado 15
?>

<!-- VARIÁVEL ESTÁTICA -->

<?php
function myTest1() {
  static $x = 0; // PALAVRA-CHAVE STATIC
  echo $x;
  $x++;
}

myTest1(); //0
myTest1(); //1
myTest1(); //2
?> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- DECLARAÇÕES ECHO , PRINT E RETURN -->

<!-- ECHO OU ECHO() -->

<!-- <?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> -->

<!-- <?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?> -->


<!-- PRINT OU PRINT() -->

<!-- <?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> -->

<!-- <?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- TIPOS DE DADOS -->

<!-- 
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource 
-->

<!-- STRING / LETRAS OU NÚMEROS CONVERTIDOS EM "LETRAS" -->

<!-- <?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?> -->

<!-- INTEIRO -->
<!-- um número inteiro é um número não decimal -->
<!-- 
Um inteiro deve ter pelo menos um dígito
Um número inteiro não deve ter um ponto decimal
Um número inteiro pode ser positivo ou negativo
Os inteiros podem ser especificados em: notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2) -->

<!-- 
<?php
$x = 5985;
var_dump($x); // a função var_dump() retorna o tipo de dados e valor. int(5985)
?> -->

<!-- FLOAT -->
<!-- número com um ponto decimal ou um número em forma exponencial -->

<!-- 
<?php
$x = 10.365;
var_dump($x); // a função var_dump() retorna o tipo de dados e valor. float(10.365)
?> -->

<!-- BOOLEAN = TRUE OU FALSE -->
<!-- Os booleanos costumam ser usados ​​em testes condicionais.  -->

<!-- ARRAY OU MATRIZ -->
<!-- Uma matriz armazena vários valores em uma única variável -->

<!-- 
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars); //array (3) {[0] => string (5) "Volvo"  [1] => string (3) "BMW" [2] => string (6) "Toyota"}
?> -->

<!-- PHP OBJECT -->
<!-- 
Classes e objetos são os dois aspectos principais da programação orientada a objetos.
Uma classe é um modelo para objetos e um objeto é uma instância de uma classe. 
-->

<!-- 
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "Meu carro é " . $this->color . " " . $this->model . "!";
  }
}


$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";

$myCar = new Car("red", "Toyota");
echo $myCar -> message();

?> -->

<!-- PHP NULL Value -->

<!-- <?php
$x = "Hello world!";
$x = null;
var_dump($x);
?> -->

<!-- PHP Resource -->

<!-- 
O tipo de recurso especial não é um tipo de dados real. É o armazenamento de uma referência a funções e recursos externos ao PHP.
Um exemplo comum de uso do tipo de dados de recurso é uma chamada de banco de dados. -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- STRINGS / DETALHAMENTO -->

