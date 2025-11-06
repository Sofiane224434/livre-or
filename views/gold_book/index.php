<div>
    <h1>Mon Livre d'Or</h1>
    <p>Voici les messages laissés par les utilisateurs :</p>

    <?php if (isset($_SESSION['success'])): ?>
        <div style="color: green; padding: 10px; margin-bottom: 10px; border: 1px solid green; background-color: #eeffee;">
            <?php echo e($_SESSION['success']);
            unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <a href="<?php echo url('goldbook/add'); ?>">Ajouter un message</a>

    <div>
        <?php if (!empty($entries)): ?>
            <ul>
                <?php foreach ($entries as $entry): ?>
                    <li>
                        <strong><?php echo e($entry['user_name']); ?></strong>
                        <em>(<?php echo e($entry['date']); ?>)</em> :
                        <span><?php echo e($entry['content']); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucun message n'a été laissé pour le moment.</p>
        <?php endif; ?>
    </div>
</div>