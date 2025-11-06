<div>
    <div>
        <div>✏️</div>
        <h1>Modifier mon login</h1>
        <p>Changez votre nom d'utilisateur</p>
    </div>

    <div>

        <!-- Information actuelle -->
        <div>
            <div>Login actuel :</div>
            <div>
                <?php e($user['login']); ?>
            </div>
        </div>

        <!-- Formulaire -->
        <form method="POST" action="<?php echo url('profile/update_login'); ?>">

            <div>
                <label for="login">
                    Nouveau login *
                </label>
                <input type="text" id="login" name="login" required minlength="3"
                    placeholder="Entrez votre nouveau login">
                <small>
                    Le login doit contenir au moins 3 caractères
                </small>
            </div>

            <div>
                <label for="password">
                    Mot de passe actuel * (pour confirmation)
                </label>
                <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe">
                <small>
                    Pour des raisons de sécurité, veuillez confirmer votre mot de passe
                </small>
            </div>

            <div>
                <div>
                    ⚠️ <strong>Attention :</strong> Après modification, vous devrez utiliser votre nouveau login pour
                    vous connecter.
                </div>
            </div>

            <div>
                <button type="submit">
                    ✓ Enregistrer les modifications
                </button>

                <a href="<?php echo url('profile'); ?>">
                    ← Annuler
                </a>
            </div>
        </form>
    </div>
</div>