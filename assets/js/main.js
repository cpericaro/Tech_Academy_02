// Navbar: adiciona sombra ao rolar a pagina
window.addEventListener('scroll', function () {
    var nav = document.getElementById('navbar-principal');
    if (!nav) return;
    if (window.scrollY > 20) {
        nav.classList.add('navbar-scrolled');
    } else {
        nav.classList.remove('navbar-scrolled');
    }
});

// Galeria: ao clicar em uma foto, abre no modal com a imagem certa
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('modal-foto');
    if (!modal) return;

    modal.addEventListener('show.bs.modal', function (event) {
        var img = event.relatedTarget;
        var src = img.getAttribute('data-src');
        document.getElementById('foto-ampliada').src = src;
    });

    modal.addEventListener('hidden.bs.modal', function () {
        document.getElementById('foto-ampliada').src = '';
    });
});
