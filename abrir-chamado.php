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
  <title>Abrir Chamado - helpard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/abrir-chamado.css">
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
      <a href="abrir-chamado.php" class="active"><i class="bi bi-plus-circle"></i> Abrir chamado</a>
      <a href="chamados.php"><i class="bi bi-list-ul"></i> Chamados</a>
      <a href="faq.php"><i class="bi bi-question-circle"></i> FAQ</a>
    </nav>

    <a href="logout.php" class="sair">
      <i class="bi bi-box-arrow-right"></i> Sair
    </a>

  </aside>

  <main class="content">

    <div class="card-form">

      <h4>Abrir novo chamado</h4>

      <form method="POST" action="php/cad_chamados.php">

        <div class="grid">

          <div class="campo">
            <label>Tipo</label>
            <select name="tipo">
              <?php
                $query = $conexao->query("SELECT * FROM tb_tipo");
                while ($r = $query->fetch_assoc()) {
              ?>
                <option value="<?php echo $r['id_tipo']; ?>">
                  <?php echo $r['nm_tipo']; ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class="campo">
            <label>Categoria</label>
            <select name="categoria">
              <?php
                $query = $conexao->query("SELECT * FROM tb_categoria");
                while ($r = $query->fetch_assoc()) {
              ?>
                <option value="<?php echo $r['id_categoria']; ?>">
                  <?php echo $r['nm_categoria']; ?>
                </option>
              <?php } ?>
            </select>
          </div>

        </div>

        <div class="grid">

          <div class="campo">
            <label>Urgência</label>
            <select name="urgencia">
              <?php
                $query = $conexao->query("SELECT * FROM tb_urgencia");
                while ($r = $query->fetch_assoc()) {
              ?>
                <option value="<?php echo $r['id_urgencia']; ?>">
                  <?php echo $r['nm_urgencia']; ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class="campo">
            <label>Título</label>
            <input type="text" name="titulo" placeholder="Digite o título">
          </div>

        </div>

        <div class="campo">
          <label>Descrição</label>
          <textarea name="descricao" rows="4" placeholder="Descreva o problema"></textarea>
        </div>

        <button type="submit" class="btn-principal">Criar chamado</button>

      </form>

    </div>

  </main>

</div>

</body>
</html>
