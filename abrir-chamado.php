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
  <title>Abrir Chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/abrir-chamado.css">
</head>
<body>

  <div class="d-flex">
    <!-- MENU LATERAL -->
    <div class="sidebar d-flex flex-column align-items-center p-4 text-white">
      <div class="user-icon mb-4">
        <i class="bi bi-person" style="font-size: 4rem;"></i>
      </div>
        <!-- ola usuario -->
        <p class="text-center mb-4">Olá, <?php echo $nm_usuario; ?>!</p>
        
      <a href="home.php" class="menu-item"><i class="bi bi-house"></i> HOME</a>
      <a href="abrir-chamado.php" class="menu-item active"><i class="bi bi-plus-circle"></i> ABRIR CHAMADO</a>
      <a href="chamados.html" class="menu-item"><i class="bi bi-star"></i> CHAMADOS</a>
            <a href="logout.php" class="btn btn-logout"><i class="bi bi-box-arrow-right me-2"></i> SAIR</a>
    </div>
    <!-- CONTEÚDO -->
    <div class="content p-5 flex-grow-1">
      <div class="home-box p-5">
        <h4 class="mb-4">Abrir Novo Chamado</h4>
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Tipo</label>
              <select id="tipo" name="tipo" class="form-select">
                  <?php
                    include 'php/conexao.php';
                    $select = "SELECT * FROM tb_tipo";
                    $query = $conexao->query($select);
                    while ($resultado = $query->fetch_assoc()) { ?>

                    <option value="id_tipo"><?php echo $resultado['nm_tipo'] ?></option>

                    <?php } 
                  ?>                
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Categoria</label>
              <select id="categoria" name="categoria" class="form-select">
              <?php
                include 'php/conexao.php';
                $select = "SELECT * FROM tb_categoria";
                $query = $conexao->query($select);
                while ($resultado = $query->fetch_assoc()) { ?>
                  <option value="<?php echo $resultado['id_categoria']?>"> <?php echo $resultado['nm_categoria']?></option>
                <?php }
              ?>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Urgência</label>
              <select id="urgencia" name="urgencia" class="form-select">
              <?php
                include 'php/conexao.php';
                $select = "SELECT * FROM tb_urgencia";
                $query = $conexao->query($select);
                while ($resultado = $query->fetch_assoc()) { ?>
                  <option value="<?php echo $resultado['id_urgencia']?>"><?php echo $resultado['nm_urgencia']?></option>
                <?php }
              ?>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Título</label>
              <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Digite o título">
            </div>
          </div>

          <div class="mb-4">
            <label class="form-label">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" placeholder="Descreva o problema"></textarea>
          </div>

          <button type="submit" class="btn btn-dark px-5 rounded-pill">Criar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
</body>
</html>
