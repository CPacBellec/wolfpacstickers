</main>
    <footer class="bg-black text-slate-500 text-center py-4 mt-auto">
        <p>&copy; <?php echo date("Y"); ?> Wolfpac-Stickers. Site réalisé par Pac.</p>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var mobileMenuButton = document.getElementById('mobile-menu-button');
        var mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>