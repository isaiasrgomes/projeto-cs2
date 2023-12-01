<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="floating-labels/floating-labels.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">


        <form action="funcoes.php" method="POST" class="form-signin">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal text-light">Login</h1>
            </div>

            <input type="hidden" name="operacao" value="login">

            <div class="form-label-group">
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" class="form-control" required autofocus>
                <label for="email">Digite seu E-mail </label>
            </div>

            <div class="form-label-group">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control" required>
                <label for="senha">Digite sua senha </label>

            </div>

            <input type="submit" value="Entrar" class="btn btn-dark btn-lg btn-primary btn-block">
        </form>

        <a href="cadastrar.php" class="text-center cad-link">
            <p>Cadastrar novo usuário</p>
        </a>

        <script src="js/bootstrap.min.js"></script>
    </div>
</body>

</html>