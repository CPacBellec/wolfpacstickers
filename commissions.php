<?php
include_once 'header.php';
?>
    <div class="bg-indigo-300 min-h-screen p-8">
        <div class=" flex justify-center items-center">
            <img src="./assets/commission-sprite.png" alt="logo" class="flex justify-center items-center md:w-1/2 lg:w-9/12 h-auto animate__animated animate__flipInX animate__slow">
        </div>
        <section id="commissions" class="max-w-2xl mx-auto py-5">
            <div>
                <h2 class="text-center text-3xl font-bold mb-4">Zone commission</h2>
                <p class="text-center text-2xl mb-8">Cette partie concerne les futurs commissions du site (WIP)</p>
            </div>
            <?php
                // Array de données de cartes (modifiable selon vos besoins)
                $cards = [
                    [
                        'title' => 'Coeur',
                        'image' => 'assets/full-red-heart-export.png',
                        'description' => 'De petits coeurs en format 16X16 pixels. La forme et les couleurs sont modifiables à la demande.',
                        'price' => 'Prix : WIP',
                    ],
                    [
                        'title' => 'Style Gameboy',
                        'image' => 'assets/wolf-gameboy-style-export.png',
                        'description' => "Des personnages dans le style de la première GameBoy en format 16X16. L'apparence est modifiable à la demande.",
                        'price' => 'Prix : WIP',
                    ],  
                    [
                        'title' => 'Personnage couleur',
                        'image' => 'assets/bear-test-export.png',
                        'description' => "Des personnages colorisés en format 16X16. L'apparence et les couleurs sont modifiables à la demande.",
                        'price' => 'Prix : WIP',
                    ],
                    // Ajoutez autant d'éléments que nécessaire
                ];

                foreach ($cards as $card) {
                    ?>
                    <div class="flex">
                        <div class="md:flex lg:flex-row md:max-w-lg lg:max-w-xl mx-auto bg-white rounded overflow-hidden shadow-lg my-4">
                            <img class="w-full" src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2"><?php echo $card['title']; ?></div>
                                <p class="text-gray-700 text-base"><?php echo $card['description']; ?></p>
                                <p class="text-gray-700 text-base"><?php echo $card['price']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                }
            ?>
            
        </section>

        <section id="portfolio" class=" mx-auto py-5">
            <div class=" flex justify-center items-center">
                <img src="./assets/portfolio-sprite.png" alt="logo" class="flex justify-center items-center md:w-1/2 lg:w-9/12 h-auto animate__animated animate__flipInX animate__slow">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4 text-center">Zone portfolio</h2>
                <p class="text-2xl text-center">Cette partie concerne mes designs et futurs designs (WIP)</p>
            </div>

            <div class="flex flex-wrap justify-center items-center">
                <?php
                // Chemin du dossier portfolio
                $portfolioFolder = './assets/portfolio/';

                // Obtenez la liste des fichiers dans le dossier portfolio
                $portfolioImages = glob($portfolioFolder . '*.{jpg,png,gif}', GLOB_BRACE);

                // Divisez les images en groupes de 6
                $imageGroups = array_chunk($portfolioImages, 3);

                // Affichez les images par groupe
                foreach ($imageGroups as $group) {
                    ?>
                    <div class="flex flex-wrap justify-center items-center">
                        <?php
                        foreach ($group as $image) {
                            ?>
                            <div class="max-w-sm mx-auto overflow-hidden  my-4 px-2">
                                <img class="w-full" src="<?php echo $image; ?>" alt="Portfolio Image">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>

        
</div>
<?php
include_once 'footer.php';
?>