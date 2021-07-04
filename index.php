<?php
include_once("verifica_logado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Home</title>
</head>
<body>
    <h1>SISTEMA DE CADASTRO COM PHP E MYSQL</h1>
    <div class="botoes">
        <input type="button" id="bentrar" value="ENTRAR" onclick="Login();">
        <input type="button" id="bcadastro" value="CADASTRE-SE" onclick="Cadastro();">
    </div>
    <footer>
        <h1>By Héctor França</h1>
    </footer>
</body>
<script src="index.js"></script>
</html>