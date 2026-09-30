<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks</title>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
    <h1>All Tasks</h1>
    <nav>
        <a href="/">Today's Tasks</a> | 
        <a href="/tasks">View All Tasks</a> | 
        <a href="/profile">Profile</a> | 
        <a href="/about">About</a>
    </nav>
    <hr>
    <ul>
        <?php if (!empty($tasks) && is_array($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <li><strong><?= esc($task['task_date']) ?></strong>: <?= esc($task['title']) ?> (<em><?= esc($task['status']) ?></em>)</li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No tasks found.</li>
        <?php endif; ?>
    </ul>
</body>
</html>