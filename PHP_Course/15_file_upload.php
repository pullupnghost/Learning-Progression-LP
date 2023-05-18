<?php
  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 if(isset($_POST['submit'])) {

   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name']; //* Apanha o nome do ficheiro.
    $file_size = $_FILES['upload']['size'];  //* Apanha o tamanho do ficheiro em bytes.
    $file_tmp = $_FILES['upload']['tmp_name']; //* Apanha o caminho do ficheiro temporário no servidor.
    $target_dir = "./uploads/$file_name"; //* Apanha o caminho do ficheiro no servidor.

    $file_ext = explode('.', $file_name); //* Apanha a extensão do ficheiro.
    $file_ext = strtolower(end($file_ext)); //* Converte a extensão do ficheiro para minúsculas.

    //* Valida se a extensão do ficheiro é permitida.
        if(in_array($file_ext, $allowed_ext)) {
            //* Valida se o tamanho do ficheiro é menor ou igual a 1MB.
                if($file_size <= 1000000) { //! 1000000 bytes = 1MB
                    
                    move_uploaded_file($file_tmp, $target_dir); //* Move o ficheiro para a pasta uploads.

                    echo '<p style="color: green;">Ficheior Enviado!</p>'; //* Mensagem de sucesso(opcional).
                } else {
                    echo '<p style="color: red;">Ficheiro demasiado grande!</p>'; //* Mensagem de erro(opcional).
                }
        } else {
            $message = '<p style="color: red;">Tipo de ficheiro inválido!</p>';
        }
   } else {
        $message = '<p style="color: red;">Por favor escolha um ficheiro</p>';
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php 
        echo $message ?? null; //* Local no HTML onde vai ser chamado o erro
    ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data"><?php //* enctype="multipart/form-data" é obrigatório para fazer upload de ficheiros. ?>
    Selecione uma Imagem:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>