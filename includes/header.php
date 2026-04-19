<?php
$pagina_atual = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo : 'Prof. Helo | Ballet e Jazz'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" id="navbar-principal">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo/logo_principal.png" alt="Prof. Helo" height="55">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu-nav">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link <?php echo $pagina_atual === 'index' ? 'ativo' : ''; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pagina_atual === 'sobre' ? 'ativo' : ''; ?>" href="sobre.php">Quem Sou</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pagina_atual === 'aulas' ? 'ativo' : ''; ?>" href="aulas.php">Aulas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pagina_atual === 'galeria' ? 'ativo' : ''; ?>" href="galeria.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $pagina_atual === 'curiosidades' ? 'ativo' : ''; ?>" href="curiosidades.php">Curiosidades</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="btn btn-rosa-sm" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
