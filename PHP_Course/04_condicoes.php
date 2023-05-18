<?php
    /* 
        * < Menor que
        * > Maior que
        * <= Menor ou igual a
        * >= Maior ou igual a
        * == Igual a
        * === Idêntico em tipo e valor
        * != Diferente de
        * !== Diferente em tipo e valor
        * && E (AND)
        * || OU (OR)
        * ! Negação (NOT)
        * ?: (?) - Then | (:) - Else
        * ?? Se existir atribui o valor, se não existir atribui null.
    */


    $idade = 18; 
    //! Maior ou Igual que
        if($idade >= 18) { //* 
            echo "Podes entrar!" . "<br />";
        } else {
            echo "Não podes entrar!" . "<br />";
        }

    $time = date("H"); //* (H | h) - 24Horas| 12Horas | (J) - Dia do mês | (l) - Dia da semana | (F) - Mês | (Y) - Ano | etc...
    //! Menor que
        if($time < 12){
            echo 'Bom dia!' . "<br />";
        }else if($time < 18){
            echo 'Boa Tarde!' . "<br />";
        }else{
            echo 'Boa Noite!' . "<br />";
        }

    $posts = ['post1', 'post2', 'post3', 'post4', 'post5'];
    //! Negação de Vazio
        if(!empty($posts)){
            echo $posts[0] . "<br />";
        }else{
            echo "Não existem posts!" . "<br />";
        }

        echo !empty($posts) ? $posts[0] . "<br />" : "Não existem posts!" . "<br />"; //* Operador ternário.

        $first_post = !empty($posts) ? $posts[1] : "Não existem posts!" . "<br />"; //* Operador ternário de atribuição.
            echo $first_post . "<br />";

        $second_post = $posts[2] ?? null; //* Operador de coalescência nula. (??) - Se existir atribui o valor, se não existir atribui null.
            echo $second_post . "<br />";
    
    $cor_favorita = 'blue';
    //! Switch, para condições com muitas opções.
    switch($cor_favorita){
        case 'red':
            echo "A tua cor favorita é vermelho!" . "<br />";
            break;
        case 'blue':
            echo "A tua cor favorita é azul!" . "<br />";
            break;
        case 'green':
            echo "A tua cor favorita é verde!" . "<br />";
            break;
        default:
            echo "Não tens cor favorita!" . "<br />";
    }
?>