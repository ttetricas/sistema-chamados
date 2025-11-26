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

print_r($_POST);
print_r($resultado);


?>