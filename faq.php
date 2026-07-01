<?php
    session_start();

    if(!isset($_SESSION['id_usuario'])){
        echo "<script>alert('Você não está logado!'); history.back();</script>";
        exit();
    }

    $nm_usuario = $_SESSION['nm_usuario'];

    include 'php/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FAQ - Helpard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/faq.css">
</head>

<body>

<div class="layout">

    <aside class="sidebar">
        <img src="assets/logo.png" class="logo-sidebar" alt="Helpard">

        <div class="perfil">
            <i class="bi bi-person-circle"></i>
            <span>Olá, <?php echo $nm_usuario; ?></span>
        </div>

        <nav class="menu">
            <a href="home.php"><i class="bi bi-house"></i> Home</a>
            <a href="abrir-chamado.php"><i class="bi bi-plus-circle"></i> Abrir chamado</a>
            <a href="chamados.php"><i class="bi bi-list-ul"></i> Chamados</a>
            <a href="faq.php" class="active"><i class="bi bi-question-circle"></i> FAQ</a>
        </nav>

        <a href="home.php" class="sair">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>

    </aside>

    <main class="content">

        <div class="card-faq">

            <h1>FAQ / Ajuda</h1>
            <p class="subtitulo">Principais dúvidas sobre o sistema</p>

            <div class="faq-item">
                <button class="faq-pergunta">Como criar um chamado?</button>
                <div class="faq-resposta">
                    <p>Para criar um chamado:</p>
                    <ol>
                        <li>Acesse “Abrir Chamado”.</li>
                        <li>Selecione tipo, categoria e urgência.</li>
                        <li>Preencha título e descrição.</li>
                        <li>Clique em criar.</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-pergunta">Onde acompanho meus chamados?</button>
                <div class="faq-resposta">
                    <p>Na página “Chamados”, você vê todos os status dos seus tickets.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-pergunta">Esqueci minha senha</button>
                <div class="faq-resposta">
                    <p>Use a opção “Esqueceu sua senha?” na tela de login.</p>
                </div>
            </div>

        </div>

    </main>

</div>

<script>
const perguntas = document.querySelectorAll(".faq-pergunta");

perguntas.forEach(btn => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("ativo");

        let resposta = btn.nextElementSibling;

        if (resposta.style.maxHeight) {
            resposta.style.maxHeight = null;
        } else {
            resposta.style.maxHeight = resposta.scrollHeight + "px";
        }
    });
});
</script>

</body>
</html>

