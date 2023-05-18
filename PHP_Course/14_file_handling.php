<?php
/*
    * PHP_EOL - End Of Line.

? - FIle pointer começa no início do arquivo
! - FIle pointer começa no final do arquivo

    ? r - Abre um arquivo somente para leitura.
    ? w - Abre um arquivo somente para gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir.
    ! a - Abra um arquivo somente para gravação. Os dados existentes no arquivo são guardados. Cria um novo arquivo se o arquivo não existir
    * x - Cria um novo arquivo somente para gravação. Retorna FALSE e um erro se o arquivo já existir
    ? r+ - Abre um arquivo para leitura/gravação.
    ? w+ - Abre um arquivo para leitura/gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir.
    ! a+ - Abre um arquivo para leitura/gravação. Os dados existentes no arquivo são preservados. Cria um novo arquivo se o arquivo não existir
    * x+ - Cria um novo arquivo para leitura/gravação. Retorna FALSE e um erro se o arquivo já existir
    etc..
*/

$file = './extras/users.txt'; //* Cria uma variável de um ficheiro.

if (file_exists($file)) { //* Verifica se o ficheiro existe.

    $handle = fopen($file, 'r');  //* fopen() dá mais controlo sobre o ficheiro.
        //* Tipos: r, w, a, x, r+, w+, a+, x+.

    $contents = fread($handle, filesize($file)); //* fread() lê o ficheiro e se for TRUE retorna o conteúdo do ficheiro, FALSE se falhar.
        //* filesize() retorna o tamanho do ficheiro em bytes.

    fclose($handle); //* Fecha o ficheiro.
        echo $contents; //* Imprime o conteúdo do ficheiro.
} else {
    $handle = fopen($file, 'w'); //* Cria o ficheiro caso não exista.

    $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John'; //* Conteúdo a colocar no ficheiro.

    fwrite($handle, $contents); //* Escreve no ficheiro o conteúdo.
        fclose($handle);
}
?>