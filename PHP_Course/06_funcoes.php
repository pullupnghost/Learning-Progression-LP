<?php 
    function registerUser($username, $email){ //* Função com parametros.
        echo $username . ' ' . $email, ' is registered' . "<br />";
    }

    registerUser('Joao', 'joaovhorny@gmail.com'); //* Chamando a função com parametros, sem inserir parametros dá erro.

    function somar($n1 = 1, $n2 = 2){ //* Função com parametros predefinidos, se não inserir parametros, assume os predefinidos.
        return $n1 + $n2;
    }

    //? $soma = somar(10, 20);
        echo somar(10, 20) . "<br />";
        echo somar() . "<br />"; //* Sem parametros, assume os predefinidos.

    $subtrair = function($n1, $n2){ //* Função anónima dentro de uma variável.
        return $n1 - $n2;
    };
        echo $subtrair(10, 5) . "<br />";

    $multiplicar = fn($n1, $n2) => $n1 * $n2; //* Função anónima dentro de uma variável, com arrow function. (fn) - function.
        echo $multiplicar(10, 5) . "<br />";
?>