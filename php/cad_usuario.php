<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];
$celular = $_POST['celular'];

include 'conexao.php';

$insert = "INSERT INTO tb_usuario(null, '$nome', '$email', '$senha', '$celular')";
?>