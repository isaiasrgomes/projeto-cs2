<?php
include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="floating-labels/floating-labels.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">

        <form action="funcoes.php" method="POST" class="form-signin">

            <div class="text-center mb-4">
                <h1 class="text-light">Cadastre-se</h1>
            </div>

            <input type="hidden" name="operacao" value="cadastrarUsuario">

            <div class="form-label-group">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required>
                <label for="nome">Nome </label>

            </div>

            <div class="form-label-group">
                <input type="email" name="email" id="email" placeholder="example@mail.com" class="form-control" required>
                <label for="email">E-mail </label>

            </div>

            <div class="form-label-group">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control" required>

                <label for="senha">Senha </label>
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-lg btn-dark btn-block">
        </form>

        <p class="text-center cad-link">Já possui uma conta? clique <a href="login.php">aqui</a> para fazer login</p>

        <script src="js/bootstrap.min.js"></script>
    </div>
</body>

</html>