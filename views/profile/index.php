<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="text-center mb-10">
        <div class="text-7xl mb-4">👤</div>
        <h1
            class="text-5xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-3">
            Mon Profil</h1>
        <p class="text-gray-600 text-lg">Gérez vos informations personnelles 💕</p>
    </div>

    <div class="space-y-6">

        <!-- Informations du profil -->
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border-4 border-pink-300">
            <h2
                class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-6 flex items-center">
                <span class="mr-3">📋</span> Informations du compte
            </h2>

            <div class="space-y-4">
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-6 border-2 border-pink-200">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="text-sm font-semibold text-gray-600 mb-2">Login</div>
                            <div class="text-2xl font-bold text-gray-800 flex items-center">
                                <span class="mr-2">👤</span><?php e($user['login']); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-6 border-2 border-pink-200">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="text-sm font-semibold text-gray-600 mb-2">Identifiant</div>
                            <div class="text-2xl font-bold text-gray-800">
                                #<?php e($user['id']); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-6 border-2 border-pink-200">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="text-sm font-semibold text-gray-600 mb-2">Mot de passe</div>
                            <div class="text-2xl font-bold text-gray-800 flex items-center">
                                <span class="mr-2">🔒</span>••••••••••
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions de modification -->
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border-4 border-purple-300">
            <h2
                class="text-3xl font-bold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-6 flex items-center">
                <span class="mr-3">⚙️</span> Modifier mes informations
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="<?php echo url('profile/edit_login'); ?>" class="group">
                    <div
                        class="bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700 rounded-2xl p-6 text-white shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <div class="text-5xl mb-3">✏️</div>
                        <div class="text-xl font-bold">Modifier mon login</div>
                        <p class="text-sm mt-2 opacity-90">Changez votre nom d'utilisateur</p>
                    </div>
                </a>

                <a href="<?php echo url('profile/edit_password'); ?>" class="group">
                    <div
                        class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 rounded-2xl p-6 text-white shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <div class="text-5xl mb-3">🔒</div>
                        <div class="text-xl font-bold">Modifier mon mot de passe</div>
                        <p class="text-sm mt-2 opacity-90">Sécurisez votre compte</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Lien de retour -->
        <div class="text-center pt-6">
            <a href="<?php echo url(); ?>"
                class="inline-flex items-center text-pink-600 hover:text-purple-600 font-bold text-lg transition duration-200">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Retour à l'accueil
            </a>
        </div>
    </div>
</div>