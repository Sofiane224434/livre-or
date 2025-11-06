<div class="max-w-2xl mx-auto px-4 py-8">
    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-10 border-4 border-pink-300">
        <div class="text-center mb-8">
            <span class="text-6xl mb-4 block">✍️</span>
            <h1
                class="text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-2">
                Ajouter un message</h1>
            <p class="text-gray-600">Partagez vos plus beaux souvenirs ! 💕</p>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div
                class="bg-red-50 border-l-4 border-red-500 text-red-800 px-4 py-3 rounded-lg mb-6 flex items-center shadow-md">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
                <?php echo e($_SESSION['error']);
                unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo url('goldbook/add'); ?>" method="post" class="space-y-6">
            <div>
                <label for="content" class="block text-gray-800 font-bold mb-3 text-lg">✨ Votre message</label>
                <textarea name="content" id="content" rows="7" placeholder="Écrivez votre message ici... 💌" required
                    class="w-full px-5 py-4 border-2 border-pink-200 rounded-2xl focus:ring-4 focus:ring-pink-300 focus:border-pink-400 transition duration-200 resize-none text-gray-700 placeholder-gray-400"></textarea>
                <p class="mt-3 text-sm text-gray-500 italic">💕 Partagez vos pensées, vos impressions ou vos messages
                    d'amour avec la communauté.</p>
            </div>

            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-pink-500 to-purple-500 hover:from-pink-600 hover:to-purple-600 text-white font-bold py-4 px-8 rounded-2xl shadow-xl transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-pink-300">
                    <span class="flex items-center justify-center text-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Envoyer 💌
                    </span>
                </button>
            </div>
        </form>

        <div class="mt-8 pt-6 border-t-2 border-pink-200 text-center">
            <a href="<?php echo url('goldbook/index'); ?>"
                class="inline-flex items-center text-pink-600 hover:text-purple-600 font-bold transition duration-200 text-lg">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Retour au livre d'or
            </a>
        </div>
    </div>
</div>