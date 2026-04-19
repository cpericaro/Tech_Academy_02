<?php
$titulo = 'Contato | Prof. Helo';
require 'includes/header.php';
?>

<section class="py-5 mt-5 pt-5">
    <div class="container text-center">
        <h1 class="titulo-secao">Redes e Contato</h1>
        <div class="divisor-secao"></div>
        <p class="text-muted mb-5 col-md-5 mx-auto">
            Me encontre nas redes sociais ou manda uma mensagem direto pelo WhatsApp!
        </p>

        <div class="row justify-content-center g-4">
            <div class="col-10 col-md-5 col-lg-3">
                <a href="https://wa.me/5544998705651?text=Ola%20Prof.%20Helo!" target="_blank" class="text-decoration-none">
                    <div class="card-contato">
                        <i class="bi bi-whatsapp"></i>
                        <h5>WhatsApp</h5>
                        <p class="small text-muted">(44) 99870-5651</p>
                        <span class="btn-rosa d-inline-block">Chamar agora</span>
                    </div>
                </a>
            </div>
            <div class="col-10 col-md-5 col-lg-3">
                <a href="https://www.instagram.com/profhelo_" target="_blank" class="text-decoration-none">
                    <div class="card-contato">
                        <i class="bi bi-instagram"></i>
                        <h5>Instagram</h5>
                        <p class="small text-muted">@profhelo_</p>
                        <span class="btn-rosa d-inline-block">Seguir</span>
                    </div>
                </a>
            </div>
            <div class="col-10 col-md-5 col-lg-3">
                <a href="https://www.youtube.com/@profhelo" target="_blank" class="text-decoration-none">
                    <div class="card-contato">
                        <i class="bi bi-youtube"></i>
                        <h5>YouTube</h5>
                        <p class="small text-muted">@profhelo</p>
                        <span class="btn-rosa d-inline-block">Assistir</span>
                    </div>
                </a>
            </div>
            <div class="col-10 col-md-5 col-lg-3">
                <a href="mailto:heloisaproff@gmail.com" class="text-decoration-none">
                    <div class="card-contato">
                        <i class="bi bi-envelope"></i>
                        <h5>E-mail</h5>
                        <p class="small text-muted">heloisaproff@gmail.com</p>
                        <span class="btn-rosa d-inline-block">Enviar</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Cupom no contato tambem -->
<section class="py-5" style="background-color: var(--rosa-claro);">
    <div class="container text-center">
        <h4 class="mb-2">Loja PasClassique</h4>
        <p class="text-muted mb-3">Produtos para danca com 20% de desconto usando meu cupom:</p>
        <div class="cupom mb-3">HELO20</div>
        <a href="https://www.pasclassique.com.br/discount/HELO20" target="_blank" class="btn-rosa d-inline-block">
            Acessar a Loja
        </a>
    </div>
</section>

<?php require 'includes/footer.php'; ?>
