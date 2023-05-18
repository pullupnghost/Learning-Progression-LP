<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['email'];
        $email = $_POST['email'];

    //? htmlspecialchars() - Converte caracteres especiais para entidades HTML.
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

    //? filter_var() - Filtra variáveis com o filtro especificado.	
        $name3 = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // filter_input() - Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //? FILTER_VALIDATE_INT - Verifica se o valor é um inteiro.
    //? FILTER_VALIDATE_STRING - Verifica se o valor é uma string.
    //? FILTER_VALIDATE_BOOLEAN - Verifica se o valor é um booleano.
    //? FILTER_VALIDATE_FLOAT - Verifica se o valor é um float.
    //? FILTER_VALIDATE_EMAIL - Verifica se o valor é um email.
    //? FILTER_VALIDATE_REGEXP - Verifica se o valor corresponde a uma expressão regular.
    //? FILTER_VALIDATE_URL - Verifica se o valor é uma URL.
    //? FILTER_VALIDATE_DOMAIN - Verifica se o valor é um domínio.
    //? FILTER_VALIDATE_IP - Verifica se o valor é um IP.
    //? FILTER_VALIDATE_MAC - Verifica se o valor é um endereço MAC.
    //? FILTER_VALIDATE_ENCODED - Verifica se o valor é uma string codificada.

    //* FILTER_SANITIZE_STRING - Converte string para uma string com apenas alphanumericos, espaços, e ( -  _ . : / ).
    //* FILTER_SANITIZE_EMAIL - Converte string para email válido.
    //* FILTER_SANITIZE_URL - Converte string para URL válido.
    //* FILTER_SANITIZE_NUMBER_INT - Converte string para Inteiro.
    //* FILTER_SANITIZE_NUMBER_FLOAT - Converte string para Float.
    //* FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML - codifica caracteres especiais, mantém espaços e a maioria dos outros caracteres.
    } 
?>

<form action="<?php 
                    echo htmlspecialchars($_SERVER['PHP_SELF']);  //! Protege de Ataques XSS(Cross Site Scripting).
                ?>" 
method="POST">
    <div>
        <label>Nome: </label>
        <input type="text" name="name">
    </div>
        <br>
    <div>
        <label>Email: </label>
        <input type="email" name="email">
    </div>
        <br>
    <input type="submit" name="submit" value="Submit">
</form>