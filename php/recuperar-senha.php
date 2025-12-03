<?php
session_start();
include 'php/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verifica se o e-mail existe no banco
    $query = $conexao->prepare("SELECT id_usuario, nm_usuario FROM tb_usuario WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Usuário existe, aqui você enviaria o e-mail com link de redefinição
        echo "<script>alert('E-mail encontrado! Um link de redefinição foi enviado.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('E-mail não cadastrado.'); history.back();</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recuperar Senha</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card p-4" style="width:350px;">
        <h3 class="text-center mb-3">Recuperar Senha</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Digite seu e-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
            <div class="mt-3 text-center">
                <a href="login.php">Voltar ao login</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
