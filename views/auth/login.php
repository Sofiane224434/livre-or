<div>
    <div>
        <div>
            <h1><?php e($title); ?></h1>
            <p>Connectez-vous à votre compte</p>
        </div>

        <form method="POST" action="<?php echo url('auth/login'); ?>">
            <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">

            <div>
                <label for="login">Login</label>
                <input type="text" id="login" name="login" required value="<?php echo escape(post('login', '')); ?>"
                    placeholder="votre login">
            </div>

            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="Votre mot de passe">
            </div>

            <button type="submit"></button>
            Se connecter
            </button>
        </form>

        <div></div>
        <p>Pas encore de compte ?
            <a href="<?php echo url('auth/register'); ?>">S'inscrire</a>
        </p>
    </div>
</div>
</div>