<?php
    session_start(); //* Chamado sempre no início do código
 /*
  ? Aletanativa ao filter_input()
    * $username = $_POST['username'];
    * $password = $_POST['password'];
*/
    if (isset($_POST['submit'])) {
        $username = filter_input(
            INPUT_POST, //* Tipo de Input
            'username', //* Nome do Input
            FILTER_SANITIZE_FULL_SPECIAL_CHARS //* Tipo de filtro
        );
        $password = filter_input(
            INPUT_POST, //* Tipo de Input
            'password', //* Nome do Input
            FILTER_SANITIZE_FULL_SPECIAL_CHARS //* Tipo de filtro
        );

        if ($username == 'joao' && $password == 'varela') {
            $_SESSION['username'] = $username; //* Criar uma variável de sessão

            header('Location: ./extras/dashboard.php'); //* Redirecionar para a página seguinte
        } else {
            echo 'Nome ou Password Incorreto!'; //* Mensagem de erro
        }
    }
?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label>Nome de Utilizador: </label>
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