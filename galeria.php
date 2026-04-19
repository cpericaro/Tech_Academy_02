<?php
$titulo = 'Galeria | Prof. Helo';
require 'includes/header.php';

$fotos_sala = glob('assets/img/sala/*.jpeg');
$fotos_espe = glob('assets/img/espetaculos/*.jpeg');
?>

<section class="py-5 mt-5 pt-5">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="titulo-secao">Galeria de Fotos</h1>
            <div class="divisor-secao"></div>
            <p class="text-muted">Momentos de aulas, espetaculos e apresentacoes.</p>
        </div>

        <ul class="nav nav-pills justify-content-center mb-4 gap-2" id="abas-galeria">
            <li class="nav-item">
                <button class="nav-link active px-4" data-bs-toggle="pill" data-bs-target="#aba-sala">
                    Sala de Aula
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link px-4" data-bs-toggle="pill" data-bs-target="#aba-espetaculos">
                    Espetaculos
                </button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="aba-sala">
                <?php if (empty($fotos_sala)): ?>
                    <p class="text-center text-muted">Nenhuma foto encontrada.</p>
                <?php else: ?>
                <div class="row g-3">
                    <?php foreach ($fotos_sala as $foto): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img
                            src="<?php echo $foto; ?>"
                            class="foto-galeria"
                            alt="Sala de aula"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-foto"
                            data-src="<?php echo $foto; ?>"
                        >
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="tab-pane fade" id="aba-espetaculos">
                <?php if (empty($fotos_espe)): ?>
                    <p class="text-center text-muted">Nenhuma foto encontrada.</p>
                <?php else: ?>
                <div class="row g-3">
                    <?php foreach ($fotos_espe as $foto): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img
                            src="<?php echo $foto; ?>"
                            class="foto-galeria"
                            alt="Espetaculo"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-foto"
                            data-src="<?php echo $foto; ?>"
                        >
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Modal para abrir foto em tamanho maior -->
<div class="modal fade" id="modal-foto" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center p-2">
                <img id="foto-ampliada" src="" alt="Foto ampliada" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>
