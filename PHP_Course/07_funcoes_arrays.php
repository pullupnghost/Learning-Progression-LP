<?php
    $pessoas = ['Joao', 'Matilde', 'Putxi'];

        echo count($pessoas) . "<br />"; //* Conta o numero de elementos do array.
        echo in_array('Joao', $pessoas) . "<br />"; //* Verifica se o elemento existe no array, retorna 1 se existir, 0 se não existir.

//? ADICIONAR ELEMENTOS AO ARRAY
        $pessoas[] = 'Dona Isabel'; //* Adiciona um elemento no final do array.
            print_r($pessoas);
                echo "<br />";
        array_push($pessoas, 'Dona Maria'); //* Adiciona um elemento no final do array.
            print_r($pessoas);
                echo "<br />";
        array_unshift($pessoas, 'Dona Joana'); //* Adiciona um elemento no inicio do array.
            print_r($pessoas); 
                echo "<br />";
//? REMOVER ELEMENTOS DO ARRAY
        array_pop($pessoas); //* Remove o ultimo elemento do array.
            print_r($pessoas);
                echo "<br />";
        array_shift($pessoas); //* Remove o primeiro elemento do array.
            print_r($pessoas);
                echo "<br />";
        unset($pessoas[3]); //* Remove o elemento na posição 3 do array.
            print_r($pessoas);
                echo "<br />";
//? SEPARAR ELEMENTOS DO ARRAY POR ARRAYS
        $chunked_array = array_chunk($pessoas, 2); //* Divide o array em arrays com 2 elementos.
            print_r($chunked_array);
                echo "<br />";

//? JUNTAR DOIS OU MAIS ARRAYS
    $array1 = [1,2,3];
    $array2 = [4,5,6];

    $array3 = array_merge($array1, $array2); //* Junta os dois arrays.
        print_r($array3);
            echo "<br />";
    $array4 = [...$array1, ...$array2]; //* Junta os dois arrays.
        print_r($array4);
            echo "<br />";

//? DEFINIR CHAVES DUM ARRAY COM UM ARRAY
    $string1 = ['CEO', 'CTO', 'CFO'];
    $string2 = ['Joao', 'Matilde', 'Putxi'];

    $string3 = array_combine($string1, $string2); //* Junta os dois arrays, o primeiro array é a chave e o segundo array é o valor.
        print_r($string3);
            echo "<br />";

    $keys = array_keys($string3); //* Retorna as chaves do array.
        print_r($keys);
            echo "<br />";

    $flipped = array_flip($string3); //* Inverte as chaves e os valores do array.
        print_r($flipped);
            echo "<br />";

//? CRIA UM ARRAY DE UM RANGE DE NUMEROS
    $numeros = range(1, 10); //* Cria um array com os numeros de 1 a 10.
        print_r($numeros);
            echo "<br />";

//? ORDENAR OU PROCURAR UM ARRAY
    $novosNumeros = array_map(function($numeros){
        return "Numero: $numeros";
    }, $numeros); //* Mapeia o array e adiciona a string "Numero: " a cada elemento do array.
        print_r($novosNumeros);
            echo "<br />";

//? FILTRAR UM ARRAY
    $menorQueCinco = array_filter($numeros, function($numeros){
        return $numeros < 5;
    }); //* Filtra o array e retorna os elementos que são menores que 5.
        print_r($menorQueCinco);
            echo "<br />";

//? REDUZIR UM ARRAY
    $soma = array_reduce($numeros, function($numeros, $soma){
        return $numeros + $soma;
    }); //* Reduz o array a um unico valor, neste caso a soma de todos os elementos do array.
        print_r($soma);
            echo "<br />";
?>