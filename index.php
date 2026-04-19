<?php
$titulo = 'Prof. Helo | Ballet e Jazz em Campo Mourao';
require 'includes/header.php';
require 'data/aulas.php';
?>

<!-- Hero -->
<section class="hero d-flex align-items-center" style="background-image: url('assets/img/profhelo/helo_01.jpeg');">
    <div class="hero-overlay"></div>
    <div class="container hero-conteudo">
        <div class="col-md-7 col-lg-6">
            <p class="hero-subtitulo">Ballet &amp; Jazz &mdash; Campo Mourao, PR</p>
            <h1 class="hero-titulo">Prof. Helo</h1>
            <p class="hero-texto">
                Heloísa Periçaro &mdash; Bailarina Profissional e Professora apaixonada na dança com propósito.
                Uma ferramenta de desenvolvimento motor, cognitivo e emocional, respeitando o tempo, individualidade e a forma única de cada um de existir e se expressar.
                a individualidade e a forma única de cada um de existir e se expressar.
            </p>
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a href="aulas.php" class="btn-rosa">Conheca as Aulas</a>
                <a href="https://wa.me/5544998705651" target="_blank" class="btn-outline-branco">
                    <i class="bi bi-whatsapp me-1"></i> Fale Comigo
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Apresentacao rapida -->
<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="titulo-secao">Bem-vinda</h2>
        <div class="divisor-secao"></div>
        <p class="col-md-7 mx-auto text-muted">
            Ofereco aulas de Ballet Classico e Jazz para criancas e adultos.
            Meu objetivo e que cada aluna se descubra na danca com seguranca, alegria e evolucao constante.
        </p>
    </div>
</section>

<!-- Cards de aulas -->
<section class="py-5" style="background-color: var(--rosa-claro);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="titulo-secao">Modalidades</h2>
            <div class="divisor-secao"></div>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($aulas as $aula): ?>
            <div class="col-md-4">
                <div class="card-aula h-100">
                    <img src="<?php echo $aula['img']; ?>" alt="<?php echo $aula['nome']; ?>">
                    <div class="card-aula-corpo">
                        <span class="badge-faixa"><?php echo $aula['faixa']; ?></span>
                        <h5 class="mt-2 mb-2"><?php echo $aula['nome']; ?></h5>
                        <p class="text-muted small"><?php echo $aula['resumo']; ?></p>
                        <a href="aulas.php" class="link-saiba">Saiba mais &rarr;</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Parceiro PasClassique -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="caixa-parceiro">
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                    <p class="text-uppercase text-muted small mb-1" style="letter-spacing: 0.1em;">Parceria Oficial</p>
                    <h3 class="mb-2">PasClassique</h3>
                    <p class="text-muted">
                        Sou embaixadora da PasClassique, uma das maiores lojas de produtos para danca do Brasil.
                        Use meu cupom e ganhe 20% de desconto em toda a loja.
                    </p>
                </div>
                <div class="col-md-5 text-center">
                    <p class="text-muted small mb-2">Cupom de desconto:</p>
                    <div class="cupom">HELO20</div>
                    <a href="https://www.pasclassique.com.br/discount/HELO20" target="_blank" class="btn-rosa d-inline-block mt-3">
                        Comprar com desconto
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA final -->
<section class="py-5 secao-cta text-white text-center">
    <div class="container">
        <h2 class="mb-3">Pronta para comecar?</h2>
        <p class="mb-4 opacity-75">Entre em contato e saiba sobre horarios, valores e matriculas.</p>
        <a href="https://wa.me/5544998705651?text=Ola%20Prof.%20Helo!%20Gostaria%20de%20saber%20mais%20sobre%20as%20aulas." target="_blank" class="btn-outline-branco">
            <i class="bi bi-whatsapp me-2"></i> Chamar no WhatsApp
        </a>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
