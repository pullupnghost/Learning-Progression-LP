<?php
//* For Loop
    for($i = 0; $i <= 10; $i++){ 
        echo $i . 'x 2 = ' . $i*2 . "<br />";
    }echo "<br />"; //!Tabuada do 2
        
//* While Loop
    $i = 0;
    while($i <= 10){ 
        echo $i . 'x 3 = ' . $i*3 . "<br />";
        $i++;
    }echo "<br />"; //!Tabuada do 3

//* Do While Loop
    $i = 0;
    do{ 
        echo $i . 'x 4 = ' . $i*4 . "<br />";
        $i++;
    }while($i <= 10); 
    echo "<br />"; //!Tabuada do 4

//* Foreach Loop
    $colors = ['red', 'blue', 'green', 'yellow', 'purple', 'pink'];
    foreach($colors as $index => $color){ 
        echo $index . '-' . $color . "<br />";
    }echo "<br />"; //!Lista de cores

    $person = [
        'primeiro_nome' => 'Joao',
        'ultimo_nome' => 'Varela',
        'email' => 'joaovhorny@gmail.com',
    ];
    foreach($person as $key => $value){ //* ($key => $value) = ($index => $value)
        echo $key . ' - ' . $value . "<br />";
    }echo "<br />"; //!Lista de dados pessoais
?>