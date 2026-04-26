window.addEventListener('scroll', function() {
    var nav = document.getElementById('navbar-principal');
    if (!nav) return;

    if (window.scrollY > 20) {
        nav.classList.add('navbar-scrolled');
    } else {
        nav.classList.remove('navbar-scrolled');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('modal-foto');
    if (!modal) return;

    modal.addEventListener('show.bs.modal', function(e) {
        var src = e.relatedTarget.getAttribute('data-src');
        document.getElementById('foto-ampliada').src = src;
    });

    modal.addEventListener('hidden.bs.modal', function() {
        document.getElementById('foto-ampliada').src = '';
    });
});
