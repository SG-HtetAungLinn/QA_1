<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const sidebarToggleIcon = document.getElementById('sidebarToggleIcon');

    function toggleSidebar() {
        const isOpen = sidebar.classList.contains('sidebar-open');
        if (isOpen) {
            sidebar.classList.remove('sidebar-open');
            sidebarOverlay.classList.remove('sidebar-overlay-show');
            sidebarToggleIcon.classList.remove('fa-times');
            sidebarToggleIcon.classList.add('fa-bars');
            sidebarToggleBtn.classList.remove('sidebar-toggle-open');
        } else {
            sidebar.classList.add('sidebar-open');
            sidebarOverlay.classList.add('sidebar-overlay-show');
            sidebarToggleIcon.classList.remove('fa-bars');
            sidebarToggleIcon.classList.add('fa-times');
            sidebarToggleBtn.classList.add('sidebar-toggle-open');
        }
    }

    sidebarToggleBtn.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', function() {
        if (sidebar.classList.contains('sidebar-open')) {
            toggleSidebar();
        }
    });
</script>
</body>

</html>