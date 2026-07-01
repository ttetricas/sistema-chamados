<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saindo - Helpard</title>

    <link rel="stylesheet" href="css/logout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>

    <div class="logout-card">
        <i class="bi bi-box-arrow-right icon"></i>

        <h2>Você saiu do sistema</h2>
        <p>Redirecionando para a página inicial...</p>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "index.html";
        }, 2500);
    </script>

</body>
</html>