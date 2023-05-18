<?php
/*
  ! Finally é sempre executado independentemente de haver ou não uma exceção.

  * Exception - Classe base para todas as exceções de utilizador.
  * Error - Classe base para todos os erros internos do PHP.
  * Throwable - Interface para capturar qualquer coisa que possa ser lançada por throw ou capturada por catch.
  * ErrorException - Erro que pode ser lançado.
  * TypeError - Erro de tipo.
  * ParseError - Erro de análise.
  * ArithmeticError - Erro de aritmética.
  * DivisionByZeroError - Erro de divisão por zero.
  * AssertionError - Erro de asserção.
  * CompileError - Erro de compilação.
  etc...
*/

//? Podemos Enviar uma exceção ou tratar a exceção com um bloco try-catch.

  //* Exemplo de uma função que lança uma exceção.
    function inverse($x) {
      if (!$x) {
        throw new Exception('Division by zero.');
      }
      return 1/$x;
    } 

  //* Exemplo de uma exceção tratada com um try-catch. 
    try {
      echo inverse(5) . ' ' . '<br />';
      echo inverse(10) . ' ' . '<br />';
      echo inverse(0) . ' ' . '<br />'; //* É enviado uma exceção e o código pára.
      echo inverse(3) . ' ' . '<br />'; //* Não é executado.
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), ' ';
    } finally {
      echo 'Fim do try ' . '<br />';
    }

    try {
      echo inverse(0) . ' ' . '<br />';
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), ' ';
    } finally {
      echo "Fim do segundo try " . '<br />';
    }
?>