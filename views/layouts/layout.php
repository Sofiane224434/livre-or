<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? escape($title) . ' - ' . APP_NAME : APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('assets/css/output.css'); ?>">
</head>

<body class="min-h-screen flex flex-col bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50 text-gray-800">

    <header class="bg-white/90 backdrop-blur-sm shadow-lg border-b-4 border-pink-300">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-4">
                    <a href="<?php echo url(); ?>" class="flex items-center space-x-3 group">
                        <span class="text-4xl">💕</span>
                        <span
                            class="text-2xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent hover:from-pink-700 hover:to-purple-700 transition duration-300">
                            <?php echo APP_NAME; ?>
                        </span>
                    </a>
                </div>

                <div class="flex items-center">
                    <!-- Mobile toggle -->
                    <button id="mobileMenuBtn"
                        class="md:hidden p-2 rounded-lg text-pink-600 hover:bg-pink-100 focus:outline-none transition duration-200"
                        aria-label="Toggle menu">
                        <span class="text-2xl">☰</span>
                    </button>

                    <!-- Menu -->
                    <ul id="navMenu" class="hidden md:flex md:items-center md:space-x-2">
                        <li><a href="<?php echo url(); ?>"
                                class="px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gradient-to-r hover:from-pink-100 hover:to-purple-100 hover:text-pink-700 transition duration-200">🏠
                                Accueil</a>
                        </li>
                        <?php if (is_logged_in()): ?>
                            <li><a href="<?php echo url('profile'); ?>"
                                    class="px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gradient-to-r hover:from-pink-100 hover:to-purple-100 hover:text-pink-700 transition duration-200">👤
                                    Profil</a></li>
                            <li><a href="<?php echo url('goldbook'); ?>"
                                    class="px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gradient-to-r hover:from-pink-100 hover:to-purple-100 hover:text-pink-700 transition duration-200">📖
                                    Livre d'Or</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo url('auth/login'); ?>"
                                    class="px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gradient-to-r hover:from-pink-100 hover:to-purple-100 hover:text-pink-700 transition duration-200">🔐
                                    Connexion</a></li>
                            <li><a href="<?php echo url('auth/register'); ?>"
                                    class="px-4 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gradient-to-r hover:from-pink-100 hover:to-purple-100 hover:text-pink-700 transition duration-200">✍️
                                    Inscription</a></li>
                        <?php endif; ?>
                    </ul>

                    <?php if (is_logged_in()): ?>
                        <div class="hidden md:flex md:items-center md:ml-4 space-x-3">
                            <span
                                class="px-3 py-1.5 bg-gradient-to-r from-pink-100 to-purple-100 text-pink-700 font-semibold rounded-lg text-sm border border-pink-200">👤
                                <?php e(get_login_by_id($_SESSION['id'])); ?></span>
                            <a href="<?php echo url('auth/logout'); ?>"
                                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white text-sm font-bold rounded-lg hover:from-red-600 hover:to-red-700 shadow-md hover:shadow-lg transition duration-200 transform hover:scale-105">Déconnexion</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
        <?php
        // Affichage des messages flash
        $flash_messages = get_flash_messages();
        if (!empty($flash_messages)):
            ?>
            <div class="fixed top-4 right-4 z-50 space-y-2 w-full max-w-xs">
                <?php foreach ($flash_messages as $type => $messages): ?>
                    <?php foreach ($messages as $message):
                        // map type to color
                        $color = ($type === 'success') ? 'green' : (($type === 'error') ? 'red' : 'blue');
                        ?>
                        <div
                            class="flex items-start justify-between px-4 py-2 border-l-4 bg-<?= $color ?>-50 border-<?= $color ?>-400 text-<?= $color ?>-800 rounded shadow">
                            <div class="text-sm">
                                <?php echo escape($message); ?>
                            </div>
                            <button class="ml-4 text-<?= $color ?>-600 font-bold" onclick="this.parentElement.remove()"
                                title="Fermer">×</button>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php echo $content ?? ''; ?>
    </main>

    <footer class="bg-gradient-to-r from-pink-200 via-purple-200 to-pink-200 py-3 mt-4 text-center">
        <div class="flex justify-center gap-2 mb-2 text-2xl items-center">
            <span>🌸</span>
            <span>💕</span>
            <span>🌺</span>
        </div>
        <p class="text-gray-700 text-base font-semibold mb-1">Habib &amp; Fatima</p>
        <p class="text-gray-600 text-sm">&copy; <?php echo date('Y'); ?> — <?php echo APP_NAME; ?> — Tous droits
            réservés</p>
        <p class="text-xs text-gray-500 mt-2">Avec tout notre amour 💖</p>
    </footer>
</body>

</html>