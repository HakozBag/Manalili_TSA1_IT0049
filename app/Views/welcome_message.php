<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today's Tasks</title>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
    <h1>Tasks for Today</h1>
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
                <li><?= esc($task['title']) ?> - Status: <?= esc($task['status']) ?> (Date: <?= esc($task['task_date']) ?>)</li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No tasks scheduled for today.</li>
        <?php endif; ?>
    </ul>
</body>
</html>