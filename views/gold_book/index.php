<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="mb-8">
        <div class="text-center mb-6">
            <span class="text-5xl mb-4 block">📖</span>
            <h1
                class="text-5xl font-extrabold bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent mb-4">
                Mon Livre d'Or</h1>
            <p class="text-gray-600 text-lg mb-6">Partagez vos plus beaux souvenirs et messages ! 💕</p>
        </div>

        <?php if (isset($_SESSION['success'])): ?>
            <div
                class="bg-green-50 border-l-4 border-green-500 text-green-800 px-4 py-3 rounded-lg mb-6 flex items-center shadow-md">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <?php echo e($_SESSION['success']);
                unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <a href="<?php echo url('goldbook/add'); ?>"
                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-500 hover:from-pink-600 hover:to-purple-600 text-white font-bold rounded-2xl shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Ajouter un message ✨
            </a>
        </div>
    </div>

    <div class="space-y-6 mt-12">
        <?php if (!empty($entries)): ?>
            <div class="space-y-6">
                <?php foreach ($entries as $entry): ?>
                    <div
                        class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 border-2 border-pink-200 hover:shadow-2xl hover:border-pink-300 transition duration-300 transform hover:scale-[1.02]">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4 shadow-lg">
                                    <?php echo e(strtoupper(substr($entry['user_name'], 0, 1))); ?>
                                </div>
                                <div>
                                    <strong
                                        class="text-gray-800 font-bold text-lg"><?php echo e($entry['user_name']); ?></strong>
                                    <p class="text-pink-600 text-sm flex items-center">
                                        <span class="mr-1">💕</span>
                                        <time
                                            datetime="<?php echo e($entry['date']); ?>"><?php echo e($entry['date']); ?></time>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed pl-16 text-lg"><?php echo e($entry['content']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
                <div class="flex justify-center items-center space-x-2 mt-8">
                    <!-- Bouton Précédent -->
                    <?php if ($current_page > 1): ?>
                        <a href="<?php echo url('goldbook/index?page=' . ($current_page - 1)); ?>"
                            class="px-4 py-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white font-semibold rounded-lg shadow-md hover:from-pink-600 hover:to-purple-600 transition duration-300">
                            ← Précédent
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2 bg-gray-300 text-gray-500 font-semibold rounded-lg cursor-not-allowed">
                            ← Précédent
                        </span>
                    <?php endif; ?>

                    <!-- Numéros de page -->
                    <div class="flex space-x-2">
                        <?php
                        $start_page = max(1, $current_page - 2);
                        $end_page = min($total_pages, $current_page + 2);

                        if ($start_page > 1): ?>
                            <a href="<?php echo url('goldbook/index?page=1'); ?>"
                                class="px-4 py-2 bg-white border-2 border-pink-200 text-gray-700 font-semibold rounded-lg hover:bg-pink-50 transition duration-300">
                                1
                            </a>
                            <?php if ($start_page > 2): ?>
                                <span class="px-2 py-2 text-gray-500">...</span>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                            <?php if ($i == $current_page): ?>
                                <span
                                    class="px-4 py-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white font-bold rounded-lg shadow-lg">
                                    <?php echo e($i); ?>
                                </span>
                            <?php else: ?>
                                <a href="<?php echo url('goldbook/index?page=' . $i); ?>"
                                    class="px-4 py-2 bg-white border-2 border-pink-200 text-gray-700 font-semibold rounded-lg hover:bg-pink-50 transition duration-300">
                                    <?php echo e($i); ?>
                                </a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($end_page < $total_pages): ?>
                            <?php if ($end_page < $total_pages - 1): ?>
                                <span class="px-2 py-2 text-gray-500">...</span>
                            <?php endif; ?>
                            <a href="<?php echo url('goldbook/index?page=' . $total_pages); ?>"
                                class="px-4 py-2 bg-white border-2 border-pink-200 text-gray-700 font-semibold rounded-lg hover:bg-pink-50 transition duration-300">
                                <?php echo e($total_pages); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Bouton Suivant -->
                    <?php if ($current_page < $total_pages): ?>
                        <a href="<?php echo url('goldbook/index?page=' . ($current_page + 1)); ?>"
                            class="px-4 py-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white font-semibold rounded-lg shadow-md hover:from-pink-600 hover:to-purple-600 transition duration-300">
                            Suivant →
                        </a>
                    <?php else: ?>
                        <span class="px-4 py-2 bg-gray-300 text-gray-500 font-semibold rounded-lg cursor-not-allowed">
                            Suivant →
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Info pagination -->
                <div class="text-center mt-4">
                    <p class="text-gray-600">
                        Page <strong class="text-pink-600"><?php echo e($current_page); ?></strong> sur
                        <strong class="text-pink-600"><?php echo e($total_pages); ?></strong>
                        (<?php echo e($total_entries); ?> message<?php echo $total_entries > 1 ? 's' : ''; ?> au total)
                    </p>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="bg-white/80 backdrop-blur-sm border-2 border-pink-200 rounded-2xl p-12 text-center shadow-xl">
                <div class="text-7xl mb-4">💌</div>
                <p class="text-gray-600 text-xl font-semibold mb-2">Aucun message n'a été laissé pour le moment.</p>
                <p class="text-pink-500 text-md mt-2">Soyez le premier à laisser un message ! 🌸</p>
            </div>
        <?php endif; ?>
    </div>
</div>