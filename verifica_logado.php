<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: painel.php");
    exit();
    }
?>