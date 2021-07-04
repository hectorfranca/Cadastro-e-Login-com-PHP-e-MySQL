<?php
include_once("conexao.php");
session_start();

$usuario = mysqli_real_escape_string ($conexao, trim($_POST['usuario']));
$email = mysqli_real_escape_string ($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string ($conexao, trim(md5($_POST['senha'])));
$repita = mysqli_real_escape_string ($conexao, trim(md5($_POST['repita']))); 

$verificausuario = "select id, usuario from usuarios where usuario = '$usuario'";
$executausuario = mysqli_query($conexao, $verificausuario);
$rowusuario = mysqli_num_rows($executausuario);

$verificaemail = "select id, usuario from usuarios where email = '$email'";
$executaemail = mysqli_query($conexao, $verificaemail);
$rowemail = mysqli_num_rows($executaemail);

if ($rowusuario == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit();
    }
else if ($rowemail == 1) {
    $_SESSION['email_existe'] = true;
    header('Location: cadastro.php');
    exit();
    }
else if ($repita != $senha) {
    $_SESSION['senha_diferente'] = true;
    header('Location: cadastro.php');
    exit();
    }

$sql = "insert into usuarios value (default, '$usuario', '$email', '$senha', NOW())";
$salvar = mysqli_query($conexao, $sql);

if ($salvar == true) {
    $_SESSION['cadastro_efetuado'] = true;
    header('Location: login.php');
    exit();
    }

mysqli_close($conexao);
?>