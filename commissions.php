<?php
include_once 'header.php';
?>
    <div class="bg-indigo-300">
        <div class=" flex justify-center items-center">
            <img src="./assets/commission-sprite.png" alt="logo" class="flex justify-center items-center w-9/12 md:w-1/2 lg:w-7/12 xl:w-12/20 h-auto animate__animated animate__flipInX animate__slow">
        </div>
        <section id="commissions" class="max-w-2xl mx-auto py-5">
            <div>
                <h2 class="text-3xl font-bold mb-4">Zone commission</h2>
                <p class="text-2xl mb-8">Cette partie concerne les futurs commissions du site (WIP)</p>
            </div>
            <?php
                // Array de données de cartes (modifiable selon vos besoins)
                $cards = [
                    [
                        'title' => 'Coeur',
                        'image' => 'assets/full-red-heart.png',
                        'description' => 'De petits coeurs en format 16X16 pixels. La forme et les couleurs sont modifiables à la demande. Prix : WIP',
                    ],
                    [
                        'title' => 'Style Gameboy',
                        'image' => 'assets/wolf-gameboy-style-export.png',
                        'description' => "Des personnages dans le style de la première GameBoy en format 16X16. L'apparence est modifiable à la demande. Prix : WIP ",
                    ],
                    [
                        'title' => 'Personnage couleur',
                        'image' => 'assets/bear-test-export.png',
                        'description' => "Des personnages colorisés en format 16X16. L'apparence et les couleurs sont modifiables à la demande. Prix : WIP ",
                    ],
                    // Ajoutez autant d'éléments que nécessaire
                ];

                foreach ($cards as $card) {
                    ?>
                    <div class="flex">
                        <div class=" max-w-sm mx-auto bg-white rounded overflow-hidden shadow-lg my-4">
                            <img class="w-full" src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2"><?php echo $card['title']; ?></div>
                                <p class="text-gray-700 text-base"><?php echo $card['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                }
            ?>
            


            

        </section>

        <section id="portfolio">

        </section>
        
</div>
<?php
include_once 'footer.php';
?>