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

<?php require_once('partials/footer.php'); ?>