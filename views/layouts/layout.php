<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? escape($title) . ' - ' . APP_NAME : APP_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-brand">
                    <a href="<?php echo url(); ?>"><?php echo APP_NAME; ?></a>
                </div>

                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo url(); ?>">🏠 Accueil</a></li>
                    <?php if (is_logged_in()): ?>
                        <li><a href="<?php echo url('profile'); ?>">👤 Profil</a></li>
                        <li><a href="<?php echo url('goldbook'); ?>">📖 Livre d'Or</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo url('auth/login'); ?>">🔐 Connexion</a></li>
                        <li><a href="<?php echo url('auth/register'); ?>">✍️ Inscription</a></li>
                    <?php endif; ?>
                </ul>

                <?php if (is_logged_in()): ?>
                    <span>👤 <?php e(get_login_by_id($_SESSION['id'])); ?></span>
                    <a href="<?php echo url('auth/logout'); ?>" class="logout-button">Déconnexion</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <?php
        // Affichage des messages flash
        $flash_messages = get_flash_messages();
        if (!empty($flash_messages)):
            ?>
            <div class="flash-messages">
                <?php foreach ($flash_messages as $type => $messages): ?>
                    <?php foreach ($messages as $message): ?>
                        <div class="flash-message flash-<?php echo escape($type); ?>">
                            <span><?php echo escape($message); ?></span>
                            <button class="flash-close" onclick="this.parentElement.remove()" title="Fermer">×</button>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php echo $content ?? ''; ?>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div style="max-width: 1200px; margin: 0 auto; padding: 20px; text-align: center; color: #666;">
                <p>&copy; <?php echo date('Y'); ?> <?php echo APP_NAME; ?> - Kit de démarrage MVC pour l'apprentissage
                </p>
                <p style="font-size: 0.9em; margin-top: 10px;">
                    Développé avec ❤️ pour les étudiants |
                    <a href="<?php echo url('documentation'); ?>" style="color: #667eea;">Documentation</a> |
                    <a href="<?php echo url('example'); ?>" style="color: #667eea;">Exemples</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>