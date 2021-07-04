<?php
session_start();

include_once("conexao.php");

$login = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$query = "select id, usuario from usuarios where (usuario='$login' or email='$login') and (senha=md5('$senha'))";

$verificar = mysqli_query($conexao, $query);

$rows = mysqli_num_rows($verificar);

if ($rows == 1) {
    $resultado = mysqli_fetch_assoc($verificar);
    $_SESSION['usuario'] = $resultado['usuario'];
    header("Location: painel.php");
    exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header("Location: login.php");
        exit();
        }
?>