<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée - <?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('assets/css/output.css'); ?>">
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50">
    <div class="max-w-2xl w-full mx-auto px-4">
        <!-- Décoration avec emojis -->
        <div class="relative">
            <div class="absolute -top-8 left-10 text-5xl animate-bounce">🌸</div>
            <div class="absolute -top-8 right-10 text-5xl animate-bounce" style="animation-delay: 0.2s;">🌺</div>
            <div class="absolute top-20 -left-8 text-4xl opacity-70 animate-pulse">💔</div>
            <div class="absolute top-20 -right-8 text-4xl opacity-70 animate-pulse" style="animation-delay: 0.3s;">😢
            </div>

            <div
                class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl px-8 py-12 border-4 border-pink-300 text-center">
                <!-- Icône d'erreur -->
                <div class="mb-8">
                    <div
                        class="w-32 h-32 mx-auto rounded-full border-4 border-pink-400 shadow-xl bg-gradient-to-br from-pink-100 to-purple-100 flex items-center justify-center">
                        <span class="text-6xl">🔍</span>
                    </div>
                </div>

                <!-- Code 404 -->
                <h1
                    class="text-8xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-4">
                    404
                </h1>

                <!-- Message d'erreur -->
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Page non trouvée
                </h2>

                <p class="text-gray-600 text-lg mb-8 max-w-md mx-auto">
                    Oups ! La page que vous recherchez semble s'être envolée comme des pétales au vent... 🌸
                </p>

                <!-- Boutons d'action -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="<?php echo url(); ?>"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold py-3 px-8 rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition duration-200 shadow-lg hover:shadow-xl">
                        🏠 Retour à l'accueil
                    </a>
                    <button onclick="history.back()"
                        class="inline-flex items-center gap-2 bg-white text-gray-700 font-bold py-3 px-8 rounded-xl border-2 border-pink-300 hover:bg-pink-50 transform hover:scale-105 transition duration-200 shadow-lg hover:shadow-xl">
                        ← Page précédente
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>