<?php
//receber dados do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];

//incluir arquivo de conexao
 
include 'conexao.php';

//colocar a intrução select dentro da variavel select

$select = "SELECT * FROM tb_usuario WHERE email = '$email'";

//executar a instrução sql com a função query()

$query = $conexao->query($select);

//pegar o primeiro registro do select e armazenar na variavel resultado

$resultado = $query->fetch_assoc();

$email_banco = $resultado ['email'];
$senha_banco = $resultado ['senha'];


if ($email == $email_banco && $senha == $senha_banco) {
    session_start();
    $_SESSION['id_usuario'] = $resultado ['id'];
    header('location: ../home.php');

}else{

    echo "<script> alert('Usuario ou senha invalida!'); history.back() </script>";
}

?>