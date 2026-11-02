<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.querySelectorAll('#sidebar a.nav-link[href^="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href').substring(1);
        const target = document.getElementById(targetId);

        if (!target) return;

        e.preventDefault();

        document.querySelectorAll('#sidebar a.nav-link').forEach(item => {
        item.classList.remove('active');
    });

    this.classList.add('active');

    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.add('d-none');
    });

        target.classList.remove('d-none');
    });
});
</script>
