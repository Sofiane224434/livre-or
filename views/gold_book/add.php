<div>
    <h1>Ajouter un message</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <div style="color: red; padding: 10px; margin-bottom: 10px; border: 1px solid red; background-color: #ffeeee;">
            <?php echo e($_SESSION['error']);
            unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo url('goldbook/add'); ?>" method="post">
        <textarea name="content" rows="5" placeholder="Votre message..." required></textarea>
        <button type="submit">Envoyer</button>
    </form>

    <br>
    <a href="<?php echo url('goldbook/index'); ?>">Retour au livre d'or</a>
</div>