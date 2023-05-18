<?php
    if (isset($_POST['submit'])) {
        // echo '<h3>' . $_GET['username'] . '</h3>';
        echo '<h3>' . $_POST['username'] . '</h3>';
    } 
?>

<a href="<?php 
            echo $_SERVER['PHP_SELF']; //* Envia Dados para a mesma página através de um link.
        ?>?username=Joao">Link</a>

<br><br>
<form action="<?php 
                echo $_SERVER['PHP_SELF']; //* Envia Dados para a mesma página através de um formulário.
            ?>" method="POST">
    <div>
        <label>Nome: </label>
        <input type="text" name="username">
    </div>
        <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
        <br>
    <input type="submit" name="submit" value="Submit">
</form>