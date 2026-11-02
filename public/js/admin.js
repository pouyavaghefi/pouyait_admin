document.querySelectorAll('#sidebar a[href^="#"]').forEach(link => {
    link.addEventListener('click', () => {
        const title = document.querySelector('.navbar h5');

        if (title) {
            title.textContent = link.textContent.trim();
        }
    });
});
