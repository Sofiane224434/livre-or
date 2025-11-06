<div class="max-w-2xl mx-auto px-4 py-8">
    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-10 border-4 border-pink-300">
        <div class="text-center mb-8">
            <span class="text-6xl mb-4 block">💬</span>
            <h1
                class="text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-2">
                Ajouter un commentaire</h1>
            <p class="text-gray-600">Exprimez-vous avec vos mots ! 💕</p>
        </div>

        <form action="<?php echo url('goldbook/add'); ?>" method="post" class="space-y-6">
            <div>
                <label for="content" class="block text-gray-800 font-bold mb-3 text-lg">✨ Votre commentaire</label>
                <textarea name="content" id="content" rows="7" placeholder="Écrivez votre commentaire ici... 💌"
                    class="w-full px-5 py-4 border-2 border-pink-200 rounded-2xl focus:ring-4 focus:ring-pink-300 focus:border-pink-400 transition duration-200 resize-none text-gray-700 placeholder-gray-400"></textarea>
                <p class="mt-3 text-sm text-gray-500 italic">💕 Partagez vos impressions et sentiments.</p>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-pink-500 to-purple-500 hover:from-pink-600 hover:to-purple-600 text-white font-bold py-4 px-8 rounded-2xl shadow-xl transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-pink-300">
                <span class="flex items-center justify-center text-lg">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Envoyer 💌
                </span>
            </button>
        </form>
    </div>
</div>