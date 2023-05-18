<?php
    session_start();

    session_destroy(); //? Destroi a sessão, mas os dados das variáveis de sessão ainda existem. (Base de dados, cookies, .txt, etc.)

    header('Location: ../13_sessions.php');
?>