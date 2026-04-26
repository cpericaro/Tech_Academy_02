<?php
$titulo = 'Aulas | Prof. Helo';
require 'includes/header.php';
require 'data/aulas.php';
?>

<section class="py-5 mt-5 pt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="titulo-secao">Faca aulas comigo</h1>
            <div class="divisor-secao"></div>
            <p class="text-muted col-md-6 mx-auto">
                Ofereco tres modalidades pensadas para diferentes faixas etarias e objetivos.
                Entre em contato para saber horarios e valores.
            </p>
        </div>

        <?php foreach ($aulas as $i => $aula): ?>
        <div class="row align-items-center mb-5 g-4 <?php echo $i % 2 !== 0 ? 'flex-md-row-reverse' : ''; ?>">
            <div class="col-md-5">
                <img
                    src="<?php echo $aula['img']; ?>"
                    alt="<?php echo $aula['nome']; ?>"
                    class="img-fluid rounded-4 shadow-sm"
                    style="max-height: 400px; width: 100%; object-fit: cover;"
                >
            </div>
            <div class="col-md-7">
                <span class="badge-faixa mb-2 d-inline-block"><?php echo $aula['faixa']; ?></span>
                <h2 class="h3 mb-3"><?php echo $aula['nome']; ?></h2>
                <p class="text-muted"><?php echo $aula['desc']; ?></p>
                <a
                    href="https://wa.me/5544998705651?text=Ola%20Prof.%20Helo!%20Tenho%20interesse%20nas%20aulas%20de%20<?php echo rawurlencode($aula['nome']); ?>"
                    target="_blank"
                    class="btn-rosa d-inline-block mt-2"
                >
                    <i class="bi bi-whatsapp me-2"></i>Quero me matricular
                </a>
            </div>
        </div>
        <?php if ($i < count($aulas) - 1): ?>
        <hr style="border-color: #f0d0dc; margin: 2rem 0;">
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>

<section class="py-5 secao-cta text-white text-center">
    <div class="container">
        <h3 class="mb-3">Ainda tem duvidas?</h3>
        <p class="opacity-75 mb-4">Manda uma mensagem que eu te explico tudo sobre as turmas e horarios.</p>
        <a href="https://wa.me/5544998705651" target="_blank" class="btn-outline-branco">
            <i class="bi bi-whatsapp me-2"></i> Falar no WhatsApp
        </a>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
