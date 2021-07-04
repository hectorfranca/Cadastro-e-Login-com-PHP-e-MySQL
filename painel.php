<?php
include_once("verifica_nao_autenticado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="painel.css">
    <title>Painel usuário</title>
</head>
<body>
    <p id="titulo">Olá, <?php echo $_SESSION['usuario']; ?>,</p><br><br>
    <p id="subtitulo">AGORA VOCÊ ESTÁ LOGADO.</p>
    <p id="agradecimento">OBRIGADO POR TESTAR NOSSO SISTEMA!</p>
    <input type="button" id="bsair" value="SAIR" onclick="Sair();">
    <footer>
        <h1>By Héctor França</h1>
    </footer>
</body>
<script src="painel.js"></script>
</html>