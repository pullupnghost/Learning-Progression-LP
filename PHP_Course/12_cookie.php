<?php
//? Definir um Cookie
    setcookie('name', 'Brad', time() + 86400 * 30); // 86400 = 1 dia


//? Buscar um Cookie
    if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
    }

//? Eliminar um Cookie
    setcookie('name', '', time() - 86400);
?>