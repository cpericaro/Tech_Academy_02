<?php
$titulo = 'Curiosidades | Prof. Helo';
require 'includes/header.php';
require 'data/curiosidades.php';
?>

<section class="py-5 mt-5 pt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="titulo-secao">Curiosidades da Danca</h1>
            <div class="divisor-secao"></div>
            <p class="text-muted col-md-6 mx-auto">
                Voce sabia? Confira alguns fatos curiosos sobre o mundo do ballet e da danca.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($curiosidades as $i => $item): ?>
            <div class="col-md-6">
                <div class="card-curiosidade">
                    <span class="numero-curiosidade"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <h5 class="mt-2 mb-2"><?php echo $item['titulo']; ?></h5>
                    <p class="text-muted mb-0 small"><?php echo $item['texto']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Imagem decorativa -->
<section class="py-5" style="background-color: var(--rosa-claro);">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-md-3">
                <img src="assets/img/espetaculos/espe_01.jpeg" alt="Espetaculo" class="img-fluid rounded-4">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/img/espetaculos/espe_02.jpeg" alt="Espetaculo" class="img-fluid rounded-4">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/img/espetaculos/espe_03.jpeg" alt="Espetaculo" class="img-fluid rounded-4">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/img/espetaculos/espe_04.jpeg" alt="Espetaculo" class="img-fluid rounded-4">
            </div>
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
