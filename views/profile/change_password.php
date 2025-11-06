<div>
    <div>
        <div>🔒</div>
        <h1>Modifier mon mot de passe</h1>
        <p>Sécurisez votre compte</p>
    </div>

    <div>

        <!-- Information -->
        <div>
            <div>
                <strong>💡 Conseil :</strong> Choisissez un mot de passe fort contenant au moins 6 caractères.
            </div>
        </div>

        <!-- Formulaire -->
        <form method="POST" action="<?php echo url('profile/update_password'); ?>">

            <div>
                <label for="current_password">Mot de passe actuel *</label>
                <input type="password" id="current_password" name="current_password" required
                    placeholder="Entrez votre mot de passe actuel">
            </div>

            <div>
                <label for="new_password">Nouveau mot de passe *</label>
                <input type="password" id="new_password" name="new_password" required minlength="6"
                    placeholder="Entrez votre nouveau mot de passe">
                <small>Au moins 6 caractères</small>
            </div>

            <div>
                <label for="confirm_password">Confirmer le nouveau mot de passe *</label>
                <input type="password" id="confirm_password" name="confirm_password" required minlength="6"
                    placeholder="Confirmez votre nouveau mot de passe">
            </div>

            <div>
                <div>
                    ⚠️ <strong>Attention :</strong> Après modification, vous devrez utiliser votre nouveau mot de passe
                    pour vous connecter.
                </div>
            </div>

            <div>
                <button type="submit">✓ Modifier le mot de passe</button>
                <a href="<?php echo url('profile'); ?>">← Annuler</a>
            </div>
        </form>

        <!-- Conseils de sécurité -->
        <div>
            <h3>🛡️ Conseils de sécurité</h3>
            <ul>
                <li>Utilisez au moins 6 caractères</li>
                <li>Mélangez lettres, chiffres et symboles</li>
                <li>Évitez les mots du dictionnaire</li>
                <li>Ne réutilisez pas vos anciens mots de passe</li>
                <li>Ne partagez jamais votre mot de passe</li>
            </ul>
        </div>
    </div>
</div>