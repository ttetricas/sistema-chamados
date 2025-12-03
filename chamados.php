<?php
  session_start();

  // verifica se o usuario não esta logado
  if(!isset($_SESSION['id_usuario'])){
    echo "<script>alert('Você não está logado!'); history.back();</script>";
    exit();
  }

  // pegar o nome do usuario logado
  $nm_usuario = $_SESSION['nm_usuario'];

  // incluir o arquivo de conexao
  include 'php/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chamados.css">
</head>
<body>
  <div class="d-flex">
    <!-- Menu lateral -->
    <div class="sidebar d-flex flex-column align-items-center p-4 text-white">
      <div class="user-icon mb-4">
        <i class="bi bi-person" style="font-size: 4rem;"></i>
      </div>

      <!-- ola usuario -->
      <p class="text-center mb-4">Olá, <?php echo $nm_usuario; ?>!</p>

      <a href="home.php" class="menu-item"><i class="bi bi-house"></i> HOME</a>
      <a href="abrir-chamado.php" class="menu-item"><i class="bi bi-plus-circle"></i> ABRIR CHAMADO</a>
      <a href="chamados.php" class="menu-item active"><i class="bi bi-star"></i> CHAMADOS</a>
      <a href="faq.html" class="menu-item"><i class="bi bi-question-circle"></i> FAQ</a>
      <a href="logout.php" class="btn btn-logout"><i class="bi bi-box-arrow-right me-2"></i> SAIR</a>
    </div>

    <!-- Conteúdo principal -->
    <div class="content p-5 flex-grow-1">
      <div class="home-box p-5">
        <h4 class="mb-4">Status dos Chamados</h4>
      <div class="status-container">
        <button class="status-btn aberto">
          <i class="bi bi-folder2-open icon-status"></i> Abertos
        </button>
        <button class="status-btn concluido">
          <i class="bi bi-check-circle-fill icon-status"></i> Concluídos
        </button>
        <button class="status-btn pendente">
          <i class="bi bi-hourglass-split icon-status"></i> Pendentes
        </button>
      </div>
      </div>
    </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
</body>
</html>
