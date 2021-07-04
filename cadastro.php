<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <h1>CADASTRO</h1>
    <div class="verificacoes">
        <?php 
            if (isset($_SESSION['usuario_existe'])):
        ?>
            <div class="erro_usuario">
                <p>Usuário já cadastrado.</p>
            </div>
        <?php 
            elseif (isset($_SESSION['email_existe'])):
        ?>
            <div class="erro_email">
                <p>Email já cadastrado.</p>
            </div>
        <?php 
            elseif (isset($_SESSION['senha_diferente'])):
        ?>
            <div class="erro_senha">
                <p>As senhas não coincidem.</p>
            </div>
        <?php
            endif;
            unset($_SESSION['usuario_existe']);
            unset($_SESSION['email_existe']);
            unset($_SESSION['senha_diferente']);
        ?>
    </div>
    <div class="formulario">
        <form method="POST" action="scadastro.php">
            <label for="fusuario" id="utext">Nome de usuário</label>
            <input type="text" id="fusuario" name="usuario" minlength="4" maxlength="15" required><br><br>
            <label for="femail" id="etext">E-mail</label>
            <input type="email" id="femail" name="email" maxlength="50" required><br><br>
            <label for="fsenha" id="stext">Senha</label>
            <input type="password" id="fsenha" name="senha" maxlength="20" required><br><br>
            <label for="frepita" id="rtext">Repita a senha</label>
            <input type="password" id="frepita" name="repita" minlength="6" maxlength="20" required><br><br>
            <input type="submit" id="fcadastrar" name="cadastrar" value="CADASTRAR">
        </form>
    </div> 
    <footer>
        <h1>By Héctor França</h1>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cadastro.js"></script>
</html>