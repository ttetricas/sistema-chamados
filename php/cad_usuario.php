<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];
$celular = $_POST['celular'];

include 'conexao.php';

$insert = "INSERT INTO tb_usuario VALUE (null, '$nome', '$email', '$senha', '$celular')";

$query = $conexao->query($insert);

if ($query == true) {
    echo "<script> alert('Usuario cadastrado com sucesso!'); window.location.href = '../index.html';</script>";
}

?>