<?php require_once('partials/head.php'); ?>

<h1>My Tasks</h1>

<ul>
    <?php foreach ( $tasks as $task ): ?>
        <li>

            <?php if ( $task->is_complete ): ?>
                <strike>
            <?php endif; ?>

            <?= $task->description; ?>

            <?php if ( $task->is_complete ): ?>
                </strike>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>

<h2>Sisesta ülesanne</h2>
<form method="POST" action="/task">
    <input type="text" name="description">
    <input type="submit" value="Salvesta">
</form>

<?php require_once('partials/footer.php'); ?>