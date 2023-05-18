<?php
    "<br />"; //? Breakline do HTML.

    echo "Hello World! ", 123, ' hi ' . 3*3, " Joao" . "<br />";//* echo - Strings, numeros, html, etc...
        echo "<p>Hello World!</p>" . "<br />";;

    print "Hello WOrld! " . 1231 . ' olá'; //* print - Funciona como o echo.
        echo "<br />";

    print_r ([1,2,3,4]) . "<br />";; //* print_r - Imprime arrays formatados e de forma clara.
       
        $N_Pares = array(array(2,4,6,8,10), 12, 21, array(1,3,5,7,9)); //* Array Multidimensional.
           
        echo "<pre>"; //* <pre> - Formata o output do array.   
            print_r($N_Pares);
        echo "</pre>" . "<br />";

        $array = array(1 => "vermelho", "nome" => "Jose Manuel", "numero" => 50); //* Array Associativo.
            print_r($array);
                echo "<br />";

    var_dump("Hello World!"); //* var_dump - Imprime o tipo de variavel e o seu valor.
        echo "<br />";

        var_dump('joao', 12312); //* Separar por virgulas para imprimir mais que uma variavel.
            echo "<br />";

        $nome = "Joao"; $idade = 17;
            var_dump($nome, $idade); //* Imprime os tipos e valores de uma ou mais varáveis.
    
//? Closing tag opcional para PHP mas necessária quando existe mais linguagens no mesmo ficheiro.
?> 