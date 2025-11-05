<div>
    <div>
        <div>
            <h1><?php e($title); ?></h1>
            <p>Créez votre compte</p>
        </div>

        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">

            <div>
                <label for="login">Identifiant</label>
                <input type="text" id="login" name="login" required value="<?php echo escape(post('login', '')); ?>"
                    placeholder="votre identifiant">
            </div>

            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="Mot de passe robuste"
                    title="Au moins 8 caractères, 1 lettre minuscule, 1 lettre majuscule et 1 chiffre">
            </div>

            <div>
                <label for="confirm_password">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password" required
                    placeholder="Confirmez votre mot de passe">
            </div>

            <button type="submit"></button>
            S'inscrire
            </button>
        </form>

        <div></div>
        <p>Déjà un compte ?
            <a href="<?php echo url('auth/login'); ?>">Se connecter</a>
        </p>
    </div>
</div>