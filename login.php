<?php
include_once("verifica_logado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <div class="verificacoes" >
        <?php 
            if (isset($_SESSION['nao_autenticado'])):
        ?>
            <div class="erro_invalido">
                <p>Usuário ou senha inválido, tente novamente.</p>
            </div>
        <?php 
        elseif (isset($_SESSION['cadastro_efetuado'])):
    ?>
        <div class="cadastro_efetuado">
            <p>Cadastro efetuado com sucesso.</p>
        </div>
        <?php
            endif; 
            unset($_SESSION['nao_autenticado']);
            unset($_SESSION['cadastro_efetuado']);
        ?>
    </div>
    <div class="formulario">
        <form method="POST" action="slogin.php">
            <label for="fusuario" id="utext">Usuário ou E-mail</label>
            <input type="text" id="fusuario" name="usuario" maxlength="50" required><br><br>
            <label for="fsenha" id="stext">Senha</label>
            <input type="password" id="fsenha" name="senha" maxlength="20" required><br><br>
            <input type="submit" id="fentrar" name="entrar" value="ENTRAR">
        </form> 
    </div>
    <footer>
        <h1>By Héctor França</h1>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="login.js"></script>
</html>