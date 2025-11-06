<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="text-center mb-10">
        <div class="text-7xl mb-4">✏️</div>
        <h1
            class="text-5xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-3">
            Modifier mon login</h1>
        <p class="text-gray-600 text-lg">Changez votre nom d'utilisateur ✨</p>
    </div>

    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-10 border-4 border-pink-300">

        <!-- Information actuelle -->
        <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-6 mb-8 border-2 border-pink-200">
            <div class="flex items-center justify-between">
                <div>
                    <div class="text-sm font-semibold text-gray-600 mb-2">Login actuel :</div>
                    <div class="text-2xl font-bold text-gray-800 flex items-center">
                        <span class="mr-2">👤</span><?php e($user['login']); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire -->
        <form method="POST" action="<?php echo url('profile/update_login'); ?>" class="space-y-6">

            <div>
                <label for="login" class="block text-gray-800 font-bold mb-2 text-lg">
                    <span class="mr-2">✨</span>Nouveau login *
                </label>
                <input type="text" id="login" name="login" required minlength="3"
                    placeholder="Entrez votre nouveau login"
                    class="w-full px-5 py-4 border-2 border-pink-200 rounded-2xl focus:ring-4 focus:ring-pink-300 focus:border-pink-400 transition duration-200 text-gray-700">
                <small class="text-sm text-gray-500 mt-2 block">
                    Le login doit contenir au moins 3 caractères
                </small>
            </div>

            <div>
                <label for="password" class="block text-gray-800 font-bold mb-2 text-lg">
                    <span class="mr-2">🔑</span>Mot de passe actuel * (pour confirmation)
                </label>
                <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe"
                    class="w-full px-5 py-4 border-2 border-pink-200 rounded-2xl focus:ring-4 focus:ring-pink-300 focus:border-pink-400 transition duration-200 text-gray-700">
                <small class="text-sm text-gray-500 mt-2 block">
                    Pour des raisons de sécurité, veuillez confirmer votre mot de passe
                </small>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-lg">
                <div class="flex items-start">
                    <span class="text-2xl mr-3">⚠️</span>
                    <div>
                        <strong class="text-yellow-800">Attention :</strong>
                        <span class="text-yellow-700">Après modification, vous devrez utiliser votre nouveau login pour
                            vous connecter.</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-pink-500 to-purple-500 hover:from-pink-600 hover:to-purple-600 text-white font-bold py-4 px-8 rounded-2xl shadow-xl transition duration-300 transform hover:scale-105 text-lg">
                    <span class="flex items-center justify-center">
                        <span class="mr-2">✓</span> Enregistrer les modifications
                    </span>
                </button>

                <a href="<?php echo url('profile'); ?>"
                    class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-8 rounded-2xl transition duration-200 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Annuler
                </a>
            </div>
        </form>
    </div>
</div>