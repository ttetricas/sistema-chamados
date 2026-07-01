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
  <title>Chamados - Helpard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chamados.css">
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
      <a href="chamados.php" class="active"><i class="bi bi-list-ul"></i> Chamados</a>
      <a href="faq.php"><i class="bi bi-question-circle"></i> FAQ</a>
    </nav>

    <a href="logout.php" class="sair">
      <i class="bi bi-box-arrow-right"></i> Sair
    </a>

  </aside>

  <main class="content">

    <div class="card-home">

      <h4>Status dos Chamados</h4>

      <div class="status-container">

        <button class="status-btn aberto">
          <i class="bi bi-folder2-open"></i> Abertos
        </button>

        <button class="status-btn concluido">
          <i class="bi bi-check-circle-fill"></i> Concluídos
        </button>

        <button class="status-btn pendente">
          <i class="bi bi-hourglass-split"></i> Pendentes
        </button>

      </div>

    </div>

  </main>

</div>
</body>
</html>