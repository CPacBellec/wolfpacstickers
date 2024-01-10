<?php
include_once 'header.php';
?>
    <div class="bg-indigo-300 min-h-screen">
        <div class=" flex justify-center items-center">
            <img src="./assets/contact-sprite.png" alt="logo" class="flex justify-center items-center w-9/12 md:w-1/2 lg:w-7/12 xl:w-12/20 h-auto animate__animated animate__flipInX animate__slow">
        </div>
        <section class="max-w-2xl mx-auto py-5">
            
            <h2 class="text-center text-3xl font-bold mb-4">Contactez-moi</h2>
            <p class="text-center text-2xl mb-4">Vous trouverez ici mes réseaux sociaux où vous pouvez me contacter et voir mes actualités.</p>
            <div class="flex flex-col space-y-4">
            <!-- Twitter -->
            <a href="https://twitter.com/votre_nom_twitter" target="_blank" class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                <i class="fab fa-twitter mr-2"></i>
                Twitter / X
            </a>
            <!-- Telegram -->
            <a href="https://t.me/votre_nom_telegram" target="_blank" class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                <i class="fab fa-telegram-plane mr-2"></i>
                Telegram
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/votre_nom_instagram" target="_blank" class="flex items-center justify-center px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-700">
                <i class="fab fa-instagram mr-2"></i>
                Instagram
            </a>
        </div>

        </section>
    </div>
    
<?php
include_once 'footer.php';
?>