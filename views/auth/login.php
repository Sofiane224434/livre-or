<div
    class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-rose-50 via-pink-50 to-purple-50">
    <div class="max-w-md w-full">
        <!-- Décoration avec emojis -->
        <div class="text-center mb-8 relative">
            <div class="absolute -top-4 -left-4 text-4xl animate-pulse">💕</div>
            <div class="absolute -top-4 -right-4 text-4xl animate-pulse">💝</div>

            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl px-8 py-10 border-4 border-pink-300">
                <div class="mb-6">
                    <span class="text-4xl">🔐</span>
                </div>

                <h1
                    class="text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-2">
                    <?php e($title); ?>
                </h1>
                <p class="text-gray-600 text-lg">Connectez-vous à votre compte</p>
            </div>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl px-8 py-10 border-4 border-pink-300">
            <form method="POST" action="<?php echo url('auth/login'); ?>" class="space-y-6">
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
                    <input type="password" id="password" name="password" required placeholder="Votre mot de passe"
                        class="w-full px-4 py-3 border-2 border-pink-200 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition duration-200 bg-white/50">
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold py-3 px-6 rounded-xl hover:from-pink-600 hover:to-purple-700 transform hover:scale-105 transition duration-200 shadow-lg hover:shadow-xl">
                    ✨ Se connecter
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Pas encore de compte ?
                    <a href="<?php echo url('auth/register'); ?>"
                        class="font-semibold text-pink-600 hover:text-purple-600 transition duration-200">
                        S'inscrire 💫
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>