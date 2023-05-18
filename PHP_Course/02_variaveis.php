<?php

//? Variáveis 
    /* 
     * String - Conjunto de caracteres. ("Hello World!)
     * Int(eger) - Números inteiros. (123)
     * Float - Números decimais. (12.3)
     * Boolean - True ou False. (true)
     * Array - Conjunto de valores. (array(1,2,3,4))
     * Object - Instância de uma classe. (new Class())
     * Null - Variável sem valor. (null)
     * Resource - Referência a um recurso externo. (mysql_connect())
     */

    /*  
     * Regras para criar variáveis:
     * - Variáveis devem ser prefixadas com $
     * - Variáveis devem começar com uma letra ou com o caracter underscore
     * - Variáveis não podem começar com um número
     * - Variáveis podem apenas conter caracteres alfanuméricos e underscore (A-z, 0-9, e _ )
     * - Variáveis são case-sensitive ($name e $NAME são duas variáveis diferentes)
     */

//?

$nome = "Joao"; //* String, pode usar " " ou ' ';
$age = 17; //* Int;
$tem_criancas = false; //* Boolean;
$saldo_bancario = 215.000; //* Float;

var_dump($tem_criancas); echo "<br />";

echo "O $nome tem $age anos e tem $saldo_bancario euros na conta." . "<br />"; //* Para juntar variáveis a strings, Método Moderno.

echo "O ${nome} tem ${age} anos e tem ${saldo_bancario} euros na conta." . "<br />"; //* ${} - Para juntar variáveis a strings, Método Antigo.

echo '<h3>' . $nome . " is " . $age . " years old " . '</h3>' . "<br />"; //* Concatenação de strings.

define('HOST', "localhost"); //* Constante, não pode ser alterada.
define('USER', "root");

print(HOST) . "<br />"; //* Imprime o valor da constante.
var_dump(HOST); //* Imprime o tipo e valor da constante.
?>
