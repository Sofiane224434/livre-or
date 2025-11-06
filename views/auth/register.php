<div
    class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50">
    <div class="max-w-md w-full">
        <!-- Décoration avec emojis -->
        <div class="text-center mb-8 relative">
            <div class="absolute -top-4 -left-4 text-4xl animate-pulse">🌸</div>
            <div class="absolute -top-4 -right-4 text-4xl animate-pulse">🌺</div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl px-8 py-10 border-4 border-pink-300">
                <div class="mb-6">
                    <span class="text-4xl">✨</span>
                </div>

                <h1
                    class="text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-2">
                    <?php e($title); ?>
                </h1>
                <p class="text-gray-600 text-lg">Créez votre compte</p>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl px-8 py-10 border-4 border-pink-300">
            <form method="POST" class="space-y-6">
                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">

                <div>
                    <label for="login" class="block text-sm font-semibold text-gray-700 mb-2">
                        👤 Identifiant
                    </label>
                    <input type="text" id="login" name="login" required value="<?php echo escape(post('login', '')); ?>"
                        placeholder="Votre identifiant"
                        class="w-full px-4 py-3 border-2 border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition duration-200 bg-white/50">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        🔒 Mot de passe
                    </label>
                    <input type="password" id="password" name="password" required placeholder="Mot de passe robuste"
                        title="Au moins 8 caractères, 1 lettre minuscule, 1 lettre majuscule et 1 chiffre"
                        class="w-full px-4 py-3 border-2 border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition duration-200 bg-white/50">
                    <p class="mt-1 text-xs text-gray-500">
                        ℹ️ Min. 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre
                    </p>
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-semibold text-gray-700 mb-2">
                        🔐 Confirmer le mot de passe
                    </label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        placeholder="Confirmez votre mot de passe"
                        class="w-full px-4 py-3 border-2 border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition duration-200 bg-white/50">
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold py-3 px-6 rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition duration-200 shadow-lg hover:shadow-xl">
                    💫 S'inscrire
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Déjà un compte ?
                    <a href="<?php echo url('auth/login'); ?>"
                        class="font-semibold text-pink-600 hover:text-purple-600 transition duration-200">
                        Se connecter ✨
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>