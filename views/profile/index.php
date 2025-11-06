<div>
    <div>
        <div>👤</div>
        <h1>Mon Profil</h1>
        <p>Gérez vos informations personnelles</p>
    </div>

    <div>

        <!-- Informations du profil -->
        <div>
            <h2>📋 Informations du compte</h2>

            <div>
                <div>
                    <div>Login</div>
                    <div>
                        <?php e($user['login']); ?>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div>Identifiant</div>
                    <div>
                        #<?php e($user['id']); ?>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div>Mot de passe</div>
                    <div>
                        ••••••••••
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions de modification -->
        <div>
            <h2>⚙️ Modifier mes informations</h2>

            <div>
                <a href="<?php echo url('profile/edit_login'); ?>">
                    <div>✏️</div>
                    <div>
                        <div>Modifier mon login</div>
                        <div>Changez votre nom d'utilisateur</div>
                    </div>
                    <div>→</div>
                </a>

                <a href="<?php echo url('profile/edit_password'); ?>">
                    <div>🔒</div>
                    <div>
                        <div>Modifier mon mot de passe</div>
                        <div>Sécurisez votre compte avec un nouveau mot de passe</div>
                    </div>
                    <div>→</div>
                </a>
            </div>
        </div>

        <!-- Lien de retour -->
        <div>
            <a href="<?php echo url(); ?>">
                ← Retour à l'accueil
            </a>
        </div>
    </div>
</div>