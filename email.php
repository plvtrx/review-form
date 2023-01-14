<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
// varivel, comando, servidor, usuario, senha, nome do banco de dados
$SQL = mysqli_connect("localhost", "root", "", "FormESTUDO");

if (
    isset($_POST['nome']) && !empty($_POST['nome']) &&
    ($_POST['email']) && !empty($_POST['email']) &&
    ($_POST['mensagem']) && !empty($_POST['mensagem'])
) {
    mysqli_query($SQL, "insert into dados (nome, email,mensagem) values('$nome', '$email','$mensagem')");
    $validar = true;
} else {
    $validar = false;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./CSS/email.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
</head>

<body>
    <header>
        <?php
        if ($validar == true) {
            echo ('<h1>Enviado com sucesso</h1>');
        } else {
            echo ('Por favor insira informações validas');
        }
        ?>
    </header>

    <main>
    <?php
        if ($validar == true) {
            echo ('<div class="fundo-true"> </div>');
        } else {
            echo ('<div class="fundo-false"> </div>');
        }
        ?>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>