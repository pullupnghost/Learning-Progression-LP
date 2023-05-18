<?php 

    $string = 'Hello World';

    echo strlen($string) . '<br />'; //* Conta o numero de caracteres da string.

    echo strpos($string, 'o') . '<br />'; //* Retorna a posição do primeiro 'o' na string.

    echo strrpos($string, 'o') . '<br />'; //* Retorna a posição do ultimo 'o' na string.

    echo strrev($string) . '<br />'; //* Inverte a string.

    echo strtolower($string) . '<br />'; //* Converte a string para minusculas.

    echo strtoupper($string) . '<br />'; //* Converte a string para maiusculas.

    echo ucwords($string) . '<br />'; //* Converte a primeira letra de cada palavra para maiuscula.

    echo str_replace('World', 'Everyone', $string) . '<br />'; //* Substitui a palavra 'World' por 'Everyone' na string.

    echo substr($string, 0, 5) . '<br />'; //* Retorna os caracteres da posição 0 até à posição 5 da string.
    echo substr($string, 5) . '<br />'; //* Retorna os caracteres da posição 5 até ao fim da string.

    if (str_starts_with($string, 'Hello')) { //* Verifica se a string começa com 'Hello'.
        echo 'YES' . '<br />';
    }

    if (str_ends_with($string, 'ld')) { //* Verifica se a string termina com 'ld'.
        echo 'YES' . '<br />';
    }

    $string2 = '<h1>Hello World</h1>'; //* A string2 contem tags html.
        echo htmlentities($string2) . '<br />'; //* Converte os caracteres especiais em entidades html PHP.
        echo $string2; //* Mostra a string com formato HTML.

    printf('%s is a %s', 'Brad', 'nice guy'); //* Recebe uma string e substitui os %s pelos argumentos seguintes, Usado para ler data vinda de fora.
    printf('1 + 1 = %f', 1 + 1);
?>