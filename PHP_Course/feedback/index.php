<?php include 'inc/header.php'; ?>

<?php
//* LImpa as variaveis
    $nome = $email = $body = '';
    $nameErr = $emailErr = $bodyErr = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameErr = 'Nome é obrigatório';
    } else {
        $nome = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //* $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email é obrigatório';
    } else {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        //* $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    if (empty($_POST['body'])) {
        $bodyErr = 'Body é obrigatório';
    } else {
        $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //* $body = filter_input(INPUT_POST,'body',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

//? Verifiqua se não há erros
    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
     //* Adiciona à base de dados
        $sql = "INSERT INTO feedback (nome, email, body) VALUES (:nome, :email, :body)";
        $stmt = $conn->prepare($sql);

        try {
            $stmt->execute([':nome' => $nome,':email' => $email,':body' => $body]);

            if ($stmt) {
            //* Sucesso
                header('Location: feedback.php');
                    exit; 
            } else {
            //! Erro
                echo 'Erro ao executar a consulta.';
            }
        } catch (PDOException $e) {
            echo 'Erro na execução da consulta: ' . $e->getMessage();
        }
    }
}
?>
<!-- Continuação do header.php -->
<img src="../../null_logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?: 'is-invalid'; ?>" id="name" name="name" placeholder="Insira um nome" value="<?php echo $nome; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Por favor preencha os dados todos.
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?: 'is-invalid'; ?>" id="email" name="email" placeholder="Insira um email" value="<?php echo $email; ?>">
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?: 'is-invalid'; ?>" id="body" name="body" placeholder="Feedback"><?php echo $body; ?></textarea>
    </div>

    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>
<?php include 'inc/footer.php'; ?>