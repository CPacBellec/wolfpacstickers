<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolfpac Stickers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'VT323', monospace;
    }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <header>
        <nav class="bg-black p-8">
            <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center">
                <!-- Logo et Bouton Hamburger dans un conteneur flexible -->
                <div class="flex items-center gap-10">
                    <!-- Logo -->
                    <h1 class="text-center text-slate-500 text-3xl font-bold  mb-4 sm:mb-0">Wolfpac Stickers</h1>

                    <!-- Bouton Hamburger -->
                    <button id="mobile-menu-button" class="block sm:hidden text-white ml-2">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu principal -->
                <ul id="mobile-menu" class="hidden sm:flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <li><a href="index.php" class="text-2xl text-slate-500 hover:text-gray-300">Accueil</a></li>
                    <li><a href="tos.php" class="text-2xl text-slate-500 hover:text-gray-300">CGU</a></li>
                    <li><a href="commissions.php" class="text-2xl text-slate-500 hover:text-gray-300">Commissions</a></li>
                    <li><a href="contacts.php" class="text-2xl text-slate-500 hover:text-gray-300">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <main>