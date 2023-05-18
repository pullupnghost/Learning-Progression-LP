<?php

    $numbers = [1, 2, 3, 4, 5]; //* Array simples.
        echo $numbers[0] . "<br />";
        echo $numbers[3] + $numbers[4] . "<br />"; //* Soma de dois elementos do array.

    var_dump($numbers);
        echo "<br />";

    $colors = [
        array("blue", "red", "green"),
        array("yellow", "purple", "pink")
    ]; //* Array Multidimensional.
        echo $colors[1][2] . "<br />";

    $hex = [ 
        'red' => '#f00',
        'green' => '#0f0',
        'blue' => '#00f',
    ]; //* Array Associativo.
        echo $hex['red'] . "<br />";
            var_dump($hex);
        echo "<br />";

 //* Array Associativo dentro de um Array Multidimensional.
    $person = [
        'primeiro_nome' => 'Joao',
        'ultimo_nome' => 'Varela',
        'email' => 'joaovhorny@gmail.com',
    ];

        $people = [
        $person,
        [
            'primeiro_nome' => 'John',
            'ultimo_nome' => 'Doe',
            'email' => 'john@gmail.com',
        ],
        [
            'primeiro_nome' => 'Joao',
            'ultimo_nome' => 'Varela',
            'email' => 'joaovhorny@gmail.com',
        ],
        ];

    echo "<pre>"; //* <pre> - Formata o output do array.   
        var_dump($people);
    echo "</pre>" . "<br />";

    echo $people[0]['primeiro_nome'] . "<br />"; //* Imprime o 'primeiro_nome' da pessoa na posição 0.
    echo $people[2]['email'] . "<br />"; //* Imprime o 'email' da pessoa na posição 2.

    echo "<pre>";
        var_dump(json_encode($people)); //* json_encode - Converte o array para JSON.
            echo "<br />";
        $people1 = json_encode($people);
            var_dump(json_decode($people1, true)); //* json_decode - Converte o JSON para array.
    echo "</pre>" . "<br />";

?>